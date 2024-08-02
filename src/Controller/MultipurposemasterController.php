<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Multipurposemaster Controller
 *
 * @property \App\Model\Table\MultipurposemasterTable $Multipurposemaster
 */
class MultipurposemasterController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Multipurposemaster->find();
        $multipurposemaster = $this->paginate($query);

        $this->set(compact('multipurposemaster'));
    }

    /**
     * View method
     *
     * @param string|null $id Multipurposemaster id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $multipurposemaster = $this->Multipurposemaster->get($id, contain: []);
        $this->set(compact('multipurposemaster'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $multipurposemaster = $this->Multipurposemaster->newEmptyEntity();
        if ($this->request->is('post')) {
            $multipurposemaster = $this->Multipurposemaster->patchEntity($multipurposemaster, $this->request->getData());
            if ($this->Multipurposemaster->save($multipurposemaster)) {
                $this->Flash->success(__('The multipurposemaster has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The multipurposemaster could not be saved. Please, try again.'));
        }
        $this->set(compact('multipurposemaster'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Multipurposemaster id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $multipurposemaster = $this->Multipurposemaster->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $multipurposemaster = $this->Multipurposemaster->patchEntity($multipurposemaster, $this->request->getData());
            if ($this->Multipurposemaster->save($multipurposemaster)) {
                $this->Flash->success(__('The multipurposemaster has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The multipurposemaster could not be saved. Please, try again.'));
        }
        $this->set(compact('multipurposemaster'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Multipurposemaster id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $multipurposemaster = $this->Multipurposemaster->get($id);
        if ($this->Multipurposemaster->delete($multipurposemaster)) {
            $this->Flash->success(__('The multipurposemaster has been deleted.'));
        } else {
            $this->Flash->error(__('The multipurposemaster could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
