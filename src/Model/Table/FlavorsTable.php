<?php
namespace App\Model\Table;

use App\Model\Entity\Flavor;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Flavors Model
 *
 * @property \Cake\ORM\Association\HasMany $FlavorProducts
 * @property \Cake\ORM\Association\HasMany $Orders
 * @property \Cake\ORM\Association\HasMany $Products
 */
class FlavorsTable extends Table
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

        $this->table('flavors');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->hasMany('FlavorProducts', [
            'foreignKey' => 'flavor_id'
        ]);
        $this->hasMany('Orders', [
            'foreignKey' => 'flavor_id'
        ]);
        $this->hasMany('Products', [
            'foreignKey' => 'flavor_id'
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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        return $validator;
    }
}
