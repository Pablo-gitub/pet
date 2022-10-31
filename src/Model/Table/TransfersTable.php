<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Transfers Model
 *
 * @property \App\Model\Table\DogsTable&\Cake\ORM\Association\BelongsTo $Dogs
 * @property \App\Model\Table\ClinicsTable&\Cake\ORM\Association\BelongsTo $Clinics
 *
 * @method \App\Model\Entity\Transfer newEmptyEntity()
 * @method \App\Model\Entity\Transfer newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Transfer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Transfer get($primaryKey, $options = [])
 * @method \App\Model\Entity\Transfer findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Transfer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Transfer[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Transfer|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Transfer saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Transfer[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Transfer[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Transfer[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Transfer[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TransfersTable extends Table
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

        $this->setTable('transfers');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Dogs', [
            'foreignKey' => 'dog_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Clinics', [
            'foreignKey' => 'clinic_id',
            'joinType' => 'INNER',
        ]);

        $this->belongsTo('Owners', [
            'foreignKey' => 'seller_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Owners', [
            'foreignKey' => 'buyer_id',
            'joinType' => 'INNER',
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
            ->date('date')
            ->requirePresence('date', 'create')
            ->notEmptyDate('date');

        $validator
            ->integer('seller_id')
            ->requirePresence('seller_id', 'create')
            ->notEmptyString('seller_id');

        $validator
            ->integer('buyer_id')
            ->requirePresence('buyer_id', 'create')
            ->notEmptyString('buyer_id');

        $validator
            ->integer('dog_id')
            ->notEmptyString('dog_id');

        $validator
            ->integer('clinic_id')
            ->notEmptyString('clinic_id');

        $validator
            ->numeric('prize')
            ->requirePresence('prize', 'create')
            ->notEmptyString('prize');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('dog_id', 'Dogs'), ['errorField' => 'dog_id']);
        $rules->add($rules->existsIn('clinic_id', 'Clinics'), ['errorField' => 'clinic_id']);

        $rules->add($rules->existsIn('seller_id', 'Owners'), ['errorField' => 'seller_id']);
        $rules->add($rules->existsIn('buyer_id', 'Owners'), ['errorField' => 'buyer_id']);

        return $rules;
    }
}
