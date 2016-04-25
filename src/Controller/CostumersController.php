<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Costumers Controller
 *
 * @property \App\Model\Table\CostumersTable $Costumers
 */
class CostumersController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('costumers', $this->paginate($this->Costumers));
        $this->set('_serialize', ['costumers']);
    }

    /**
     * View method
     *
     * @param string|null $id Costumer id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $costumer = $this->Costumers->get($id, [
            'contain' => []
        ]);
        $this->set('costumer', $costumer);
        $this->set('_serialize', ['costumer']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $costumer = $this->Costumers->newEntity();
        if ($this->request->is('post')) {
            $costumer = $this->Costumers->patchEntity($costumer, $this->request->data);
             $costumer['name']  =  $costumer['firstname'] .' '. $costumer['lastname'];
            if ($this->Costumers->save($costumer)) {
                $this->Flash->success(__('Client ajoutée avec succès.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Impossible d\'ajouter ce client. Merci de réessayer plus tard'));
            }
        }
        $this->set(compact('costumer'));
        $this->set('_serialize', ['costumer']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Costumer id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $costumer = $this->Costumers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $costumer = $this->Costumers->patchEntity($costumer, $this->request->data);
            $costumer['name']  =  $costumer['firstname'] .' '. $costumer['lastname'];
            if ($this->Costumers->save($costumer)) {
                $this->Flash->success(__('Client modifié avec succès.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Impossible de modifier ce client. Merci de réessayer plus tard'));
            }
        }
        $this->set(compact('costumer'));
        $this->set('_serialize', ['costumer']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Costumer id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $costumer = $this->Costumers->get($id);
        if ($this->Costumers->delete($costumer)) {
            $this->Flash->success(__('Client supprimé avec succès.'));
        } else {
            $this->Flash->error(__('Impossible de supprimer ce client. Merci de réessayer plus tard.'));
        }
        return $this->redirect(['action' => 'index']);
    }
    public function findid(){
         $this->autoRender = false;
        $this->layout = 'ajax';
        $data = $this->Costumers->findById($_GET['id']);
       foreach ($data as $key => $costumer) {
          echo $costumer['firstname'] . " " . $costumer['lastname'];
       }
        return;
    }
}
