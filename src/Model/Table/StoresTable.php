<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Stores Model
 *
 * @method \App\Model\Entity\Store newEmptyEntity()
 * @method \App\Model\Entity\Store newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Store> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Store get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Store findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Store patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Store> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Store|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Store saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Store>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Store>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Store>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Store> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Store>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Store>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Store>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Store> deleteManyOrFail(iterable $entities, array $options = [])
 */
class StoresTable extends Table
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

        $this->setTable('stores');
        $this->setDisplayField('name');
        $this->setPrimaryKey('store_id');
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
            ->scalar('phone_number')
            ->maxLength('phone_number', 15)
            ->allowEmptyString('phone_number');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('post_cd')
            ->maxLength('post_cd', 15)
            ->allowEmptyString('post_cd');

        $validator
            ->scalar('prefectures')
            ->maxLength('prefectures', 5)
            ->allowEmptyString('prefectures');

        $validator
            ->scalar('municipalities')
            ->maxLength('municipalities', 50)
            ->allowEmptyString('municipalities');

        $validator
            ->scalar('adress_below')
            ->maxLength('adress_below', 255)
            ->allowEmptyString('adress_below');

        $validator
            ->scalar('officer_name')
            ->maxLength('officer_name', 255)
            ->allowEmptyString('officer_name');

        $validator
            ->scalar('officer_phone_number')
            ->maxLength('officer_phone_number', 15)
            ->allowEmptyString('officer_phone_number');

        $validator
            ->time('open_at')
            ->allowEmptyTime('open_at');

        $validator
            ->time('close_at')
            ->allowEmptyTime('close_at');

        $validator
            ->date('contract_start_at')
            ->allowEmptyDate('contract_start_at');

        $validator
            ->date('contract_end_at')
            ->allowEmptyDate('contract_end_at');

        $validator
            ->boolean('delivery_service')
            ->allowEmptyString('delivery_service');

        $validator
            ->boolean('management_company')
            ->allowEmptyString('management_company');

        $validator
            ->scalar('remarks')
            ->allowEmptyString('remarks');

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
}
