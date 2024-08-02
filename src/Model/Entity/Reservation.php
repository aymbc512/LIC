<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Reservation Entity
 *
 * @property int $reservationManegement_id
 * @property int|null $customer_id
 * @property int|null $vehicle_id
 * @property int|null $reservation_store_id
 * @property \Cake\I18n\Date|null $reservation_start_date
 * @property \Cake\I18n\Time|null $reservation_start_time
 * @property \Cake\I18n\Date|null $scheduled_return_date
 * @property \Cake\I18n\Time|null $scheduled_return_time
 * @property \Cake\I18n\Time|null $scheduled_usage_time
 * @property string|null $status
 * @property int|null $childsheet_kbn
 * @property bool|null $etccard_rental
 * @property bool|null $delivery_service
 * @property string|null $prefecture
 * @property string|null $municipalities
 * @property string|null $adress_below
 * @property bool|null $compensation
 * @property int|null $total_basic_fee
 * @property int|null $total_optional_fee
 * @property int|null $reservation_total_amount
 * @property int|null $point_usage
 * @property int|null $creator
 * @property \Cake\I18n\DateTime|null $created_at
 * @property int|null $updater
 * @property \Cake\I18n\DateTime $updated_at
 * @property bool|null $is_deleted
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Car $car
 * @property \App\Model\Entity\Store $store
 * @property \App\Model\Entity\Salesmanagement[] $salesmanagement
 */
class Reservation extends Entity
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
        'customer_id' => true,
        'vehicle_id' => true,
        'reservation_store_id' => true,
        'reservation_start_date' => true,
        'reservation_start_time' => true,
        'scheduled_return_date' => true,
        'scheduled_return_time' => true,
        'scheduled_usage_time' => true,
        'status' => true,
        'childsheet_kbn' => true,
        'etccard_rental' => true,
        'delivery_service' => true,
        'prefecture' => true,
        'municipalities' => true,
        'adress_below' => true,
        'compensation' => true,
        'total_basic_fee' => true,
        'total_optional_fee' => true,
        'reservation_total_amount' => true,
        'point_usage' => true,
        'creator' => true,
        'created_at' => true,
        'updater' => true,
        'updated_at' => true,
        'is_deleted' => true,
        'user' => true,
        'car' => true,
        'store' => true,
        'salesmanagement' => true,
    ];
}
