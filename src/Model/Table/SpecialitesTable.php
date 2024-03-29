<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Specialites Model
 *
 * @method \App\Model\Entity\Specialite get($primaryKey, $options = [])
 * @method \App\Model\Entity\Specialite newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Specialite[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Specialite|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Specialite saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Specialite patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Specialite[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Specialite findOrCreate($search, callable $callback = null, $options = [])
 */
class SpecialitesTable extends Table
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

        $this->setTable('specialites');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('libelle')
            ->maxLength('libelle', 1000)
            ->allowEmptyString('libelle');

        return $validator;
    }
}
