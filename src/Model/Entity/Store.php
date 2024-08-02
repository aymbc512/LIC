<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Store Entity
 *
 * @property int $store_id
 * @property string|null $name
 * @property string|null $phone_number
 * @property string|null $email
 * @property string|null $post_cd
 * @property string|null $prefectures
 * @property string|null $municipalities
 * @property string|null $adress_below
 * @property string|null $officer_name
 * @property string|null $officer_phone_number
 * @property \Cake\I18n\Time|null $open_at
 * @property \Cake\I18n\Time|null $close_at
 * @property \Cake\I18n\Date|null $contract_start_at
 * @property \Cake\I18n\Date|null $contract_end_at
 * @property bool|null $delivery_service
 * @property bool|null $management_company
 * @property string|null $remarks
 * @property int|null $creator
 * @property \Cake\I18n\DateTime|null $created_at
 * @property int|null $updater
 * @property \Cake\I18n\DateTime $updated_at
 * @property bool|null $is_deleted
 */
class Store extends Entity
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
        'phone_number' => true,
        'email' => true,
        'post_cd' => true,
        'prefectures' => true,
        'municipalities' => true,
        'adress_below' => true,
        'officer_name' => true,
        'officer_phone_number' => true,
        'open_at' => true,
        'close_at' => true,
        'contract_start_at' => true,
        'contract_end_at' => true,
        'delivery_service' => true,
        'management_company' => true,
        'remarks' => true,
        'creator' => true,
        'created_at' => true,
        'updater' => true,
        'updated_at' => true,
        'is_deleted' => true,
    ];
}
