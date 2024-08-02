<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Pointcards Controller
 *
 * @property \App\Model\Table\PointcardsTable $Pointcards
 */
class PointcardsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Pointcards->find()
            ->contain(['Users']);
        $pointcards = $this->paginate($query);

        $this->set(compact('pointcards'));
    }

    /**
     * View method
     *
     * @param string|null $id Pointcard id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pointcard = $this->Pointcards->get($id, contain: ['Users']);
        $this->set(compact('pointcard'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pointcard = $this->Pointcards->newEmptyEntity();
        if ($this->request->is('post')) {
            $pointcard = $this->Pointcards->patchEntity($pointcard, $this->request->getData());
            if ($this->Pointcards->save($pointcard)) {
                $this->Flash->success(__('The pointcard has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pointcard could not be saved. Please, try again.'));
        }
        $users = $this->Pointcards->Users->find('list', limit: 200)->all();
        $this->set(compact('pointcard', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pointcard id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pointcard = $this->Pointcards->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pointcard = $this->Pointcards->patchEntity($pointcard, $this->request->getData());
            if ($this->Pointcards->save($pointcard)) {
                $this->Flash->success(__('The pointcard has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pointcard could not be saved. Please, try again.'));
        }
        $users = $this->Pointcards->Users->find('list', limit: 200)->all();
        $this->set(compact('pointcard', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pointcard id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pointcard = $this->Pointcards->get($id);
        if ($this->Pointcards->delete($pointcard)) {
            $this->Flash->success(__('The pointcard has been deleted.'));
        } else {
            $this->Flash->error(__('The pointcard could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
