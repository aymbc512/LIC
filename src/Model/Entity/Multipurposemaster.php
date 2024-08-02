<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Multipurposemaster Entity
 *
 * @property int $multi_purpose_master_id
 * @property int|null $data_id
 * @property int|null $detail_id
 * @property string|null $name
 * @property bool|null $is_deleted
 */
class Multipurposemaster extends Entity
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
        'data_id' => true,
        'detail_id' => true,
        'name' => true,
        'is_deleted' => true,
    ];
}
