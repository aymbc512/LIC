<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Salesmanagement Entity
 *
 * @property int $salesManegement_id
 * @property int|null $reservation_id
 * @property int|null $vehicle_id
 * @property int|null $reservation_store_id
 * @property int|null $status_kbn
 * @property \Cake\I18n\Date|null $start_on
 * @property \Cake\I18n\Time|null $start_at
 * @property \Cake\I18n\Date|null $end_on
 * @property \Cake\I18n\Time|null $end_at
 * @property \Cake\I18n\Time|null $usage_time
 * @property \Cake\I18n\Time|null $late_time
 * @property int|null $option_amount
 * @property int|null $other_additional_fee
 * @property string|null $other_additional_fee_contents
 * @property int|null $reduced_fee
 * @property int|null $reduced_fee_contents
 * @property int|null $basic_fee
 * @property int|null $late_fee
 * @property int|null $amount_of_points_used
 * @property int|null $reward_points
 * @property int|null $total_amount
 * @property int|null $accounting_amount
 * @property int|null $commission
 * @property int|null $amount_paid_to_store
 * @property bool|null $liquidated
 * @property int|null $creator
 * @property \Cake\I18n\DateTime|null $created_at
 * @property int|null $updater
 * @property \Cake\I18n\DateTime $updated_at
 * @property bool|null $is_deleted
 *
 * @property \App\Model\Entity\Reservation $reservation
 */
class Salesmanagement extends Entity
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
        'reservation_id' => true,
        'vehicle_id' => true,
        'reservation_store_id' => true,
        'status_kbn' => true,
        'start_on' => true,
        'start_at' => true,
        'end_on' => true,
        'end_at' => true,
        'usage_time' => true,
        'late_time' => true,
        'option_amount' => true,
        'other_additional_fee' => true,
        'other_additional_fee_contents' => true,
        'reduced_fee' => true,
        'reduced_fee_contents' => true,
        'basic_fee' => true,
        'late_fee' => true,
        'amount_of_points_used' => true,
        'reward_points' => true,
        'total_amount' => true,
        'accounting_amount' => true,
        'commission' => true,
        'amount_paid_to_store' => true,
        'liquidated' => true,
        'creator' => true,
        'created_at' => true,
        'updater' => true,
        'updated_at' => true,
        'is_deleted' => true,
        'reservation' => true,
    ];
}
