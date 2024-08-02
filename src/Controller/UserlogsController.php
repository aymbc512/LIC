<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Userlogs Controller
 *
 * @property \App\Model\Table\UserlogsTable $Userlogs
 */
class UserlogsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Userlogs->find()
            ->contain(['Users']);
        $userlogs = $this->paginate($query);

        $this->set(compact('userlogs'));
    }

    /**
     * View method
     *
     * @param string|null $id Userlog id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userlog = $this->Userlogs->get($id, contain: ['Users']);
        $this->set(compact('userlog'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userlog = $this->Userlogs->newEmptyEntity();
        if ($this->request->is('post')) {
            $userlog = $this->Userlogs->patchEntity($userlog, $this->request->getData());
            if ($this->Userlogs->save($userlog)) {
                $this->Flash->success(__('The userlog has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The userlog could not be saved. Please, try again.'));
        }
        $users = $this->Userlogs->Users->find('list', limit: 200)->all();
        $this->set(compact('userlog', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Userlog id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userlog = $this->Userlogs->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userlog = $this->Userlogs->patchEntity($userlog, $this->request->getData());
            if ($this->Userlogs->save($userlog)) {
                $this->Flash->success(__('The userlog has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The userlog could not be saved. Please, try again.'));
        }
        $users = $this->Userlogs->Users->find('list', limit: 200)->all();
        $this->set(compact('userlog', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Userlog id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userlog = $this->Userlogs->get($id);
        if ($this->Userlogs->delete($userlog)) {
            $this->Flash->success(__('The userlog has been deleted.'));
        } else {
            $this->Flash->error(__('The userlog could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
