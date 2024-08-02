<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Carunavailability Entity
 *
 * @property int $carUnavairable_id
 * @property \Cake\I18n\Date|null $started_on
 * @property \Cake\I18n\Time|null $started_at
 * @property \Cake\I18n\Date|null $end_on
 * @property \Cake\I18n\Time|null $end_at
 * @property int|null $car_id
 * @property int|null $store_id
 * @property string|null $unavailable_reason
 * @property int|null $creator
 * @property \Cake\I18n\DateTime|null $created_at
 * @property int|null $updater
 * @property \Cake\I18n\DateTime $updated_at
 * @property bool|null $is_deleted
 *
 * @property \App\Model\Entity\Car $car
 * @property \App\Model\Entity\Store $store
 */
class Carunavailability extends Entity
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
        'started_on' => true,
        'started_at' => true,
        'end_on' => true,
        'end_at' => true,
        'car_id' => true,
        'store_id' => true,
        'unavailable_reason' => true,
        'creator' => true,
        'created_at' => true,
        'updater' => true,
        'updated_at' => true,
        'is_deleted' => true,
        'car' => true,
        'store' => true,
    ];
}
