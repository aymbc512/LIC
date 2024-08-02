<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Schedulepolicy Controller
 *
 * @property \App\Model\Table\SchedulepolicyTable $Schedulepolicy
 */
class SchedulepolicyController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Schedulepolicy->find()
            ->contain(['Stores']);
        $schedulepolicy = $this->paginate($query);

        $this->set(compact('schedulepolicy'));
    }

    /**
     * View method
     *
     * @param string|null $id Schedulepolicy id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $schedulepolicy = $this->Schedulepolicy->get($id, contain: ['Stores']);
        $this->set(compact('schedulepolicy'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $schedulepolicy = $this->Schedulepolicy->newEmptyEntity();
        if ($this->request->is('post')) {
            $schedulepolicy = $this->Schedulepolicy->patchEntity($schedulepolicy, $this->request->getData());
            if ($this->Schedulepolicy->save($schedulepolicy)) {
                $this->Flash->success(__('The schedulepolicy has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The schedulepolicy could not be saved. Please, try again.'));
        }
        $stores = $this->Schedulepolicy->Stores->find('list', limit: 200)->all();
        $this->set(compact('schedulepolicy', 'stores'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Schedulepolicy id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $schedulepolicy = $this->Schedulepolicy->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $schedulepolicy = $this->Schedulepolicy->patchEntity($schedulepolicy, $this->request->getData());
            if ($this->Schedulepolicy->save($schedulepolicy)) {
                $this->Flash->success(__('The schedulepolicy has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The schedulepolicy could not be saved. Please, try again.'));
        }
        $stores = $this->Schedulepolicy->Stores->find('list', limit: 200)->all();
        $this->set(compact('schedulepolicy', 'stores'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Schedulepolicy id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $schedulepolicy = $this->Schedulepolicy->get($id);
        if ($this->Schedulepolicy->delete($schedulepolicy)) {
            $this->Flash->success(__('The schedulepolicy has been deleted.'));
        } else {
            $this->Flash->error(__('The schedulepolicy could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
