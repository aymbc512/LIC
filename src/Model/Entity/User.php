<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $user_id
 * @property string|null $name
 * @property string|null $furigana
 * @property string|null $email
 * @property string|null $passward
 * @property string|null $post_cd
 * @property string|null $prefecture
 * @property string|null $municipalities
 * @property string|null $adress_below
 * @property string|null $phone_number
 * @property \Cake\I18n\DateTime $register_at
 * @property \Cake\I18n\DateTime $update_at
 * @property string|null $privilege
 * @property int|null $store_id
 * @property string|null $user_status
 * @property bool|null $usage_term
 *
 * @property \App\Model\Entity\Store $store
 */
class User extends Entity
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
        'furigana' => true,
        'email' => true,
        'passward' => true,
        'post_cd' => true,
        'prefecture' => true,
        'municipalities' => true,
        'adress_below' => true,
        'phone_number' => true,
        'register_at' => true,
        'update_at' => true,
        'privilege' => true,
        'store_id' => true,
        'user_status' => true,
        'usage_term' => true,
        'store' => true,
    ];
}
