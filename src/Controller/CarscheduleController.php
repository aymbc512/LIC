<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Carschedule Controller
 *
 * @property \App\Model\Table\CarscheduleTable $Carschedule
 */
class CarscheduleController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Carschedule->find()
            ->contain(['Stores', 'Cars', 'Carunavailability']);
        $carschedule = $this->paginate($query);

        $this->set(compact('carschedule'));
    }

    /**
     * View method
     *
     * @param string|null $id Carschedule id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $carschedule = $this->Carschedule->get($id, contain: ['Stores', 'Cars', 'Carunavailability']);
        $this->set(compact('carschedule'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $carschedule = $this->Carschedule->newEmptyEntity();
        if ($this->request->is('post')) {
            $carschedule = $this->Carschedule->patchEntity($carschedule, $this->request->getData());
            if ($this->Carschedule->save($carschedule)) {
                $this->Flash->success(__('The carschedule has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The carschedule could not be saved. Please, try again.'));
        }
        $stores = $this->Carschedule->Stores->find('list', limit: 200)->all();
        $cars = $this->Carschedule->Cars->find('list', limit: 200)->all();
        $carunavailability = $this->Carschedule->Carunavailability->find('list', limit: 200)->all();
        $this->set(compact('carschedule', 'stores', 'cars', 'carunavailability'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Carschedule id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $carschedule = $this->Carschedule->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $carschedule = $this->Carschedule->patchEntity($carschedule, $this->request->getData());
            if ($this->Carschedule->save($carschedule)) {
                $this->Flash->success(__('The carschedule has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The carschedule could not be saved. Please, try again.'));
        }
        $stores = $this->Carschedule->Stores->find('list', limit: 200)->all();
        $cars = $this->Carschedule->Cars->find('list', limit: 200)->all();
        $carunavailability = $this->Carschedule->Carunavailability->find('list', limit: 200)->all();
        $this->set(compact('carschedule', 'stores', 'cars', 'carunavailability'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Carschedule id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $carschedule = $this->Carschedule->get($id);
        if ($this->Carschedule->delete($carschedule)) {
            $this->Flash->success(__('The carschedule has been deleted.'));
        } else {
            $this->Flash->error(__('The carschedule could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
