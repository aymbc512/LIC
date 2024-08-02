<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cars Model
 *
 * @property \App\Model\Table\StoresTable&\Cake\ORM\Association\BelongsTo $Stores
 *
 * @method \App\Model\Entity\Car newEmptyEntity()
 * @method \App\Model\Entity\Car newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Car> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Car get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Car findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Car patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Car> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Car|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Car saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Car>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Car>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Car>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Car> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Car>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Car>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Car>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Car> deleteManyOrFail(iterable $entities, array $options = [])
 */
class CarsTable extends Table
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

        $this->setTable('cars');
        $this->setDisplayField('name');
        $this->setPrimaryKey('car_id');

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
            ->integer('displacement_id')
            ->allowEmptyString('displacement_id');

        $validator
            ->integer('car_kbn')
            ->allowEmptyString('car_kbn');

        $validator
            ->scalar('name')
            ->maxLength('name', 100)
            ->allowEmptyString('name');

        $validator
            ->scalar('car_registration_number_chimei')
            ->maxLength('car_registration_number_chimei', 15)
            ->allowEmptyString('car_registration_number_chimei');

        $validator
            ->integer('car_registration_number_suji')
            ->allowEmptyString('car_registration_number_suji');

        $validator
            ->scalar('number_hiragana')
            ->maxLength('number_hiragana', 10)
            ->allowEmptyString('number_hiragana');

        $validator
            ->scalar('number_suji')
            ->maxLength('number_suji', 5)
            ->allowEmptyString('number_suji');

        $validator
            ->scalar('vin_number')
            ->maxLength('vin_number', 20)
            ->allowEmptyString('vin_number');

        $validator
            ->scalar('maker')
            ->maxLength('maker', 30)
            ->allowEmptyString('maker');

        $validator
            ->scalar('model')
            ->maxLength('model', 50)
            ->allowEmptyString('model');

        $validator
            ->scalar('color')
            ->maxLength('color', 25)
            ->allowEmptyString('color');

        $validator
            ->integer('transmission')
            ->allowEmptyString('transmission');

        $validator
            ->integer('fuel_kbn')
            ->allowEmptyString('fuel_kbn');

        $validator
            ->integer('oil_kbn')
            ->allowEmptyString('oil_kbn');

        $validator
            ->boolean('is_deleted')
            ->allowEmptyString('is_deleted');

        $validator
            ->scalar('image_file_name')
            ->maxLength('image_file_name', 50)
            ->allowEmptyString('image_file_name');

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
