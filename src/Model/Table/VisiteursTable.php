<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Visiteurs Model
 *
 * @method \App\Model\Entity\Visiteur get($primaryKey, $options = [])
 * @method \App\Model\Entity\Visiteur newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Visiteur[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Visiteur|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Visiteur saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Visiteur patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Visiteur[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Visiteur findOrCreate($search, callable $callback = null, $options = [])
 */
class VisiteursTable extends Table
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

        $this->setTable('visiteurs');
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
            ->integer('matricule')
            ->allowEmptyString('matricule');

        $validator
            ->scalar('nom')
            ->maxLength('nom', 1000)
            ->allowEmptyString('nom');

        $validator
            ->scalar('prenom')
            ->maxLength('prenom', 1000)
            ->allowEmptyString('prenom');

        $validator
            ->scalar('tel')
            ->maxLength('tel', 1000)
            ->allowEmptyString('tel');

        $validator
            ->scalar('mail')
            ->maxLength('mail', 1000)
            ->allowEmptyString('mail');

        $validator
            ->date('dateEmbauche')
            ->allowEmptyDate('dateEmbauche');

        return $validator;
    }
}
