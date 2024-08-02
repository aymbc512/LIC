<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Carschedule Entity
 *
 * @property int $carSchedule_id
 * @property \Cake\I18n\Date|null $date
 * @property \Cake\I18n\Time|null $time
 * @property bool|null $is_unavailable
 * @property string|null $unavailable_reason
 * @property int|null $store_id
 * @property int|null $car_id
 * @property int|null $carUnavairable_id
 * @property bool|null $is_deleted
 *
 * @property \App\Model\Entity\Store $store
 * @property \App\Model\Entity\Car $car
 * @property \App\Model\Entity\Carunavailability $carunavailability
 */
class Carschedule extends Entity
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
        'date' => true,
        'time' => true,
        'is_unavailable' => true,
        'unavailable_reason' => true,
        'store_id' => true,
        'car_id' => true,
        'carUnavairable_id' => true,
        'is_deleted' => true,
        'store' => true,
        'car' => true,
        'carunavailability' => true,
    ];
}
