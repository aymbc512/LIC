<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Userlog Entity
 *
 * @property int|null $userLog_id
 * @property int|null $user_id
 * @property \Cake\I18n\DateTime $login_at
 * @property string|null $ip_adress
 * @property string|null $browser_information
 * @property string|null $device
 * @property bool|null $is_deleted
 *
 * @property \App\Model\Entity\User $user
 */
class Userlog extends Entity
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
        'userLog_id' => true,
        'user_id' => true,
        'login_at' => true,
        'ip_adress' => true,
        'browser_information' => true,
        'device' => true,
        'is_deleted' => true,
        'user' => true,
    ];
}
