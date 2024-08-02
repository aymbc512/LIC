<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Settlement Entity
 *
 * @property int $settlement_id
 * @property int|null $store_id
 * @property int|null $month
 * @property int|null $total_sale
 * @property int|null $amount
 * @property int|null $commission_amount
 * @property bool|null $general_transfer_file
 * @property bool|null $is_deleted
 *
 * @property \App\Model\Entity\Store $store
 */
class Settlement extends Entity
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
        'store_id' => true,
        'month' => true,
        'total_sale' => true,
        'amount' => true,
        'commission_amount' => true,
        'general_transfer_file' => true,
        'is_deleted' => true,
        'store' => true,
    ];
}
