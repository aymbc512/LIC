<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Multipurposemaster Model
 *
 * @method \App\Model\Entity\Multipurposemaster newEmptyEntity()
 * @method \App\Model\Entity\Multipurposemaster newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Multipurposemaster> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Multipurposemaster get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Multipurposemaster findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Multipurposemaster patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Multipurposemaster> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Multipurposemaster|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Multipurposemaster saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Multipurposemaster>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Multipurposemaster>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Multipurposemaster>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Multipurposemaster> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Multipurposemaster>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Multipurposemaster>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Multipurposemaster>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Multipurposemaster> deleteManyOrFail(iterable $entities, array $options = [])
 */
class MultipurposemasterTable extends Table
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

        $this->setTable('multipurposemaster');
        $this->setDisplayField('name');
        $this->setPrimaryKey('multi_purpose_master_id');
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
            ->integer('data_id')
            ->allowEmptyString('data_id');

        $validator
            ->integer('detail_id')
            ->allowEmptyString('detail_id');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->allowEmptyString('name');

        $validator
            ->boolean('is_deleted')
            ->allowEmptyString('is_deleted');

        return $validator;
    }
}
