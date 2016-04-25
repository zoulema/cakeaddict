<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * BiscuitFlavors Controller
 *
 * @property \App\Model\Table\BiscuitFlavorsTable $BiscuitFlavors
 */
class BiscuitFlavorsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Biscuits', 'Flavors']
        ];
        $this->set('biscuitFlavors', $this->paginate($this->BiscuitFlavors));
        $this->set('_serialize', ['biscuitFlavors']);
    }

    /**
     * View method
     *
     * @param string|null $id Biscuit Flavor id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $biscuitFlavor = $this->BiscuitFlavors->get($id, [
            'contain' => ['Biscuits', 'Flavors']
        ]);
        $this->set('biscuitFlavor', $biscuitFlavor);
        $this->set('_serialize', ['biscuitFlavor']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $biscuitFlavor = $this->BiscuitFlavors->newEntity();
        // var_dump($this->request->data);die();
        if ($this->request->is('post')) {
            $biscuitFlavor = $this->BiscuitFlavors->patchEntity($biscuitFlavor, $this->request->data);
            // var_dump( $biscuitFlavor);die();
            if ($this->BiscuitFlavors->save($biscuitFlavor)) {
                $this->Flash->success(__('The biscuit flavor has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The biscuit flavor could not be saved. Please, try again.'));
            }
        }
        $biscuits = $this->BiscuitFlavors->Biscuits->find('list', ['limit' => 200]);
        $flavors = $this->BiscuitFlavors->Flavors->find('list', ['limit' => 200]);
        $this->set(compact('biscuitFlavor', 'biscuits', 'flavors'));
        $this->set('_serialize', ['biscuitFlavor']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Biscuit Flavor id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $biscuitFlavor = $this->BiscuitFlavors->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $biscuitFlavor = $this->BiscuitFlavors->patchEntity($biscuitFlavor, $this->request->data);
            if ($this->BiscuitFlavors->save($biscuitFlavor)) {
                $this->Flash->success(__('The biscuit flavor has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The biscuit flavor could not be saved. Please, try again.'));
            }
        }
        $biscuits = $this->BiscuitFlavors->Biscuits->find('list', ['limit' => 200]);
        $flavors = $this->BiscuitFlavors->Flavors->find('list', ['limit' => 200]);
        $this->set(compact('biscuitFlavor', 'biscuits', 'flavors'));
        $this->set('_serialize', ['biscuitFlavor']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Biscuit Flavor id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $biscuitFlavor = $this->BiscuitFlavors->get($id);
        if ($this->BiscuitFlavors->delete($biscuitFlavor)) {
            $this->Flash->success(__('The biscuit flavor has been deleted.'));
        } else {
            $this->Flash->error(__('The biscuit flavor could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
