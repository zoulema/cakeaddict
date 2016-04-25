<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FlavorProducts Controller
 *
 * @property \App\Model\Table\FlavorProductsTable $FlavorProducts
 */
class FlavorProductsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Flavors', 'Products']
        ];
        $this->set('flavorProducts', $this->paginate($this->FlavorProducts));
        $this->set('_serialize', ['flavorProducts']);
    }

    /**
     * View method
     *
     * @param string|null $id Flavor Product id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $flavorProduct = $this->FlavorProducts->get($id, [
            'contain' => ['Flavors', 'Products']
        ]);
        $this->set('flavorProduct', $flavorProduct);
        $this->set('_serialize', ['flavorProduct']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $flavorProduct = $this->FlavorProducts->newEntity();
        if ($this->request->is('post')) {
            $flavorProduct = $this->FlavorProducts->patchEntity($flavorProduct, $this->request->data);
            if ($this->FlavorProducts->save($flavorProduct)) {
                $this->Flash->success(__('The flavor product has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The flavor product could not be saved. Please, try again.'));
            }
        }
        $flavors = $this->FlavorProducts->Flavors->find('list', ['limit' => 200]);
        $products = $this->FlavorProducts->Products->find('list', ['limit' => 200]);
        $this->set(compact('flavorProduct', 'flavors', 'products'));
        $this->set('_serialize', ['flavorProduct']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Flavor Product id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $flavorProduct = $this->FlavorProducts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $flavorProduct = $this->FlavorProducts->patchEntity($flavorProduct, $this->request->data);
            if ($this->FlavorProducts->save($flavorProduct)) {
                $this->Flash->success(__('The flavor product has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The flavor product could not be saved. Please, try again.'));
            }
        }
        $flavors = $this->FlavorProducts->Flavors->find('list', ['limit' => 200]);
        $products = $this->FlavorProducts->Products->find('list', ['limit' => 200]);
        $this->set(compact('flavorProduct', 'flavors', 'products'));
        $this->set('_serialize', ['flavorProduct']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Flavor Product id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $flavorProduct = $this->FlavorProducts->get($id);
        if ($this->FlavorProducts->delete($flavorProduct)) {
            $this->Flash->success(__('The flavor product has been deleted.'));
        } else {
            $this->Flash->error(__('The flavor product could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
