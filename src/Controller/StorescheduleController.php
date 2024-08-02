<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Storeschedule Controller
 *
 * @property \App\Model\Table\StorescheduleTable $Storeschedule
 */
class StorescheduleController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Storeschedule->find()
            ->contain(['Stores', 'Storeholidays']);
        $storeschedule = $this->paginate($query);

        $this->set(compact('storeschedule'));
    }

    /**
     * View method
     *
     * @param string|null $id Storeschedule id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $storeschedule = $this->Storeschedule->get($id, contain: ['Stores', 'Storeholidays']);
        $this->set(compact('storeschedule'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $storeschedule = $this->Storeschedule->newEmptyEntity();
        if ($this->request->is('post')) {
            $storeschedule = $this->Storeschedule->patchEntity($storeschedule, $this->request->getData());
            if ($this->Storeschedule->save($storeschedule)) {
                $this->Flash->success(__('The storeschedule has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The storeschedule could not be saved. Please, try again.'));
        }
        $stores = $this->Storeschedule->Stores->find('list', limit: 200)->all();
        $storeholidays = $this->Storeschedule->Storeholidays->find('list', limit: 200)->all();
        $this->set(compact('storeschedule', 'stores', 'storeholidays'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Storeschedule id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $storeschedule = $this->Storeschedule->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $storeschedule = $this->Storeschedule->patchEntity($storeschedule, $this->request->getData());
            if ($this->Storeschedule->save($storeschedule)) {
                $this->Flash->success(__('The storeschedule has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The storeschedule could not be saved. Please, try again.'));
        }
        $stores = $this->Storeschedule->Stores->find('list', limit: 200)->all();
        $storeholidays = $this->Storeschedule->Storeholidays->find('list', limit: 200)->all();
        $this->set(compact('storeschedule', 'stores', 'storeholidays'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Storeschedule id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $storeschedule = $this->Storeschedule->get($id);
        if ($this->Storeschedule->delete($storeschedule)) {
            $this->Flash->success(__('The storeschedule has been deleted.'));
        } else {
            $this->Flash->error(__('The storeschedule could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
