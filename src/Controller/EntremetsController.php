<?php
namespace App\Controller;

use App\Controller\AppController;
/**
 * Entremets Controller
 *
 * @property \App\Model\Table\EntremetsTable $Entremets
 */
class EntremetsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('entremets', $this->paginate($this->Entremets));
        $this->set('_serialize', ['entremets']);
    }

    /**
     * View method
     *
     * @param string|null $id Entremet id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $entremet = $this->Entremets->get($id, [
            'contain' => ['Orderdetails']
        ]);
        $this->set('entremet', $entremet);
        $this->set('_serialize', ['entremet']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $entremet = $this->Entremets->newEntity();
        if ($this->request->is('post')) {
            $entremet = $this->Entremets->patchEntity($entremet, $this->request->data);
            if ($this->Entremets->save($entremet)) {
                $this->Flash->success(__('The entremet has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The entremet could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('entremet'));
        $this->set('_serialize', ['entremet']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Entremet id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $entremet = $this->Entremets->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $entremet = $this->Entremets->patchEntity($entremet, $this->request->data);
            if ($this->Entremets->save($entremet)) {
                $this->Flash->success(__('The entremet has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The entremet could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('entremet'));
        $this->set('_serialize', ['entremet']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Entremet id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $entremet = $this->Entremets->get($id);
        if ($this->Entremets->delete($entremet)) {
            $this->Flash->success(__('The entremet has been deleted.'));
        } else {
            $this->Flash->error(__('The entremet could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function lister($params = NULL){
       
        $table = $this->Entremets->find('All',['fields'=>['id','name'],'order'=>'name','conditions'=>$params['conditions']]);
        $data = "";
        foreach ($table as $key => $td) {
            $td = json_decode($td);
            $data[$td->id]  = $td->name;
        }

        return $data;
    }
    public function listerajax($id=null){
        $this->autoRender = false;
        $this->layout = 'ajax';
        if($id==null) $id = $_GET['biscuitId'];

        $data = $this->conn->execute("select e.* from biscuit_entremets be, entremets e where e.id=be.entremet_id and biscuit_id=$id")->fetchAll('assoc');
         echo json_encode($data); 
        
    }
}
