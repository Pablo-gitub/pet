<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Dogs Model
 *
 * @property \App\Model\Table\OwnersTable&\Cake\ORM\Association\BelongsTo $Owners
 * @property \App\Model\Table\BreedsTable&\Cake\ORM\Association\BelongsTo $Breeds
 * @property \App\Model\Table\TransfersTable&\Cake\ORM\Association\HasMany $Transfers
 * @property \App\Model\Table\VisitsTable&\Cake\ORM\Association\HasMany $Visits
 *
 * @method \App\Model\Entity\Dog newEmptyEntity()
 * @method \App\Model\Entity\Dog newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Dog[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Dog get($primaryKey, $options = [])
 * @method \App\Model\Entity\Dog findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Dog patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Dog[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Dog|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dog saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dog[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Dog[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Dog[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Dog[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DogsTable extends Table
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

        $this->setTable('dogs');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Owners', [
            'foreignKey' => 'owner_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Breeds', [
            'foreignKey' => 'breed_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Dogs', [
            'foreignKey' => 'mom_chip',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Dogs', [
            'foreignKey' => 'dad_chip',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Transfers', [
            'foreignKey' => 'dog_id',
        ]);
        $this->hasMany('Visits', [
            'foreignKey' => 'dog_id',
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
            ->integer('microchip')
            ->requirePresence('microchip', 'create')
            ->notEmptyString('microchip');

        $validator
            ->integer('owner_id')
            ->notEmptyString('owner_id');

        $validator
            ->integer('breed_id')
            ->notEmptyString('breed_id');

        $validator
            ->integer('mom_chip')
            ->allowEmptyString( 'mom_chip' )
            ->minLength('mom_chip', 15)
            ->maxLength('mom_chip', 15);

        $validator
            ->integer('dad_chip')
            ->allowEmptyString( 'dad_chip' )
            ->minLength('dad_chip', 15)
            ->maxLength('dad_chip', 15);

        $validator
            ->scalar('name')
            ->maxLength('name', 100)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('gender')
            ->maxLength('gender', 1)
            ->requirePresence('gender', 'create')
            ->notEmptyString('gender');

        $validator
            ->numeric('weight')
            ->requirePresence('weight', 'create')
            ->notEmptyString('weight');

        $validator
            ->date('birthday')
            ->requirePresence('birthday', 'create')
            ->notEmptyDate('birthday');


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
        $rules->add($rules->existsIn('owner_id', 'Owners'), ['errorField' => 'owner_id']);
        $rules->add($rules->existsIn('breed_id', 'Breeds'), ['errorField' => 'breed_id']);
        $rules->add($rules->existsIn('mom_id', 'Dogs'), ['errorField' => 'breed_id']);
        $rules->add($rules->isUnique(
            ['microchip', 'owner_id'],
            'Esiste già un cane appartenente a questo proprietario con questo numero di microchip'
        ));

        return $rules;
    }
}
