<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Flavors Controller
 *
 * @property \App\Model\Table\FlavorsTable $Flavors
 */
class FlavorsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('flavors', $this->paginate($this->Flavors));
        $this->set('_serialize', ['flavors']);
    }

    /**
     * View method
     *
     * @param string|null $id Flavor id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $flavor = $this->Flavors->get($id, [
            'contain' => ['Orders', 'Products']
        ]);
        $this->set('flavor', $flavor);
        $this->set('_serialize', ['flavor']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $flavor = $this->Flavors->newEntity();
        if ($this->request->is('post')) {
            $flavor = $this->Flavors->patchEntity($flavor, $this->request->data);
            if ($this->Flavors->save($flavor)) {
                $this->Flash->success(__('The flavor has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The flavor could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('flavor'));
        $this->set('_serialize', ['flavor']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Flavor id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $flavor = $this->Flavors->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $flavor = $this->Flavors->patchEntity($flavor, $this->request->data);
            if ($this->Flavors->save($flavor)) {
                $this->Flash->success(__('The flavor has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The flavor could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('flavor'));
        $this->set('_serialize', ['flavor']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Flavor id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $flavor = $this->Flavors->get($id);
        if ($this->Flavors->delete($flavor)) {
            $this->Flash->success(__('The flavor has been deleted.'));
        } else {
            $this->Flash->error(__('The flavor could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
