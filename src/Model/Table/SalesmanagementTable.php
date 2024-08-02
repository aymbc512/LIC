<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Salesmanagement Model
 *
 * @property \App\Model\Table\ReservationsTable&\Cake\ORM\Association\BelongsTo $Reservations
 *
 * @method \App\Model\Entity\Salesmanagement newEmptyEntity()
 * @method \App\Model\Entity\Salesmanagement newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Salesmanagement> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Salesmanagement get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Salesmanagement findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Salesmanagement patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Salesmanagement> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Salesmanagement|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Salesmanagement saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Salesmanagement>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Salesmanagement>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Salesmanagement>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Salesmanagement> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Salesmanagement>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Salesmanagement>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Salesmanagement>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Salesmanagement> deleteManyOrFail(iterable $entities, array $options = [])
 */
class SalesmanagementTable extends Table
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

        $this->setTable('salesmanagement');
        $this->setDisplayField('salesManegement_id');
        $this->setPrimaryKey('salesManegement_id');

        $this->belongsTo('Reservations', [
            'foreignKey' => 'reservation_id',
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
            ->integer('reservation_id')
            ->allowEmptyString('reservation_id');

        $validator
            ->integer('vehicle_id')
            ->allowEmptyString('vehicle_id');

        $validator
            ->integer('reservation_store_id')
            ->allowEmptyString('reservation_store_id');

        $validator
            ->integer('status_kbn')
            ->allowEmptyString('status_kbn');

        $validator
            ->date('start_on')
            ->allowEmptyDate('start_on');

        $validator
            ->time('start_at')
            ->allowEmptyTime('start_at');

        $validator
            ->date('end_on')
            ->allowEmptyDate('end_on');

        $validator
            ->time('end_at')
            ->allowEmptyTime('end_at');

        $validator
            ->time('usage_time')
            ->allowEmptyTime('usage_time');

        $validator
            ->time('late_time')
            ->allowEmptyTime('late_time');

        $validator
            ->integer('option_amount')
            ->allowEmptyString('option_amount');

        $validator
            ->integer('other_additional_fee')
            ->allowEmptyString('other_additional_fee');

        $validator
            ->scalar('other_additional_fee_contents')
            ->allowEmptyString('other_additional_fee_contents');

        $validator
            ->integer('reduced_fee')
            ->allowEmptyString('reduced_fee');

        $validator
            ->integer('reduced_fee_contents')
            ->allowEmptyString('reduced_fee_contents');

        $validator
            ->integer('basic_fee')
            ->allowEmptyString('basic_fee');

        $validator
            ->integer('late_fee')
            ->allowEmptyString('late_fee');

        $validator
            ->integer('amount_of_points_used')
            ->allowEmptyString('amount_of_points_used');

        $validator
            ->integer('reward_points')
            ->allowEmptyString('reward_points');

        $validator
            ->integer('total_amount')
            ->allowEmptyString('total_amount');

        $validator
            ->integer('accounting_amount')
            ->allowEmptyString('accounting_amount');

        $validator
            ->integer('commission')
            ->allowEmptyString('commission');

        $validator
            ->integer('amount_paid_to_store')
            ->allowEmptyString('amount_paid_to_store');

        $validator
            ->boolean('liquidated')
            ->allowEmptyString('liquidated');

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
        $rules->add($rules->existsIn(['reservation_id'], 'Reservations'), ['errorField' => 'reservation_id']);

        return $rules;
    }
}
