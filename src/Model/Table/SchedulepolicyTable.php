<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Schedulepolicy Model
 *
 * @property \App\Model\Table\StoresTable&\Cake\ORM\Association\BelongsTo $Stores
 *
 * @method \App\Model\Entity\Schedulepolicy newEmptyEntity()
 * @method \App\Model\Entity\Schedulepolicy newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Schedulepolicy> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Schedulepolicy get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Schedulepolicy findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Schedulepolicy patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Schedulepolicy> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Schedulepolicy|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Schedulepolicy saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Schedulepolicy>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Schedulepolicy>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Schedulepolicy>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Schedulepolicy> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Schedulepolicy>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Schedulepolicy>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Schedulepolicy>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Schedulepolicy> deleteManyOrFail(iterable $entities, array $options = [])
 */
class SchedulepolicyTable extends Table
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

        $this->setTable('schedulepolicy');
        $this->setDisplayField('schedule_id');
        $this->setPrimaryKey('schedule_id');

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
            ->time('open_at')
            ->allowEmptyTime('open_at');

        $validator
            ->time('closed_at')
            ->allowEmptyTime('closed_at');

        $validator
            ->integer('store_id')
            ->allowEmptyString('store_id');

        $validator
            ->scalar('days_of_the_week')
            ->maxLength('days_of_the_week', 1)
            ->allowEmptyString('days_of_the_week');

        $validator
            ->date('available_on')
            ->allowEmptyDate('available_on');

        $validator
            ->date('unavairable_on')
            ->allowEmptyDate('unavairable_on');

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
