<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Flowers Model
 *
 * @method \App\Model\Entity\Flower get($primaryKey, $options = [])
 * @method \App\Model\Entity\Flower newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Flower[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Flower|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Flower patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Flower[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Flower findOrCreate($search, callable $callback = null, $options = [])
 */
class FlowersTable extends Table
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

        $this->setTable('flowers');
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
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('nume')
            ->maxLength('nume', 100)
            ->requirePresence('nume', 'create')
            ->notEmpty('nume');

        $validator
            ->scalar('culoare')
            ->maxLength('culoare', 100)
            ->requirePresence('culoare', 'create')
            ->notEmpty('culoare');

        $validator
            ->scalar('marime')
            ->maxLength('marime', 100)
            ->requirePresence('marime', 'create')
            ->notEmpty('marime');

        $validator
            ->integer('pret')
            ->requirePresence('pret', 'create')
            ->notEmpty('pret');

        return $validator;
    }
}
