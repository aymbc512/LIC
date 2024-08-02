<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Userlogs Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Userlog newEmptyEntity()
 * @method \App\Model\Entity\Userlog newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Userlog> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Userlog get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Userlog findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Userlog patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Userlog> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Userlog|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Userlog saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Userlog>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Userlog>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Userlog>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Userlog> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Userlog>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Userlog>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Userlog>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Userlog> deleteManyOrFail(iterable $entities, array $options = [])
 */
class UserlogsTable extends Table
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

        $this->setTable('userlogs');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
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
            ->integer('userLog_id')
            ->allowEmptyString('userLog_id');

        $validator
            ->integer('user_id')
            ->allowEmptyString('user_id');

        $validator
            ->dateTime('login_at')
            ->notEmptyDateTime('login_at');

        $validator
            ->scalar('ip_adress')
            ->maxLength('ip_adress', 255)
            ->allowEmptyString('ip_adress');

        $validator
            ->scalar('browser_information')
            ->maxLength('browser_information', 255)
            ->allowEmptyString('browser_information');

        $validator
            ->scalar('device')
            ->maxLength('device', 255)
            ->allowEmptyString('device');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'), ['errorField' => 'user_id']);

        return $rules;
    }
}
