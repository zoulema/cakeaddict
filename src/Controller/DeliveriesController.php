<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Deliveries Controller
 *
 * @property \App\Model\Table\DeliveriesTable $Deliveries
 */
class DeliveriesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Orders']
        ];
        $this->set('deliveries', $this->paginate($this->Deliveries));
        $this->set('_serialize', ['deliveries']);
    }

    /**
     * View method
     *
     * @param string|null $id Delivery id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $delivery = $this->Deliveries->get($id, [
            'contain' => ['Orders']
        ]);
        $this->set('delivery', $delivery);
        $this->set('_serialize', ['delivery']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $delivery = $this->Deliveries->newEntity();
        if ($this->request->is('post')) {
            $delivery = $this->Deliveries->patchEntity($delivery, $this->request->data);
            if ($this->Deliveries->save($delivery)) {
                $this->Flash->success(__('Nouvelle livraison initiée.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Impossible d\initier une nouvelle livraison.'));
            }
        }
        $orders = $this->Deliveries->Orders->find('list', ['limit' => 200]);
        $this->set(compact('delivery', 'orders'));
        $this->set('_serialize', ['delivery']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Delivery id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $delivery = $this->Deliveries->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $delivery = $this->Deliveries->patchEntity($delivery, $this->request->data);
            if ($this->Deliveries->save($delivery)) {
                $this->Flash->success(__('Livraison modifiée avec succès.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Impossible de modifier cette livraison. Merci de ré.'));
            }
        }
        $orders = $this->Deliveries->Orders->find('list', ['limit' => 200]);
        $this->set(compact('delivery', 'orders'));
        $this->set('_serialize', ['delivery']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Delivery id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $delivery = $this->Deliveries->get($id);
        if ($this->Deliveries->delete($delivery)) {
            $this->Flash->success(__('The delivery has been deleted.'));
        } else {
            $this->Flash->error(__('The delivery could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
