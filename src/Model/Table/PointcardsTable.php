<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pointcards Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Pointcard newEmptyEntity()
 * @method \App\Model\Entity\Pointcard newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Pointcard> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pointcard get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Pointcard findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Pointcard patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Pointcard> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pointcard|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Pointcard saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Pointcard>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Pointcard>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Pointcard>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Pointcard> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Pointcard>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Pointcard>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Pointcard>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Pointcard> deleteManyOrFail(iterable $entities, array $options = [])
 */
class PointcardsTable extends Table
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

        $this->setTable('pointcards');

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
            ->integer('pointCard_id')
            ->allowEmptyString('pointCard_id');

        $validator
            ->integer('user_id')
            ->allowEmptyString('user_id');

        $validator
            ->integer('grant_point')
            ->allowEmptyString('grant_point');

        $validator
            ->integer('usage_point')
            ->allowEmptyString('usage_point');

        $validator
            ->integer('accumulated_point')
            ->allowEmptyString('accumulated_point');

        $validator
            ->dateTime('created_at')
            ->notEmptyDateTime('created_at');

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
