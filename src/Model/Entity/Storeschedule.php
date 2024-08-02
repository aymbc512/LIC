<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Storeschedule Entity
 *
 * @property int $storeSchedule_id
 * @property \Cake\I18n\Date|null $date
 * @property \Cake\I18n\Time|null $time
 * @property bool|null $is_unavailable
 * @property string|null $unavailable_reason
 * @property int|null $store_id
 * @property int|null $storeHoliday_id
 * @property bool|null $is_deleted
 *
 * @property \App\Model\Entity\Store $store
 * @property \App\Model\Entity\Storeholiday $storeholiday
 */
class Storeschedule extends Entity
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
        'storeHoliday_id' => true,
        'is_deleted' => true,
        'store' => true,
        'storeholiday' => true,
    ];
}
