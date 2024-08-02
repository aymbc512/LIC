<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SettlementsFixture
 */
class SettlementsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'settlement_id' => 1,
                'store_id' => 1,
                'month' => 1,
                'total_sale' => 1,
                'amount' => 1,
                'commission_amount' => 1,
                'general_transfer_file' => 1,
                'is_deleted' => 1,
            ],
        ];
        parent::init();
    }
}
