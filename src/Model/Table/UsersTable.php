<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\StoresTable&\Cake\ORM\Association\BelongsTo $Stores
 *
 * @method \App\Model\Entity\User newEmptyEntity()
 * @method \App\Model\Entity\User newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\User> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\User findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\User> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\User|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\User>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\User>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\User>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\User> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\User>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\User>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\User>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\User> deleteManyOrFail(iterable $entities, array $options = [])
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('name');
        $this->setPrimaryKey('user_id');

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
            ->scalar('name')
            ->maxLength('name', 255)
            ->allowEmptyString('name');

        $validator
            ->scalar('furigana')
            ->maxLength('furigana', 255)
            ->allowEmptyString('furigana');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('passward')
            ->maxLength('passward', 20)
            ->allowEmptyString('passward');

        $validator
            ->scalar('post_cd')
            ->maxLength('post_cd', 7)
            ->allowEmptyString('post_cd');

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
            ->scalar('phone_number')
            ->maxLength('phone_number', 15)
            ->allowEmptyString('phone_number');

        $validator
            ->dateTime('register_at')
            ->notEmptyDateTime('register_at');

        $validator
            ->dateTime('update_at')
            ->notEmptyDateTime('update_at');

        $validator
            ->scalar('privilege')
            ->maxLength('privilege', 12)
            ->allowEmptyString('privilege');

        $validator
            ->integer('store_id')
            ->allowEmptyString('store_id');

        $validator
            ->scalar('user_status')
            ->maxLength('user_status', 5)
            ->allowEmptyString('user_status');

        $validator
            ->boolean('usage_term')
            ->allowEmptyString('usage_term');

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
        $rules->add($rules->isUnique(['email']), ['errorField' => 'email']);
        $rules->add($rules->existsIn(['store_id'], 'Stores'), ['errorField' => 'store_id']);

        return $rules;
    }
}
