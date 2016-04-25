<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * BiscuitEntremets Controller
 *
 * @property \App\Model\Table\BiscuitEntremetsTable $BiscuitEntremets
 */
class BiscuitEntremetsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Biscuits', 'Entremets']
        ];
        $this->set('biscuitEntremets', $this->paginate($this->BiscuitEntremets));
        $this->set('_serialize', ['biscuitEntremets']);
    }

    /**
     * View method
     *
     * @param string|null $id Biscuit Entremet id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $biscuitEntremet = $this->BiscuitEntremets->get($id, [
            'contain' => ['Biscuits', 'Entremets']
        ]);
        $this->set('biscuitEntremet', $biscuitEntremet);
        $this->set('_serialize', ['biscuitEntremet']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $biscuitEntremet = $this->BiscuitEntremets->newEntity();
        if ($this->request->is('post')) {
            $biscuitEntremet = $this->BiscuitEntremets->patchEntity($biscuitEntremet, $this->request->data);
            if ($this->BiscuitEntremets->save($biscuitEntremet)) {
                $this->Flash->success(__('L\' biscuit est bien associé à l\'entremet sélectionné.'));
                return $this->redirect(['action' => 'add']);
            } else {
                $this->Flash->error(__('Le biscuit n\' pu être associé à l\'entremet sélectionné.'));
            }
        }
        $biscuits = $this->BiscuitEntremets->Biscuits->find('list', ['limit' => 200]);
        $entremets = $this->BiscuitEntremets->Entremets->find('list', ['limit' => 200]);
        $this->set(compact('biscuitEntremet', 'biscuits', 'entremets'));
        $this->set('_serialize', ['biscuitEntremet']);
        $this->index();
    }

    /**
     * Edit method
     *
     * @param string|null $id Biscuit Entremet id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $biscuitEntremet = $this->BiscuitEntremets->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $biscuitEntremet = $this->BiscuitEntremets->patchEntity($biscuitEntremet, $this->request->data);
            if ($this->BiscuitEntremets->save($biscuitEntremet)) {
                $this->Flash->success(__('The biscuit entremet has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The biscuit entremet could not be saved. Please, try again.'));
            }
        }
        $biscuits = $this->BiscuitEntremets->Biscuits->find('list', ['limit' => 200]);
        $entremets = $this->BiscuitEntremets->Entremets->find('list', ['limit' => 200]);
        $this->set(compact('biscuitEntremet', 'biscuits', 'entremets'));
        $this->set('_serialize', ['biscuitEntremet']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Biscuit Entremet id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $biscuitEntremet = $this->BiscuitEntremets->get($id);
        if ($this->BiscuitEntremets->delete($biscuitEntremet)) {
            $this->Flash->success(__('The biscuit entremet has been deleted.'));
        } else {
            $this->Flash->error(__('The biscuit entremet could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
