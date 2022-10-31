<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Breeds Model
 *
 * @property \App\Model\Table\DogsTable&\Cake\ORM\Association\HasMany $Dogs
 *
 * @method \App\Model\Entity\Breed newEmptyEntity()
 * @method \App\Model\Entity\Breed newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Breed[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Breed get($primaryKey, $options = [])
 * @method \App\Model\Entity\Breed findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Breed patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Breed[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Breed|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Breed saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Breed[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Breed[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Breed[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Breed[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BreedsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('breeds');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Dogs', [
            'foreignKey' => 'breed_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('name')
            ->maxLength('name', 100)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('origin')
            ->requirePresence('origin', 'create')
            ->notEmptyString('origin');

        $validator
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        $validator
            ->scalar('behaviour')
            ->requirePresence('behaviour', 'create')
            ->notEmptyString('behaviour');

        $validator
            ->scalar('nationality')
            ->maxLength('nationality', 100)
            ->requirePresence('nationality', 'create')
            ->notEmptyString('nationality');

        return $validator;
    }
}
