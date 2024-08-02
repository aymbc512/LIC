<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Storeholidays Controller
 *
 * @property \App\Model\Table\StoreholidaysTable $Storeholidays
 */
class StoreholidaysController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Storeholidays->find()
            ->contain(['Stores']);
        $storeholidays = $this->paginate($query);

        $this->set(compact('storeholidays'));
    }

    /**
     * View method
     *
     * @param string|null $id Storeholiday id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $storeholiday = $this->Storeholidays->get($id, contain: ['Stores']);
        $this->set(compact('storeholiday'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $storeholiday = $this->Storeholidays->newEmptyEntity();
        if ($this->request->is('post')) {
            $storeholiday = $this->Storeholidays->patchEntity($storeholiday, $this->request->getData());
            if ($this->Storeholidays->save($storeholiday)) {
                $this->Flash->success(__('The storeholiday has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The storeholiday could not be saved. Please, try again.'));
        }
        $stores = $this->Storeholidays->Stores->find('list', limit: 200)->all();
        $this->set(compact('storeholiday', 'stores'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Storeholiday id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $storeholiday = $this->Storeholidays->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $storeholiday = $this->Storeholidays->patchEntity($storeholiday, $this->request->getData());
            if ($this->Storeholidays->save($storeholiday)) {
                $this->Flash->success(__('The storeholiday has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The storeholiday could not be saved. Please, try again.'));
        }
        $stores = $this->Storeholidays->Stores->find('list', limit: 200)->all();
        $this->set(compact('storeholiday', 'stores'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Storeholiday id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $storeholiday = $this->Storeholidays->get($id);
        if ($this->Storeholidays->delete($storeholiday)) {
            $this->Flash->success(__('The storeholiday has been deleted.'));
        } else {
            $this->Flash->error(__('The storeholiday could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
