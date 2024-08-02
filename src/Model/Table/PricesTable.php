<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Prices Model
 *
 * @method \App\Model\Entity\Price newEmptyEntity()
 * @method \App\Model\Entity\Price newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Price> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Price get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Price findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Price patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Price> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Price|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Price saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Price>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Price>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Price>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Price> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Price>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Price>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Price>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Price> deleteManyOrFail(iterable $entities, array $options = [])
 */
class PricesTable extends Table
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

        $this->setTable('prices');
        $this->setDisplayField('name');
        $this->setPrimaryKey('price_id');

        $this->belongsTo('PricePatterns', [
            'foreignKey' => 'price_pattern_id',
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
            ->maxLength('name', 7)
            ->allowEmptyString('name');

        $validator
            ->integer('price_pattern_id')
            ->allowEmptyString('price_pattern_id');

        $validator
            ->integer('amount')
            ->allowEmptyString('amount');

        $validator
            ->date('apply_start_on')
            ->allowEmptyDate('apply_start_on');

        $validator
            ->date('apply_end_on')
            ->allowEmptyDate('apply_end_on');

        $validator
            ->boolean('is_deleted')
            ->allowEmptyString('is_deleted');

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
        $rules->add($rules->existsIn(['price_pattern_id'], 'PricePatterns'), ['errorField' => 'price_pattern_id']);

        return $rules;
    }
}
