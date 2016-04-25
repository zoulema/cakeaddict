<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Themes Controller
 *
 * @property \App\Model\Table\ThemesTable $Themes
 */
class ThemesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('themes', $this->paginate($this->Themes));
        $this->set('_serialize', ['themes']);
    }

    /**
     * View method
     *
     * @param string|null $id Theme id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $theme = $this->Themes->get($id, [
            'contain' => []
        ]);
        $this->set('theme', $theme);
        $this->set('_serialize', ['theme']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $theme = $this->Themes->newEntity();
        if ($this->request->is('post')) {
            $theme = $this->Themes->patchEntity($theme, $this->request->data);
            if ($this->Themes->save($theme)) {
                $this->Flash->success(__('The theme has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The theme could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('theme'));
        $this->set('_serialize', ['theme']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Theme id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $theme = $this->Themes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $theme = $this->Themes->patchEntity($theme, $this->request->data);
            if ($this->Themes->save($theme)) {
                $this->Flash->success(__('The theme has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The theme could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('theme'));
        $this->set('_serialize', ['theme']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Theme id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $theme = $this->Themes->get($id);
        if ($this->Themes->delete($theme)) {
            $this->Flash->success(__('The theme has been deleted.'));
        } else {
            $this->Flash->error(__('The theme could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
