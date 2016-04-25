<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Porders Controller
 *
 * @property \App\Model\Table\PordersTable $Porders
 */
class PordersController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Costumers']
        ];
        $this->set('porders', $this->paginate($this->Porders));
        $this->set('_serialize', ['porders']);
    }

    /**
     * View method
     *
     * @param string|null $id Porder id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $porder = $this->Porders->get($id, [
            'contain' => ['Costumers', 'Pordersdetails']
        ]);
        $this->set('porder', $porder);
        $this->set('_serialize', ['porder']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $porder = $this->Porders->newEntity();
        if ($this->request->is('post')) {
            $porder = $this->Porders->patchEntity($porder, $this->request->data);
            if ($this->Porders->save($porder)) {
                $this->Flash->success(__('The porder has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The porder could not be saved. Please, try again.'));
            }
        }
        $costumers = $this->Porders->Costumers->find('list', ['limit' => 200]);
        $this->set(compact('porder', 'costumers'));
        $this->set('_serialize', ['porder']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Porder id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $porder = $this->Porders->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $porder = $this->Porders->patchEntity($porder, $this->request->data);
            if ($this->Porders->save($porder)) {
                $this->Flash->success(__('The porder has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The porder could not be saved. Please, try again.'));
            }
        }
        $costumers = $this->Porders->Costumers->find('list', ['limit' => 200]);
        $this->set(compact('porder', 'costumers'));
        $this->set('_serialize', ['porder']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Porder id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $porder = $this->Porders->get($id);
        if ($this->Porders->delete($porder)) {
            $this->Flash->success(__('The porder has been deleted.'));
        } else {
            $this->Flash->error(__('The porder could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
      public function piecesmontees(){
        $this->Biscuits = new BiscuitsController();
        $this->Entremets = new EntremetsController();
        $this->BiscuitEntremets = new BiscuitEntremetsController();
        $couleurs = ['Rouge'=>'Rouge','Vert'=>'Vert','Jaune'=>'Jaune','Noir'=>'Noir','Chocolat'=>'Chocolat','Orange'=>'Orange'];
       
       $porder = $this->Porders->newEntity();

        if ($this->request->is('post')) {
            try {
                extract($this->request->data);
                $prix=0;
                $ta = 0;

                $couleur =  json_encode($couleur);
                
                for ($i=1; $i <=$nbPiece; $i++) 
                    $ta += $taille[$i];

                $sqlPOrders = "INSERT INTO porders(costumer_id,nbpieces,taille,theme_id,prix,couleurs,description,photo,designer) VALUES($costumer, $nbPiece,$ta,$theme,$prix,'$couleur','$description','$photo','$designer')";

                $e = $this->conn->execute($sqlPOrders);
                $lastinId = $this->conn->execute("SELECT MAX(id) FROM porders")->fetch('assoc');
                $lastinId = current($lastinId);

                for ($i=1; $i <=$nbPiece  ; $i++) { 
                    $sqlDetails= "INSERT INTO pordersdetails(porder_id,position,form,biscuit_id,nbpers,entremet_id) VALUES($lastinId," . ($i+1) . "," . $form[$i] . ",". $biscuit[$i] .",". $taille[$i] . "," . $entremet[$i] .")";
                    
                    $e  = $this->conn->execute($sqlDetails);
                }

                $this->Flash->success(__('Commande enregistrée avec succès.'));

            return $this->redirect(['action' => 'index']);
            } catch (Exception $e){
                  $this->Flash->error(__('Impossible de sauvegarde votre commande. Merci de réessayer plus tard.'));
            }
        }


        $biscuit    = $this->Biscuits->lister();
        $entremet   = $this->Entremets->lister();
       
        $themes     =  $this->conn->execute("select * from themes")->fetchAll('assoc');
        foreach ($themes as $key => $value)  $theme[$value['id']] = $value['name'];
         
        $nbpers = [6=>6,8=>8,12=>12,16=>16,25=>25,50=>50,100=>100] ;
        $this->set(compact('porder', 'costumers', 'products','flavors','biscuit','entremet','theme','couleurs','nbpers'));
        $this->set('_serialize', ['order']);
    }

}
