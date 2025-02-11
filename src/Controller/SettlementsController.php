<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Settlements Controller
 *
 * @property \App\Model\Table\SettlementsTable $Settlements
 */
class SettlementsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Settlements->find()
            ->contain(['Stores']);
        $settlements = $this->paginate($query);

        $this->set(compact('settlements'));
    }

    /**
     * View method
     *
     * @param string|null $id Settlement id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $settlement = $this->Settlements->get($id, contain: ['Stores']);
        $this->set(compact('settlement'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $settlement = $this->Settlements->newEmptyEntity();
        if ($this->request->is('post')) {
            $settlement = $this->Settlements->patchEntity($settlement, $this->request->getData());
            if ($this->Settlements->save($settlement)) {
                $this->Flash->success(__('The settlement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The settlement could not be saved. Please, try again.'));
        }
        $stores = $this->Settlements->Stores->find('list', limit: 200)->all();
        $this->set(compact('settlement', 'stores'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Settlement id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $settlement = $this->Settlements->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $settlement = $this->Settlements->patchEntity($settlement, $this->request->getData());
            if ($this->Settlements->save($settlement)) {
                $this->Flash->success(__('The settlement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The settlement could not be saved. Please, try again.'));
        }
        $stores = $this->Settlements->Stores->find('list', limit: 200)->all();
        $this->set(compact('settlement', 'stores'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Settlement id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $settlement = $this->Settlements->get($id);
        if ($this->Settlements->delete($settlement)) {
            $this->Flash->success(__('The settlement has been deleted.'));
        } else {
            $this->Flash->error(__('The settlement could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
