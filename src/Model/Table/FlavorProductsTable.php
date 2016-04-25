<?php
namespace App\Model\Table;

use App\Model\Entity\FlavorProduct;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FlavorProducts Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Flavors
 * @property \Cake\ORM\Association\BelongsTo $Products
 */
class FlavorProductsTable extends Table
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

        $this->table('flavor_products');
        $this->displayField('flavor_id');
        $this->primaryKey(['flavor_id', 'product_id']);

        $this->belongsTo('Flavors', [
            'foreignKey' => 'flavor_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Products', [
            'foreignKey' => 'product_id',
            'joinType' => 'INNER'
        ]);
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
        $rules->add($rules->existsIn(['product_id'], 'Products'));
        return $rules;
    }
}
