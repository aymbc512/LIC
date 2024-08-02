<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Price Entity
 *
 * @property int $price_id
 * @property string|null $name
 * @property int|null $price_pattern_id
 * @property int|null $amount
 * @property \Cake\I18n\Date|null $apply_start_on
 * @property \Cake\I18n\Date|null $apply_end_on
 * @property bool|null $is_deleted
 * @property int|null $creator
 * @property \Cake\I18n\DateTime|null $created_at
 * @property int|null $updater
 * @property \Cake\I18n\DateTime $updated_at
 *
 * @property \App\Model\Entity\Pricepattern $pricepattern
 */
class Price extends Entity
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
        'price_pattern_id' => true,
        'amount' => true,
        'apply_start_on' => true,
        'apply_end_on' => true,
        'is_deleted' => true,
        'creator' => true,
        'created_at' => true,
        'updater' => true,
        'updated_at' => true,
        'pricepattern' => true,
    ];
}
