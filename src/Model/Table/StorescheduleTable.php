<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Storeschedule Model
 *
 * @property \App\Model\Table\StoresTable&\Cake\ORM\Association\BelongsTo $Stores
 * @property \App\Model\Table\StoreholidaysTable&\Cake\ORM\Association\BelongsTo $Storeholidays
 *
 * @method \App\Model\Entity\Storeschedule newEmptyEntity()
 * @method \App\Model\Entity\Storeschedule newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Storeschedule> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Storeschedule get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Storeschedule findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Storeschedule patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Storeschedule> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Storeschedule|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Storeschedule saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Storeschedule>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Storeschedule>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Storeschedule>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Storeschedule> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Storeschedule>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Storeschedule>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Storeschedule>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Storeschedule> deleteManyOrFail(iterable $entities, array $options = [])
 */
class StorescheduleTable extends Table
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

        $this->setTable('storeschedule');
        $this->setDisplayField('storeSchedule_id');
        $this->setPrimaryKey('storeSchedule_id');

        $this->belongsTo('Stores', [
            'foreignKey' => 'store_id',
        ]);
        $this->belongsTo('Storeholidays', [
            'foreignKey' => 'storeHoliday_id',
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
            ->integer('storeHoliday_id')
            ->allowEmptyString('storeHoliday_id');

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
        $rules->add($rules->existsIn(['storeHoliday_id'], 'Storeholidays'), ['errorField' => 'storeHoliday_id']);

        return $rules;
    }
}
