<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Pricepatterns Controller
 *
 * @property \App\Model\Table\PricepatternsTable $Pricepatterns
 */
class PricepatternsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Pricepatterns->find();
        $pricepatterns = $this->paginate($query);

        $this->set(compact('pricepatterns'));
    }

    /**
     * View method
     *
     * @param string|null $id Pricepattern id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pricepattern = $this->Pricepatterns->get($id, contain: []);
        $this->set(compact('pricepattern'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pricepattern = $this->Pricepatterns->newEmptyEntity();
        if ($this->request->is('post')) {
            $pricepattern = $this->Pricepatterns->patchEntity($pricepattern, $this->request->getData());
            if ($this->Pricepatterns->save($pricepattern)) {
                $this->Flash->success(__('The pricepattern has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pricepattern could not be saved. Please, try again.'));
        }
        $this->set(compact('pricepattern'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pricepattern id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pricepattern = $this->Pricepatterns->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pricepattern = $this->Pricepatterns->patchEntity($pricepattern, $this->request->getData());
            if ($this->Pricepatterns->save($pricepattern)) {
                $this->Flash->success(__('The pricepattern has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pricepattern could not be saved. Please, try again.'));
        }
        $this->set(compact('pricepattern'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pricepattern id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pricepattern = $this->Pricepatterns->get($id);
        if ($this->Pricepatterns->delete($pricepattern)) {
            $this->Flash->success(__('The pricepattern has been deleted.'));
        } else {
            $this->Flash->error(__('The pricepattern could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
