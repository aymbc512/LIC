<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Carunavailability Model
 *
 * @property \App\Model\Table\CarsTable&\Cake\ORM\Association\BelongsTo $Cars
 * @property \App\Model\Table\StoresTable&\Cake\ORM\Association\BelongsTo $Stores
 *
 * @method \App\Model\Entity\Carunavailability newEmptyEntity()
 * @method \App\Model\Entity\Carunavailability newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Carunavailability> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Carunavailability get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Carunavailability findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Carunavailability patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Carunavailability> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Carunavailability|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Carunavailability saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Carunavailability>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Carunavailability>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Carunavailability>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Carunavailability> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Carunavailability>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Carunavailability>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Carunavailability>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Carunavailability> deleteManyOrFail(iterable $entities, array $options = [])
 */
class CarunavailabilityTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('carunavailability');
        $this->setDisplayField('carUnavairable_id');
        $this->setPrimaryKey('carUnavairable_id');

        $this->belongsTo('Cars', [
            'foreignKey' => 'car_id',
        ]);
        $this->belongsTo('Stores', [
            'foreignKey' => 'store_id',
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
            ->date('started_on')
            ->allowEmptyDate('started_on');

        $validator
            ->time('started_at')
            ->allowEmptyTime('started_at');

        $validator
            ->date('end_on')
            ->allowEmptyDate('end_on');

        $validator
            ->time('end_at')
            ->allowEmptyTime('end_at');

        $validator
            ->integer('car_id')
            ->allowEmptyString('car_id');

        $validator
            ->integer('store_id')
            ->allowEmptyString('store_id');

        $validator
            ->scalar('unavailable_reason')
            ->allowEmptyString('unavailable_reason');

        $validator
            ->integer('creator')
            ->allowEmptyString('creator');

        $validator
            ->dateTime('created_at')
            ->allowEmptyDateTime('created_at');

        $validator
            ->integer('updater')
            ->allowEmptyString('updater');

        $validator
            ->dateTime('updated_at')
            ->notEmptyDateTime('updated_at');

        $validator
            ->boolean('is_deleted')
            ->allowEmptyString('is_deleted');

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
        $rules->add($rules->existsIn(['car_id'], 'Cars'), ['errorField' => 'car_id']);
        $rules->add($rules->existsIn(['store_id'], 'Stores'), ['errorField' => 'store_id']);

        return $rules;
    }
}
