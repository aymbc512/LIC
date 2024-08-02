<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Storeholiday Entity
 *
 * @property int $storeHoliday_id
 * @property \Cake\I18n\Date|null $starded_on
 * @property \Cake\I18n\Time|null $started_at
 * @property \Cake\I18n\Date|null $end_on
 * @property \Cake\I18n\Time|null $end_at
 * @property string|null $holiday_reason
 * @property int|null $store_id
 * @property int|null $creator
 * @property \Cake\I18n\DateTime|null $created_at
 * @property int|null $updater
 * @property \Cake\I18n\DateTime $updated_at
 * @property bool|null $is_deleted
 *
 * @property \App\Model\Entity\Store $store
 */
class Storeholiday extends Entity
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
        'starded_on' => true,
        'started_at' => true,
        'end_on' => true,
        'end_at' => true,
        'holiday_reason' => true,
        'store_id' => true,
        'creator' => true,
        'created_at' => true,
        'updater' => true,
        'updated_at' => true,
        'is_deleted' => true,
        'store' => true,
    ];
}
