<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Carschedule Model
 *
 * @property \App\Model\Table\StoresTable&\Cake\ORM\Association\BelongsTo $Stores
 * @property \App\Model\Table\CarsTable&\Cake\ORM\Association\BelongsTo $Cars
 * @property \App\Model\Table\CarunavailabilityTable&\Cake\ORM\Association\BelongsTo $Carunavailability
 *
 * @method \App\Model\Entity\Carschedule newEmptyEntity()
 * @method \App\Model\Entity\Carschedule newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Carschedule> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Carschedule get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Carschedule findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Carschedule patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Carschedule> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Carschedule|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Carschedule saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Carschedule>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Carschedule>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Carschedule>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Carschedule> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Carschedule>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Carschedule>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Carschedule>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Carschedule> deleteManyOrFail(iterable $entities, array $options = [])
 */
class CarscheduleTable extends Table
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

        $this->setTable('carschedule');
        $this->setDisplayField('carSchedule_id');
        $this->setPrimaryKey('carSchedule_id');

        $this->belongsTo('Stores', [
            'foreignKey' => 'store_id',
        ]);
        $this->belongsTo('Cars', [
            'foreignKey' => 'car_id',
        ]);
        $this->belongsTo('Carunavailability', [
            'foreignKey' => 'carUnavairable_id',
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
            ->allowEmptyDate('date');

        $validator
            ->time('time')
            ->allowEmptyTime('time');

        $validator
            ->boolean('is_unavailable')
            ->allowEmptyString('is_unavailable');

        $validator
            ->scalar('unavailable_reason')
            ->allowEmptyString('unavailable_reason');

        $validator
            ->integer('store_id')
            ->allowEmptyString('store_id');

        $validator
            ->integer('car_id')
            ->allowEmptyString('car_id');

        $validator
            ->integer('carUnavairable_id')
            ->allowEmptyString('carUnavairable_id');

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
        $rules->add($rules->existsIn(['store_id'], 'Stores'), ['errorField' => 'store_id']);
        $rules->add($rules->existsIn(['car_id'], 'Cars'), ['errorField' => 'car_id']);
        $rules->add($rules->existsIn(['carUnavairable_id'], 'Carunavailability'), ['errorField' => 'carUnavairable_id']);

        return $rules;
    }
}
