<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Salesmanagement Controller
 *
 * @property \App\Model\Table\SalesmanagementTable $Salesmanagement
 */
class SalesmanagementController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Salesmanagement->find()
            ->contain(['Reservations']);
        $salesmanagement = $this->paginate($query);

        $this->set(compact('salesmanagement'));
    }

    /**
     * View method
     *
     * @param string|null $id Salesmanagement id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $salesmanagement = $this->Salesmanagement->get($id, contain: ['Reservations']);
        $this->set(compact('salesmanagement'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $salesmanagement = $this->Salesmanagement->newEmptyEntity();
        if ($this->request->is('post')) {
            $salesmanagement = $this->Salesmanagement->patchEntity($salesmanagement, $this->request->getData());
            if ($this->Salesmanagement->save($salesmanagement)) {
                $this->Flash->success(__('The salesmanagement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The salesmanagement could not be saved. Please, try again.'));
        }
        $reservations = $this->Salesmanagement->Reservations->find('list', limit: 200)->all();
        $this->set(compact('salesmanagement', 'reservations'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Salesmanagement id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $salesmanagement = $this->Salesmanagement->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $salesmanagement = $this->Salesmanagement->patchEntity($salesmanagement, $this->request->getData());
            if ($this->Salesmanagement->save($salesmanagement)) {
                $this->Flash->success(__('The salesmanagement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The salesmanagement could not be saved. Please, try again.'));
        }
        $reservations = $this->Salesmanagement->Reservations->find('list', limit: 200)->all();
        $this->set(compact('salesmanagement', 'reservations'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Salesmanagement id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $salesmanagement = $this->Salesmanagement->get($id);
        if ($this->Salesmanagement->delete($salesmanagement)) {
            $this->Flash->success(__('The salesmanagement has been deleted.'));
        } else {
            $this->Flash->error(__('The salesmanagement could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
