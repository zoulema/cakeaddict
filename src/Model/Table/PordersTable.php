<?php
namespace App\Model\Table;

use App\Model\Entity\Porder;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Porders Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Costumers
 * @property \Cake\ORM\Association\BelongsTo $Themes
 * @property \Cake\ORM\Association\HasMany $Pordersdetails
 */
class PordersTable extends Table
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

        $this->table('porders');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Costumers', [
            'foreignKey' => 'costumer_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Themes', [
            'foreignKey' => 'theme_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Pordersdetails', [
            'foreignKey' => 'porder_id'
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
            ->add('nbpieces', 'valid', ['rule' => 'numeric'])
            ->requirePresence('nbpieces', 'create')
            ->notEmpty('nbpieces');

        $validator
            ->add('taille', 'valid', ['rule' => 'numeric'])
            ->requirePresence('taille', 'create')
            ->notEmpty('taille');

        $validator
            ->add('prix', 'valid', ['rule' => 'numeric'])
            ->requirePresence('prix', 'create')
            ->notEmpty('prix');

        $validator
            ->requirePresence('couleurs', 'create')
            ->notEmpty('couleurs');

        $validator
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->requirePresence('photo', 'create')
            ->notEmpty('photo');

        $validator
            ->requirePresence('designer', 'create')
            ->notEmpty('designer');

        $validator
            ->requirePresence('status', 'create')
            ->notEmpty('status');

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
        $rules->add($rules->existsIn(['costumer_id'], 'Costumers'));
        $rules->add($rules->existsIn(['theme_id'], 'Themes'));
        return $rules;
    }
}
