<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Djs Controller
 *
 * @property \App\Model\Table\DjsTable $Djs
 *
 * @method \App\Model\Entity\Dj[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DjsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $djs = $this->Djs->find('all')->contain(['DjTags' => ['Tags']]);
        $this->set(compact('djs'));
        $this->set('_serialize', ['djs']);
    }

    /**
     * View method
     *
     * @param string|null $id Dj id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dj = $this->Djs->get($id, [
            'contain' => ['DjTags']
        ]);
        $this->set('dj', $dj);
        $this->set('_serialize', ['dj']);
    }

    public function unlinkedTags()
    {
        //TODO Terminar
        $this->loadModel('DjTags');
        $this->loadModel('Djs');
        $djs = $this->Djs->find()
        ->select(['id', 'name'])
        ->toArray();

        $djTags = $this->DjTags->find()
        ->select(['tag_id'])
        ->group('DjTags.tag_id');
        
        $this->loadModel('Tags');
        $tags = $this->Tags->find()
        ->where([
            'Tags.id NOT IN' => $djTags
        ])->toArray();

        $this->set('tags', $tags);
        $this->set('djs', $djs);
    }

    public function linktag($dj_id = null, $tag_id = null)
    {
        $this->autoRender = false;
        $this->loadModel('DjTags');
        $data = [
            'dj_id' => $dj_id,
            'tag_id' => $tag_id
        ];
        if (!$this->DjTags->findByTagId($tag_id)->toArray()) {
            $dj = $this->DjTags->newEntity();
            $dj = $this->DjTags->patchEntity($dj, $data);
            if ($this->DjTags->save($dj)) {
                $message = ['success' => true, 'message' => 'Salvo com sucesso!'];
            } else {
                $message = ['success' => false, 'message' => 'Erro ao salvar!'];
            }
        } else {
            $message = ['success' => false, 'message' => 'TAG Já vinculada!'];
        }
        return $this->response->withType("application/json")->withStringBody(json_encode($message));
    }

    public function tags($id = null)
    {
        $this->loadModel('VoteTags');
        $dj = $this->Djs->get($id, [
            'contain' => ['DjTags' => ['Tags']]
        ]);
        $dj->tags = '';
        foreach ($dj->dj_tags as $k => $tag) {
            $sep = (isset($dj->dj_tags[$k+1])) ? ',' : '';
            $dj->tags .= $tag->tag->name . $sep;
        }
        $this->set('dj', $dj);
        $this->set('_serialize', ['dj']);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tags = $this->request->getData(['name']);
            $tags = explode(',', $tags);
            $exists = '';
            $new = '';
            $deleteTags = $this->Djs->DjTags->deleteAll(['dj_id' => $id]);
            foreach ($tags as $tag) {
                if ($hasTag = $this->Djs->DjTags->Tags->existTag($tag, 1)) {
                    if (!$this->Djs->DjTags->existDjTag($hasTag->id)) {
                        $djTag = $this->Djs->DjTags->newEntity();
                        $djTag->dj_id = $id;
                        $djTag->tag_id = $hasTag->id;
                        $this->Djs->DjTags->save($djTag);
                    } else {
                        $exists .= $tag . ', ';
                    }
                } else {
                    $tagE = $this->Djs->DjTags->Tags->newEntity();
                    $tagE->name = $tag;
                    $tagE->section = 1;
                    $new .= $tag . ', ';
                    // TODO Terminar
                    if ($result = $this->Djs->DjTags->Tags->save($tagE)) {
                        $tagId = $result->id;
                        $djTag = $this->Djs->DjTags->newEntity();
                        $djTag->dj_id = $id;
                        $djTag->tag_id = $tagId;
                        $this->Djs->DjTags->save($djTag);
                    }
                }
            }

            if ($new !== '') {
                $this->Flash->success(__('Tags ' . $new. ' salvas com sucesso.'), ['key' => 'dj']);
            }
            if ($exists !== '') {
                $this->Flash->error(__('As Tags ' . $exists. ' já estavam vinculadas.'), ['key' => 'dj']);
            }
            return $this->redirect(['action' => 'tags', $id]);
        }
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dj = $this->Djs->newEntity();
        if ($this->request->is('post')) {
            $dj = $this->Djs->patchEntity($dj, $this->request->getData());
            if ($this->Djs->save($dj)) {
                $this->Flash->success(__('The dj has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dj could not be saved. Please, try again.'));
        }
        $this->set(compact('dj'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Dj id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dj = $this->Djs->get($id, [
             'contain' => ['DjTags']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hasDj = $this->Djs->findByName($this->request->getData('name'))->first();
            if ($hasDj) {
                $this->Flash->error(__('There is already a DJ with this name registered.'), ['key' => 'dj']);
                return $this->redirect(['action' => 'edit', $id]);
            }
            $dj = $this->Djs->patchEntity($dj, $this->request->getData());

            if ($this->Djs->save($dj)) {
                $this->Flash->success(__('The dj has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dj could not be saved. Please, try again.'));
        }
        $this->set(compact('dj'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Dj id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dj = $this->Djs->get($id);
        if ($this->Djs->delete($dj)) {
            $this->Flash->success(__('The dj has been deleted.'));
        } else {
            $this->Flash->error(__('The dj could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    public function generateDjVotes($dj_id = null, $votes = null, $weight = null)
    {
        $this->autoRender = false;
        if ($this->request->is('post')) {
            $votes = ($votes !== 0) ? $votes : 1;
            $this->loadModel('Tags');
            for ($i = 1; $i<= $votes; $i++) {
                $voters = TableRegistry::get('Voters');
                $voter = $voters->newEntity();
                $voter->email = $this->generateRandomString(20);
                $voter->name = 'DJMagBr Random';
                $voter->gender = 1;
                $voter->city = 'RJ';
                $voter->hash = md5($voter->email . date('Y-m-d'));
                $tag = $this->Djs->DjTags->find('all')
                    ->select(['tag_id'])
                    ->where(['DjTags.dj_id' => $dj_id])
                    ->order('rand()')
                    ->first();
                if ($voters->save($voter)) {
                    $voteTags = TableRegistry::get('VoteTags');
                    $data = [
                    'tag_id' => $tag->tag_id,
                    'voter_id' => $voter->id,
                    'section' => 1,
                    'weight' => $weight,
                ];
                    $vote = $voteTags->newEntity($data, ['associated' => [], 'validate' => false]);
                    $voteTags->save($vote);
                }
            }
            return $this->response->withType("application/json")->withStringBody(json_encode(['success' => true, 'message' => 'Votos gerados com sucesso!']));
        }
    }

    public function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString . '@djmagbr.com';
    }
}
