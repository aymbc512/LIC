<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Car Entity
 *
 * @property int $car_id
 * @property int|null $store_id
 * @property int|null $displacement_id
 * @property int|null $car_kbn
 * @property string|null $name
 * @property string|null $car_registration_number_chimei
 * @property int|null $car_registration_number_suji
 * @property string|null $number_hiragana
 * @property string|null $number_suji
 * @property string|null $vin_number
 * @property string|null $maker
 * @property string|null $model
 * @property string|null $color
 * @property int|null $transmission
 * @property int|null $fuel_kbn
 * @property int|null $oil_kbn
 * @property bool|null $is_deleted
 * @property string|null $image_file_name
 * @property int|null $creator
 * @property \Cake\I18n\DateTime|null $created_at
 * @property int|null $updater
 * @property \Cake\I18n\DateTime $updated_at
 *
 * @property \App\Model\Entity\Store $store
 */
class Car extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'store_id' => true,
        'displacement_id' => true,
        'car_kbn' => true,
        'name' => true,
        'car_registration_number_chimei' => true,
        'car_registration_number_suji' => true,
        'number_hiragana' => true,
        'number_suji' => true,
        'vin_number' => true,
        'maker' => true,
        'model' => true,
        'color' => true,
        'transmission' => true,
        'fuel_kbn' => true,
        'oil_kbn' => true,
        'is_deleted' => true,
        'image_file_name' => true,
        'creator' => true,
        'created_at' => true,
        'updater' => true,
        'updated_at' => true,
        'store' => true,
    ];
}
