<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Reservations Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\CarsTable&\Cake\ORM\Association\BelongsTo $Cars
 * @property \App\Model\Table\StoresTable&\Cake\ORM\Association\BelongsTo $Stores
 * @property \App\Model\Table\SalesmanagementTable&\Cake\ORM\Association\HasMany $Salesmanagement
 *
 * @method \App\Model\Entity\Reservation newEmptyEntity()
 * @method \App\Model\Entity\Reservation newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Reservation> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Reservation get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Reservation findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Reservation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Reservation> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Reservation|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Reservation saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Reservation>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Reservation>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Reservation>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Reservation> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Reservation>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Reservation>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Reservation>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Reservation> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ReservationsTable extends Table
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

        $this->setTable('reservations');
        $this->setDisplayField('reservationManegement_id');
        $this->setPrimaryKey('reservationManegement_id');

        $this->belongsTo('Users', [
            'foreignKey' => 'customer_id',
        ]);
        $this->belongsTo('Cars', [
            'foreignKey' => 'vehicle_id',
        ]);
        $this->belongsTo('Stores', [
            'foreignKey' => 'reservation_store_id',
        ]);
        $this->hasMany('Salesmanagement', [
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
            ->integer('customer_id')
            ->allowEmptyString('customer_id');

        $validator
            ->integer('vehicle_id')
            ->allowEmptyString('vehicle_id');

        $validator
            ->integer('reservation_store_id')
            ->allowEmptyString('reservation_store_id');

        $validator
            ->date('reservation_start_date')
            ->allowEmptyDate('reservation_start_date');

        $validator
            ->time('reservation_start_time')
            ->allowEmptyTime('reservation_start_time');

        $validator
            ->date('scheduled_return_date')
            ->allowEmptyDate('scheduled_return_date');

        $validator
            ->time('scheduled_return_time')
            ->allowEmptyTime('scheduled_return_time');

        $validator
            ->time('scheduled_usage_time')
            ->allowEmptyTime('scheduled_usage_time');

        $validator
            ->scalar('status')
            ->maxLength('status', 8)
            ->allowEmptyString('status');

        $validator
            ->integer('childsheet_kbn')
            ->allowEmptyString('childsheet_kbn');

        $validator
            ->boolean('etccard_rental')
            ->allowEmptyString('etccard_rental');

        $validator
            ->boolean('delivery_service')
            ->allowEmptyString('delivery_service');

        $validator
            ->scalar('prefecture')
            ->maxLength('prefecture', 5)
            ->allowEmptyString('prefecture');

        $validator
            ->scalar('municipalities')
            ->maxLength('municipalities', 50)
            ->allowEmptyString('municipalities');

        $validator
            ->scalar('adress_below')
            ->maxLength('adress_below', 255)
            ->allowEmptyString('adress_below');

        $validator
            ->boolean('compensation')
            ->allowEmptyString('compensation');

        $validator
            ->integer('total_basic_fee')
            ->allowEmptyString('total_basic_fee');

        $validator
            ->integer('total_optional_fee')
            ->allowEmptyString('total_optional_fee');

        $validator
            ->integer('reservation_total_amount')
            ->allowEmptyString('reservation_total_amount');

        $validator
            ->integer('point_usage')
            ->allowEmptyString('point_usage');

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
        $rules->add($rules->existsIn(['customer_id'], 'Users'), ['errorField' => 'customer_id']);
        $rules->add($rules->existsIn(['vehicle_id'], 'Cars'), ['errorField' => 'vehicle_id']);
        $rules->add($rules->existsIn(['reservation_store_id'], 'Stores'), ['errorField' => 'reservation_store_id']);

        return $rules;
    }
}
