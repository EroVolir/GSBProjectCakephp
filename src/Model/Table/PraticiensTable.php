<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Praticiens Model
 *
 * @property \App\Model\Table\SpecialitesTable&\Cake\ORM\Association\BelongsTo $Specialites
 * @property \App\Model\Table\TypesTable&\Cake\ORM\Association\BelongsTo $Types
 * @property \App\Model\Table\VisiteursTable&\Cake\ORM\Association\BelongsTo $Visiteurs
 *
 * @method \App\Model\Entity\Praticien get($primaryKey, $options = [])
 * @method \App\Model\Entity\Praticien newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Praticien[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Praticien|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Praticien saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Praticien patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Praticien[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Praticien findOrCreate($search, callable $callback = null, $options = [])
 */
class PraticiensTable extends Table
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

        $this->setTable('praticiens');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Specialites', [
            'foreignKey' => 'Specialite_id'
        ]);
        $this->belongsTo('Types', [
            'foreignKey' => 'Type_id'
        ]);
        $this->belongsTo('Visiteurs', [
            'foreignKey' => 'Visiteur_id'
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

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
            ->scalar('adresse')
            ->maxLength('adresse', 1000)
            ->allowEmptyString('adresse');

        $validator
            ->integer('codepostal')
            ->allowEmptyString('codepostal');

        $validator
            ->scalar('ville')
            ->maxLength('ville', 1000)
            ->allowEmptyString('ville');

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
        $rules->add($rules->existsIn(['Specialite_id'], 'Specialites'));
        $rules->add($rules->existsIn(['Type_id'], 'Types'));
        $rules->add($rules->existsIn(['Visiteur_id'], 'Visiteurs'));

        return $rules;
    }
}
