<?php
namespace App\Model\Table;

use App\Model\Entity\Biscuit;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Biscuits Model
 *
 * @property \Cake\ORM\Association\HasMany $BiscuitEntremets
 * @property \Cake\ORM\Association\HasMany $BiscuitFlavors
 */
class BiscuitsTable extends Table
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

        $this->table('biscuits');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->hasMany('BiscuitEntremets', [
            'foreignKey' => 'biscuit_id'
        ]);
        $this->hasMany('BiscuitFlavors', [
            'foreignKey' => 'biscuit_id'
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
            ->requirePresence('saveur', 'create')
            ->notEmpty('saveur');

        $validator
            ->requirePresence('entremet', 'create')
            ->notEmpty('entremet');

        $validator
            ->add('prix', 'valid', ['rule' => 'decimal'])
            ->requirePresence('prix', 'create')
            ->notEmpty('prix');

        return $validator;
    }
}
