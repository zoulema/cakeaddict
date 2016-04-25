<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

use Cake\Datasource\ConnectionManager;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public $shapes; 
    public $occasions;
    public  $conn ;
    public function initialize()
        {
           parent::initialize();
           
           $this->loadComponent('Flash');
           
           $this->loadComponent('Auth', [
                'authenticate' => [
                    'Form' => [
                        'fields' => [
                            'username' => 'uname',
                            'password' => 'passwd'
                        ]
                    ]
                ],
                'loginAction'=>[
                    'controller'=>'Users',
                    'action'=>'login'
                ],
                'loginRedirect' => [
                'controller' => 'Users',
                'action' => 'index'
                ],
                'logoutRedirect' => [
                    'controller' => 'Users',
                    'action' => 'login'
                ]
            ]);

            $this->set('nbmessage',"23");
            $this->set('nbnotif',"3");
            $this->set('nbNewOrders',"2");
            $this->set('nbNewUser',"3");
            $this->set('caMonth',"232 012");
            $this->set('nbCurMonthVisitor',"602");
            $this->set('nbCurDayVisitor',"12");
            $this->set('cakeDescription','Tableau de bord');
            
            $this->shapes = ['Quelconque','Rond','Rectangle','Buche','Carré'];
            $this->set('shapes',$this->shapes);

           $this->occasions = ['Anniversaire Enfant','Mariage','Anniversaire De Mariage','Anniversaire Personne Agée','Anniversaire Jeune','Cadeau','Célébration','Lancement Officiel','Autre','Noel','Nouvel An','Baptème','Saint-valentin'];
            $this->set('occasions',$this->occasions);


             $this->conn = ConnectionManager::get('default');
        }
    
    public function beforeFilter(\Cake\Event\Event $event)
        {
            $this->Auth->allow();
        }

       
}
 