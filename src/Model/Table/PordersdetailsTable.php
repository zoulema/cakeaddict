<?php
namespace App\Model\Table;

use App\Model\Entity\Pordersdetail;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pordersdetails Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Porders
 * @property \Cake\ORM\Association\BelongsTo $Biscuits
 * @property \Cake\ORM\Association\BelongsTo $Entremets
 */
class PordersdetailsTable extends Table
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

        $this->table('pordersdetails');
        $this->displayField('porder_id');
        $this->primaryKey(['porder_id', 'position']);

        $this->belongsTo('Porders', [
            'foreignKey' => 'porder_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Biscuits', [
            'foreignKey' => 'biscuit_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Entremets', [
            'foreignKey' => 'entremet_id',
            'joinType' => 'INNER'
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
            ->add('position', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('position', 'create');

        $validator
            ->add('form', 'valid', ['rule' => 'numeric'])
            ->requirePresence('form', 'create')
            ->notEmpty('form');

        $validator
            ->add('nbpers', 'valid', ['rule' => 'numeric'])
            ->requirePresence('nbpers', 'create')
            ->notEmpty('nbpers');

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
        $rules->add($rules->existsIn(['porder_id'], 'Porders'));
        $rules->add($rules->existsIn(['biscuit_id'], 'Biscuits'));
        $rules->add($rules->existsIn(['entremet_id'], 'Entremets'));
        return $rules;
    }
}
