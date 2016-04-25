<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CategoryProducts Controller
 *
 * @property \App\Model\Table\CategoryProductsTable $CategoryProducts
 */
class CategoryProductsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Categories', 'Products']
        ];
        $this->set('categoryProducts', $this->paginate($this->CategoryProducts));
        $this->set('_serialize', ['categoryProducts']);
    }

    /**
     * View method
     *
     * @param string|null $id Category Product id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $categoryProduct = $this->CategoryProducts->get($id, [
            'contain' => ['Categories', 'Products']
        ]);
        $this->set('categoryProduct', $categoryProduct);
        $this->set('_serialize', ['categoryProduct']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $categoryProduct = $this->CategoryProducts->newEntity();
        if ($this->request->is('post')) {
            $categoryProduct = $this->CategoryProducts->patchEntity($categoryProduct, $this->request->data);
            if ($this->CategoryProducts->save($categoryProduct)) {
                $this->Flash->success(__('The category product has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The category product could not be saved. Please, try again.'));
            }
        }
        $categories = $this->CategoryProducts->Categories->find('list', ['limit' => 200]);
        $products = $this->CategoryProducts->Products->find('list', ['limit' => 200]);
        $this->set(compact('categoryProduct', 'categories', 'products'));
        $this->set('_serialize', ['categoryProduct']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Category Product id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $categoryProduct = $this->CategoryProducts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $categoryProduct = $this->CategoryProducts->patchEntity($categoryProduct, $this->request->data);
            if ($this->CategoryProducts->save($categoryProduct)) {
                $this->Flash->success(__('The category product has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The category product could not be saved. Please, try again.'));
            }
        }
        $categories = $this->CategoryProducts->Categories->find('list', ['limit' => 200]);
        $products = $this->CategoryProducts->Products->find('list', ['limit' => 200]);
        $this->set(compact('categoryProduct', 'categories', 'products'));
        $this->set('_serialize', ['categoryProduct']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Category Product id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $categoryProduct = $this->CategoryProducts->get($id);
        if ($this->CategoryProducts->delete($categoryProduct)) {
            $this->Flash->success(__('The category product has been deleted.'));
        } else {
            $this->Flash->error(__('The category product could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
