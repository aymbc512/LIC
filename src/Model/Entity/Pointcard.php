<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pointcard Entity
 *
 * @property int|null $pointCard_id
 * @property int|null $user_id
 * @property int|null $grant_point
 * @property int|null $usage_point
 * @property int|null $accumulated_point
 * @property \Cake\I18n\DateTime $created_at
 * @property bool|null $is_deleted
 *
 * @property \App\Model\Entity\User $user
 */
class Pointcard extends Entity
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
        'pointCard_id' => true,
        'user_id' => true,
        'grant_point' => true,
        'usage_point' => true,
        'accumulated_point' => true,
        'created_at' => true,
        'is_deleted' => true,
        'user' => true,
    ];
}
