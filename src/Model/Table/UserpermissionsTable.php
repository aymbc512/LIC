<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Userpermissions Model
 *
 * @method \App\Model\Entity\Userpermission newEmptyEntity()
 * @method \App\Model\Entity\Userpermission newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Userpermission> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Userpermission get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Userpermission findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Userpermission patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Userpermission> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Userpermission|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Userpermission saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Userpermission>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Userpermission>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Userpermission>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Userpermission> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Userpermission>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Userpermission>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Userpermission>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Userpermission> deleteManyOrFail(iterable $entities, array $options = [])
 */
class UserpermissionsTable extends Table
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

        $this->setTable('userpermissions');
        $this->setDisplayField('userPrivilege_id');
        $this->setPrimaryKey('userPrivilege_id');
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
            ->scalar('privilege_name')
            ->maxLength('privilege_name', 15)
            ->allowEmptyString('privilege_name');

        $validator
            ->boolean('is_deleted')
            ->allowEmptyString('is_deleted');

        return $validator;
    }
}
