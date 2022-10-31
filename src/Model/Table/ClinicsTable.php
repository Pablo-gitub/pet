<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Clinics Model
 *
 * @property \App\Model\Table\TransfersTable&\Cake\ORM\Association\HasMany $Transfers
 * @property \App\Model\Table\VisitsTable&\Cake\ORM\Association\HasMany $Visits
 *
 * @method \App\Model\Entity\Clinic newEmptyEntity()
 * @method \App\Model\Entity\Clinic newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Clinic[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Clinic get($primaryKey, $options = [])
 * @method \App\Model\Entity\Clinic findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Clinic patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Clinic[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Clinic|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Clinic saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Clinic[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Clinic[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Clinic[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Clinic[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ClinicsTable extends Table
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

        $this->setTable('clinics');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Transfers', [
            'foreignKey' => 'clinic_id',
        ]);
        $this->hasMany('Visits', [
            'foreignKey' => 'clinic_id',
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

        return $validator;
    }
}
