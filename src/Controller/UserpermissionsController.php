<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Userpermissions Controller
 *
 * @property \App\Model\Table\UserpermissionsTable $Userpermissions
 */
class UserpermissionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Userpermissions->find();
        $userpermissions = $this->paginate($query);

        $this->set(compact('userpermissions'));
    }

    /**
     * View method
     *
     * @param string|null $id Userpermission id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userpermission = $this->Userpermissions->get($id, contain: []);
        $this->set(compact('userpermission'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userpermission = $this->Userpermissions->newEmptyEntity();
        if ($this->request->is('post')) {
            $userpermission = $this->Userpermissions->patchEntity($userpermission, $this->request->getData());
            if ($this->Userpermissions->save($userpermission)) {
                $this->Flash->success(__('The userpermission has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The userpermission could not be saved. Please, try again.'));
        }
        $this->set(compact('userpermission'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Userpermission id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userpermission = $this->Userpermissions->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userpermission = $this->Userpermissions->patchEntity($userpermission, $this->request->getData());
            if ($this->Userpermissions->save($userpermission)) {
                $this->Flash->success(__('The userpermission has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The userpermission could not be saved. Please, try again.'));
        }
        $this->set(compact('userpermission'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Userpermission id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userpermission = $this->Userpermissions->get($id);
        if ($this->Userpermissions->delete($userpermission)) {
            $this->Flash->success(__('The userpermission has been deleted.'));
        } else {
            $this->Flash->error(__('The userpermission could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
