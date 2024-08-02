<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Settlements Model
 *
 * @property \App\Model\Table\StoresTable&\Cake\ORM\Association\BelongsTo $Stores
 *
 * @method \App\Model\Entity\Settlement newEmptyEntity()
 * @method \App\Model\Entity\Settlement newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Settlement> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Settlement get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Settlement findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Settlement patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Settlement> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Settlement|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Settlement saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Settlement>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Settlement>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Settlement>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Settlement> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Settlement>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Settlement>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Settlement>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Settlement> deleteManyOrFail(iterable $entities, array $options = [])
 */
class SettlementsTable extends Table
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

        $this->setTable('settlements');
        $this->setDisplayField('settlement_id');
        $this->setPrimaryKey('settlement_id');

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
            ->integer('store_id')
            ->allowEmptyString('store_id');

        $validator
            ->integer('month')
            ->allowEmptyString('month');

        $validator
            ->integer('total_sale')
            ->allowEmptyString('total_sale');

        $validator
            ->integer('amount')
            ->allowEmptyString('amount');

        $validator
            ->integer('commission_amount')
            ->allowEmptyString('commission_amount');

        $validator
            ->boolean('general_transfer_file')
            ->allowEmptyFile('general_transfer_file');

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
