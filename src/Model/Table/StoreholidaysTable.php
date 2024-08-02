<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Storeholidays Model
 *
 * @property \App\Model\Table\StoresTable&\Cake\ORM\Association\BelongsTo $Stores
 *
 * @method \App\Model\Entity\Storeholiday newEmptyEntity()
 * @method \App\Model\Entity\Storeholiday newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Storeholiday> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Storeholiday get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Storeholiday findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Storeholiday patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Storeholiday> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Storeholiday|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Storeholiday saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Storeholiday>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Storeholiday>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Storeholiday>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Storeholiday> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Storeholiday>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Storeholiday>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Storeholiday>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Storeholiday> deleteManyOrFail(iterable $entities, array $options = [])
 */
class StoreholidaysTable extends Table
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

        $this->setTable('storeholidays');
        $this->setDisplayField('storeHoliday_id');
        $this->setPrimaryKey('storeHoliday_id');

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
            ->date('starded_on')
            ->allowEmptyDate('starded_on');

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
            ->scalar('holiday_reason')
            ->allowEmptyString('holiday_reason');

        $validator
            ->integer('store_id')
            ->allowEmptyString('store_id');

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
        $rules->add($rules->existsIn(['store_id'], 'Stores'), ['errorField' => 'store_id']);

        return $rules;
    }
}
