<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Pordersdetails Controller
 *
 * @property \App\Model\Table\PordersdetailsTable $Pordersdetails
 */
class PordersdetailsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Porders']
        ];
        $this->set('pordersdetails', $this->paginate($this->Pordersdetails));
        $this->set('_serialize', ['pordersdetails']);
    }

    /**
     * View method
     *
     * @param string|null $id Pordersdetail id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pordersdetail = $this->Pordersdetails->get($id, [
            'contain' => ['Porders']
        ]);
        $this->set('pordersdetail', $pordersdetail);
        $this->set('_serialize', ['pordersdetail']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pordersdetail = $this->Pordersdetails->newEntity();
        if ($this->request->is('post')) {
            $pordersdetail = $this->Pordersdetails->patchEntity($pordersdetail, $this->request->data);
            if ($this->Pordersdetails->save($pordersdetail)) {
                $this->Flash->success(__('The pordersdetail has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pordersdetail could not be saved. Please, try again.'));
            }
        }
        $porders = $this->Pordersdetails->Porders->find('list', ['limit' => 200]);
        $this->set(compact('pordersdetail', 'porders'));
        $this->set('_serialize', ['pordersdetail']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pordersdetail id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pordersdetail = $this->Pordersdetails->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pordersdetail = $this->Pordersdetails->patchEntity($pordersdetail, $this->request->data);
            if ($this->Pordersdetails->save($pordersdetail)) {
                $this->Flash->success(__('The pordersdetail has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pordersdetail could not be saved. Please, try again.'));
            }
        }
        $porders = $this->Pordersdetails->Porders->find('list', ['limit' => 200]);
        $this->set(compact('pordersdetail', 'porders'));
        $this->set('_serialize', ['pordersdetail']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pordersdetail id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pordersdetail = $this->Pordersdetails->get($id);
        if ($this->Pordersdetails->delete($pordersdetail)) {
            $this->Flash->success(__('The pordersdetail has been deleted.'));
        } else {
            $this->Flash->error(__('The pordersdetail could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
