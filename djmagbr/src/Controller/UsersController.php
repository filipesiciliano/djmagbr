<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
 public function beforeFilter(Event $event)
 {
  parent::beforeFilter($event);

  // Permitir aos usuários se registrarem e efetuar logout.
  // Você não deve adicionar a ação de "login" a lista de permissões.
  // Isto pode causar problemas com o funcionamento normal do AuthComponent.
  $this->Auth->allow(['add', 'logout']);
 }

 public function logout()
 {
  $this->Flash->success('You are now logged out.');
  return $this->redirect($this->Auth->logout());
 }

 /**
  * Index method
  *
  * @return \Cake\Http\Response|void
  */
 public function index()
 {
  $users = $this->paginate($this->Users);

  $this->set(compact('users'));
 }

 public function login()
 {
  $this->viewBuilder()->setLayout('login');

  if ($this->request->is('post')) {
   $user = $this->Auth->identify();
   if ($user) {
    $this->Auth->setUser($user);
    return $this->redirect($this->Auth->redirectUrl());
   }
   $this->Flash->error('Your username or password is incorrect.');
  }
 }

 /**
  * View method
  *
  * @param string|null $id User id.
  * @return \Cake\Http\Response|void
  * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
  */
 public function view($id = null)
 {
  $user = $this->Users->get($id, [
   'contain' => [],
  ]);

  $this->set('user', $user);
 }

 /**
  * Add method
  *
  * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
  */
 public function add()
 {
  $this->viewBuilder()->setLayout('login');

  $user = $this->Users->newEntity();
  if ($this->request->is('post')) {
   $user = $this->Users->patchEntity($user, $this->request->getData());
   if ($this->Users->save($user)) {
    $this->Flash->success(__('The user has been saved.'));

    return $this->redirect(['action' => 'index']);
   }
   $this->Flash->error(__('The user could not be saved. Please, try again.'));
  }
  $this->set(compact('user'));
 }

 /**
  * Edit method
  *
  * @param string|null $id User id.
  * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
  * @throws \Cake\Network\Exception\NotFoundException When record not found.
  */
 public function edit($id = null)
 {
  $user = $this->Users->get($id, [
   'contain' => [],
  ]);
  if ($this->request->is(['patch', 'post', 'put'])) {
   $user = $this->Users->patchEntity($user, $this->request->getData());
   if ($this->Users->save($user)) {
    $this->Flash->success(__('The user has been saved.'));

    return $this->redirect(['action' => 'index']);
   }
   $this->Flash->error(__('The user could not be saved. Please, try again.'));
  }
  $this->set(compact('user'));
 }

 /**
  * Delete method
  *
  * @param string|null $id User id.
  * @return \Cake\Http\Response|null Redirects to index.
  * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
  */
 public function delete($id = null)
 {
  $this->request->allowMethod(['post', 'delete']);
  $user = $this->Users->get($id);
  if ($this->Users->delete($user)) {
   $this->Flash->success(__('The user has been deleted.'));
  } else {
   $this->Flash->error(__('The user could not be deleted. Please, try again.'));
  }

  return $this->redirect(['action' => 'index']);
 }
}
