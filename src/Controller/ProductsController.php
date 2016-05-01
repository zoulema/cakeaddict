<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Controller\FlavorsController;

/**
 * Products Controller
 *
 * @property \App\Model\Table\ProductsTable $Products
 */
class ProductsController extends AppController
{

    public $Flavors;
    /**
     * Index method
     *
     * @return void
     */

    public function index()
    {
        $this->paginate = [
            'contain' => ['CategoryProducts']
        ];
        $this->set('products', $this->paginate($this->Products));
        $this->set('_serialize', ['products']);
    }

    /**
     * View method
     *
     * @param string|null $id Product id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' => ['FlavorProducts', 'CategoryProducts', 'Orders']
        ]);
        $this->set('product', $product);
        $this->set('_serialize', ['product']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    private function convertToJsonString($input=null){
        $input = json_encode($input);
            $input = str_replace("[","{",$input);
            $input = str_replace("]","}",$input);
            $input = str_replace("\"","",$input);
            return $input;
    }
    public function add()
    {
        $product = $this->Products->newEntity();

        if ($this->request->is('post')) {
            
            if($this->request->data['image']):
                $image = $this->request->data['image'];
                $this->request->data['image'] = $image['name'];
            endif;

            $this->request->data['flavor'] =  $this->convertToJsonString($this->request->data['flavor']) ;
            $this->request->data['shape'] =  $this->convertToJsonString($this->request->data['shape']) ;

            $product = $this->Products->patchEntity($product, $this->request->data);

            if ($this->Products->save($product)) {

                if($this->request->data['image']):
                    if(!file_exists("./prod")) mkdir("./prod");
                    move_uploaded_file($image['tmp_name'], "./prod/".$image['name']);
                endif;

                $this->Flash->success(__('The product has been saved.'));
                
                return $this->redirect('/products/add/');
            } else {
                $this->Flash->error(__('The product could not be saved. Please, try again.'));
            }
        }

        $this->Flavors = new FlavorsController();
        $flavors = $this->Flavors->lister();
        $this->set(compact('product', 'flavors'));
        $this->set('_serialize', ['product']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Product id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            if($this->request->data['image']):
                $image = $this->request->data['image'];
                $this->request->data['image'] = $image['name'];
            endif;

            $this->request->data['flavor'] =  $this->convertToJsonString($this->request->data['flavor']) ;
            $this->request->data['shape'] =  $this->convertToJsonString($this->request->data['shape']) ;

            $product = $this->Products->patchEntity($product, $this->request->data);

            if ($this->Products->save($product)) {

                if($this->request->data['image']):
                    if(!file_exists("./prod")) mkdir("./prod");
                    move_uploaded_file($image['tmp_name'], "./prod/".$image['name']);
                endif;

                $this->Flash->success(__('Les informations ont été modifiées avec succès.'));
                return $this->redirect("/products/edit/".$id."/");
            } else {
                $this->Flash->error(__('Impossible de procéder aux modifications. Merci de réessayer.'));
            }
        }

        $this->Flavors = new FlavorsController();
        $flavors = $this->Flavors->lister();

        $this->set(compact('product', 'flavors'));
        $this->set('_serialize', ['product']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Product id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $product = $this->Products->get($id);
        if ($this->Products->delete($product)) {
            $this->Flash->success(__('The product has been deleted.'));
        } else {
            $this->Flash->error(__('The product could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
