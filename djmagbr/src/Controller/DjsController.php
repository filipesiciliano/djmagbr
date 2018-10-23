<?php
namespace App\Controller;

use App\Controller\AppController;

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

    public function tags($id = null)
    {
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
            foreach ($tags as $tag) {
                if ($hasTag = $this->Djs->DjTags->Tags->existTag($tag)) {
                    if (!$this->Djs->DjTags->existDjTag($id, $hasTag->id)) {
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
                $this->Flash->error(__('As Tags ' . $exists. ' já foram vinculadas.'), ['key' => 'dj']);
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
}
