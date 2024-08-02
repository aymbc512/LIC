<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pricepattern Entity
 *
 * @property int $price_pattern_id
 * @property string|null $name
 * @property string|null $unit_time
 * @property int|null $displacement_id
 * @property bool|null $is_deleted
 * @property int|null $fee_kbn
 * @property int|null $creator
 * @property \Cake\I18n\DateTime|null $created_at
 * @property int|null $updater
 * @property \Cake\I18n\DateTime $updated_at
 */
class Pricepattern extends Entity
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
        'name' => true,
        'unit_time' => true,
        'displacement_id' => true,
        'is_deleted' => true,
        'fee_kbn' => true,
        'creator' => true,
        'created_at' => true,
        'updater' => true,
        'updated_at' => true,
    ];
}
