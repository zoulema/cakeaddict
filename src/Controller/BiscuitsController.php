<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Biscuits Controller
 *
 * @property \App\Model\Table\BiscuitsTable $Biscuits
 */
class BiscuitsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {   
       
        $this->set('biscuits', $this->paginate($this->Biscuits));
        $this->set('_serialize', ['biscuits']);
    }

    /**
     * View method
     *
     * @param string|null $id Biscuit id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $biscuit = $this->Biscuits->get($id, [
            'contain' => ['BiscuitEntremets','BiscuitFlavors']
        ]);
        $this->set('biscuit', $biscuit);
        $this->set('_serialize', ['biscuit']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $biscuit = $this->Biscuits->newEntity();
        if ($this->request->is('post')) {
            $biscuit = $this->Biscuits->patchEntity($biscuit, $this->request->data);
            if ($this->Biscuits->save($biscuit)) {
                $this->Flash->success(__('The biscuit has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The biscuit could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('biscuit'));
        $this->set('_serialize', ['biscuit']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Biscuit id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $biscuit = $this->Biscuits->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $biscuit = $this->Biscuits->patchEntity($biscuit, $this->request->data);
            if ($this->Biscuits->save($biscuit)) {
                $this->Flash->success(__('The biscuit has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The biscuit could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('biscuit'));
        $this->set('_serialize', ['biscuit']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Biscuit id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $biscuit = $this->Biscuits->get($id);
        if ($this->Biscuits->delete($biscuit)) {
            $this->Flash->success(__('The biscuit has been deleted.'));
        } else {
            $this->Flash->error(__('The biscuit could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
    public function lister(){
       
        $table = $this->Biscuits->find('All',['fields'=>['id','name'],'order'=>'name']);
        $data = "";
        foreach ($table as $key => $td) {
            $td = json_decode($td);
            $data[$td->id]  = $td->name;
        }

        return $data;
    }
}
