<?php
namespace App\Model\Table;

use App\Model\Entity\Product;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Products Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Flavors
 * @property \Cake\ORM\Association\BelongsTo $Categories
 * @property \Cake\ORM\Association\HasMany $Orders
 */
class ProductsTable extends Table
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

        $this->table('products');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Flavors', [
            'foreignKey' => 'flavor_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('CategoryProducts', [
            'foreignKey' => 'product_id'
        ]);
        $this->hasMany('FlavorProducts', [
            'foreignKey' => 'product_id'
        ]);
        $this->hasMany('Orders', [
            'foreignKey' => 'product_id'
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
            ->requirePresence('reference', 'create')
            ->notEmpty('reference');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->requirePresence('shape', 'create')
            ->notEmpty('shape');

        $validator
            ->add('prix', 'valid', ['rule' => 'decimal'])
            ->requirePresence('prix', 'create')
            ->notEmpty('prix');

        $validator
            ->add('page', 'valid', ['rule' => 'numeric'])
            ->requirePresence('page', 'create')
            ->notEmpty('page');

        $validator
            ->add('temps_u', 'valid', ['rule' => 'numeric'])
            ->requirePresence('temps_u', 'create')
            ->notEmpty('temps_u');

        $validator
            ->requirePresence('remarque', 'create')
            ->notEmpty('remarque');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['flavor_id'], 'Flavors'));
        $rules->add($rules->existsIn(['category_id'], 'CategoryProducts'));
        return $rules;
    }
}