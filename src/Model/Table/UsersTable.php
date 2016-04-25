<?php
namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Utility\Text;
use Cake\Event\Event;

/**
 * Users Model
 *
 * @property \Cake\ORM\Association\HasMany $Notifications
 */
class UsersTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('users');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('Notifications', [
            'foreignKey' => 'user_id'
        ]);
    }
   
    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('uname', 'create')
            ->notEmpty('uname');

        $validator
            ->requirePresence('passwd', 'create')
            ->notEmpty('passwd');

        $validator
            ->requirePresence('role', 'create')
            ->notEmpty('role');

        return $validator;
    }

}
