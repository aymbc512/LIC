<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Schedulepolicy Entity
 *
 * @property int $schedule_id
 * @property \Cake\I18n\Time|null $open_at
 * @property \Cake\I18n\Time|null $closed_at
 * @property int|null $store_id
 * @property string|null $days_of_the_week
 * @property \Cake\I18n\Date|null $available_on
 * @property \Cake\I18n\Date|null $unavairable_on
 * @property int|null $creator
 * @property \Cake\I18n\DateTime|null $created_at
 * @property int|null $updater
 * @property \Cake\I18n\DateTime $updated_at
 * @property bool|null $is_deleted
 *
 * @property \App\Model\Entity\Store $store
 */
class Schedulepolicy extends Entity
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
        'open_at' => true,
        'closed_at' => true,
        'store_id' => true,
        'days_of_the_week' => true,
        'available_on' => true,
        'unavairable_on' => true,
        'creator' => true,
        'created_at' => true,
        'updater' => true,
        'updated_at' => true,
        'is_deleted' => true,
        'store' => true,
    ];
}
