<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pricepatterns Model
 *
 * @method \App\Model\Entity\Pricepattern newEmptyEntity()
 * @method \App\Model\Entity\Pricepattern newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Pricepattern> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pricepattern get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Pricepattern findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Pricepattern patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Pricepattern> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pricepattern|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Pricepattern saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Pricepattern>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Pricepattern>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Pricepattern>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Pricepattern> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Pricepattern>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Pricepattern>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Pricepattern>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Pricepattern> deleteManyOrFail(iterable $entities, array $options = [])
 */
class PricepatternsTable extends Table
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

        $this->setTable('pricepatterns');
        $this->setDisplayField('name');
        $this->setPrimaryKey('price_pattern_id');
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
            ->maxLength('name', 50)
            ->allowEmptyString('name');

        $validator
            ->scalar('unit_time')
            ->maxLength('unit_time', 20)
            ->allowEmptyString('unit_time');

        $validator
            ->integer('displacement_id')
            ->allowEmptyString('displacement_id');

        $validator
            ->boolean('is_deleted')
            ->allowEmptyString('is_deleted');

        $validator
            ->integer('fee_kbn')
            ->allowEmptyString('fee_kbn');

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
}
