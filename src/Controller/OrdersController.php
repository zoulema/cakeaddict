<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Controller\BiscuitsController;
use App\Controller\EntremetsController;
use App\Controller\BiscuitEntremetsController;
/**
 * Orders Controller
 *
 * @property \App\Model\Table\OrdersTable $Orders
 */
class OrdersController extends AppController
{
    private $Biscuits;
    private $Entremets;
    private $BiscuitEntremets;
    /**
     * Index method
     *
     * @return void
     */
    public function index($status='')
    {
        $this->paginate = [
            'contain' => ['Costumers', 'Products']
        ];

        if($status) $this->paginate['conditions']=['Orders.status'=>$status];

        $this->set('flavors', $this->Orders->Flavors->find('list',['fileds'=>['name']])->toArray());

        $this->set('orders', $this->paginate($this->Orders));
        
        $this->set('_serialize', ['orders']);
    }

    /**
     * View method
     *
     * @param string|null $id Order id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $order = $this->Orders->get($id, [
            'contain' => ['Costumers', 'Products', 'Deliveries']
        ]);
        $this->set('order', $order);
        $this->set('_serialize', ['order']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {

        $order = $this->Orders->newEntity();
        if ($this->request->is('post')) {
            $order = $this->Orders->patchEntity($order, $this->request->data);
            if ($this->Orders->save($order)) {
                $this->Flash->success(__('Commande enregistrée avec succès.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Impossible de sauvegarde votre commande. Merci de réessayer plus tard.'));
            }
        }
        $costumers = $this->Orders->Costumers->find('list');
        $products = $this->Orders->Products->find('list');
        $flavors = $this->Orders->Flavors->find('list');
        $this->set(compact('order', 'costumers', 'products','flavors'));
        $this->set('_serialize', ['order']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Order id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $order = $this->Orders->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $order = $this->Orders->patchEntity($order, $this->request->data);
            if ($this->Orders->save($order)) {
                $this->Flash->success(__('Commande enregistrée avec succès.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Impossible de sauvegarde votre commande. Merci de réessayer plus tard.'));
            }
        }
        $costumers = $this->Orders->Costumers->find('list', ['limit' => 200]);
        $products = $this->Orders->Products->find('list', ['limit' => 200]);
        $flavors = $this->Orders->Flavors->find('list');
        $this->set(compact('order', 'costumers', 'products','flavors'));
        $this->set('_serialize', ['order']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Order id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $order = $this->Orders->get($id);
        if ($this->Orders->delete($order)) {
            $this->Flash->success(__('Commande supprimée avec succès.'));
        } else {
            $this->Flash->error(__('Impossible de supprimer cette commande. Merci de réessayer plus tard.'));
        }
        return $this->redirect(['action' => 'index']);
    }
    protected function showOrderByStatus($status = ''){
         $this->paginate = [
            'contain'   => ['Costumers', 'Products'],
            'conditions'=>['Orders.status'=>$status]
        ];
        $this->set('flavors', $this->Orders->Flavors->find('list',['fileds'=>['name']])->toArray());
        $this->set('orders', $this->paginate($this->Orders));
        
        $this->set('_serialize', ['orders']);
    }
    public function piecesmontees(){
        $this->Biscuits = new BiscuitsController();
        $this->Entremets = new EntremetsController();
        $this->BiscuitEntremets = new BiscuitEntremetsController();
        $couleurs = ['Rouge'=>'Rouge','Vert'=>'Vert','Jaune'=>'Jaune','Noir'=>'Noir','Chocolat'=>'Chocolat','Orange'=>'Orange'];

        $order = $this->Orders->newEntity();
        if ($this->request->is('post')) {
            try {
                extract($this->request->data);
                $prix=0;
                $ta = 0;

                $couleur =  json_encode($couleur);
                
                for ($i=1; $i <=$nbPiece; $i++) 
                    $ta += $taille[$i];

                $sqlPOrders = "INSERT INTO porders(customer_id,nbpieces,taille,theme,prix,couleurs,description,photo,designer) VALUES($costumer, $nbPiece,$ta,$theme,$prix,'$couleur','$description','$photo','$designer')";

                $lastInsertId = 1;
                
                $e = $this->conn->execute($sqlPOrders);
                $lastinId = $this->conn->execute("SELECT MAX(id) FROM porders")->fetch('assoc');
                $lastinId = current($lastinId);

                for ($i=1; $i <=$nbPiece  ; $i++) { 
                    $sqlDetails= "INSERT INTO pordersdetails(porder_id,position,form,biscuit,nbpers,entremet) VALUES($lastinId," . ($i+1) . "," . $form[$i] . ",". $biscuit[$i] .",". $taille[$i] . "," . $entremet[$i] .")";
                    
                    $e  = $this->conn->execute($sqlDetails);
                }

                $this->Flash->success(__('Commande enregistrée avec succès.'));

            return $this->redirect(['action' => 'piecesmontees']);
            } catch (Exception $e){
                  $this->Flash->error(__('Impossible de sauvegarde votre commande. Merci de réessayer plus tard.'));
            }
        }


        $biscuit    = $this->Biscuits->lister();
        $entremet   = $this->Entremets->lister();
       
       $themes     =  $this->conn->execute("select * from themes")->fetchAll('assoc');

        foreach ($themes as $key => $value)  $theme[$value['id']] = $value['name'];
         
        $products   = $this->Orders->Products->find('list');
        $flavors    = $this->Orders->Flavors->find('list');
        $nbpers = [6=>6,8=>8,12=>12,16=>16,25=>25,50=>50,100=>100] ;
        $this->set(compact('order', 'costumers', 'products','flavors','biscuit','entremet','theme','couleurs','nbpers'));
        $this->set('_serialize', ['order']);
    }

    public function listerpm($status=null){
        $this->set('orders',$this->conn->execute("SELECT * FROM porders")->fetchAll('assoc'));
    }
}
