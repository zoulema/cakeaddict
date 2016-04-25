<?php
namespace App\Model\Table;

use App\Model\Entity\BiscuitFlavor;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BiscuitFlavors Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Biscuits
 * @property \Cake\ORM\Association\BelongsTo $Flavors
 */
class BiscuitFlavorsTable extends Table
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

        $this->table('biscuit_flavors');
        $this->displayField('biscuit_id');
        $this->primaryKey(['biscuit_id', 'flavor_id']);

        $this->belongsTo('Biscuits', [
            'foreignKey' => 'biscuit_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Flavors', [
            'foreignKey' => 'flavor_id',
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
        $rules->add($rules->existsIn(['biscuit_id'], 'Biscuits'));
        $rules->add($rules->existsIn(['flavor_id'], 'Flavors'));
        return $rules;
    }
}
