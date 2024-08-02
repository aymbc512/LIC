<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Carunavailability Controller
 *
 * @property \App\Model\Table\CarunavailabilityTable $Carunavailability
 */
class CarunavailabilityController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Carunavailability->find()
            ->contain(['Cars', 'Stores']);
        $carunavailability = $this->paginate($query);

        $this->set(compact('carunavailability'));
    }

    /**
     * View method
     *
     * @param string|null $id Carunavailability id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $carunavailability = $this->Carunavailability->get($id, contain: ['Cars', 'Stores']);
        $this->set(compact('carunavailability'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $carunavailability = $this->Carunavailability->newEmptyEntity();
        if ($this->request->is('post')) {
            $carunavailability = $this->Carunavailability->patchEntity($carunavailability, $this->request->getData());
            if ($this->Carunavailability->save($carunavailability)) {
                $this->Flash->success(__('The carunavailability has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The carunavailability could not be saved. Please, try again.'));
        }
        $cars = $this->Carunavailability->Cars->find('list', limit: 200)->all();
        $stores = $this->Carunavailability->Stores->find('list', limit: 200)->all();
        $this->set(compact('carunavailability', 'cars', 'stores'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Carunavailability id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $carunavailability = $this->Carunavailability->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $carunavailability = $this->Carunavailability->patchEntity($carunavailability, $this->request->getData());
            if ($this->Carunavailability->save($carunavailability)) {
                $this->Flash->success(__('The carunavailability has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The carunavailability could not be saved. Please, try again.'));
        }
        $cars = $this->Carunavailability->Cars->find('list', limit: 200)->all();
        $stores = $this->Carunavailability->Stores->find('list', limit: 200)->all();
        $this->set(compact('carunavailability', 'cars', 'stores'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Carunavailability id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $carunavailability = $this->Carunavailability->get($id);
        if ($this->Carunavailability->delete($carunavailability)) {
            $this->Flash->success(__('The carunavailability has been deleted.'));
        } else {
            $this->Flash->error(__('The carunavailability could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
