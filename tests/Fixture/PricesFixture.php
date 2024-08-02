<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PricesFixture
 */
class PricesFixture extends TestFixture
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
                'price_id' => 1,
                'name' => 'Lorem',
                'price_pattern_id' => 1,
                'amount' => 1,
                'apply_start_on' => '2024-08-02',
                'apply_end_on' => '2024-08-02',
                'is_deleted' => 1,
                'creator' => 1,
                'created_at' => '2024-08-02 08:09:34',
                'updater' => 1,
                'updated_at' => 1722586174,
            ],
        ];
        parent::init();
    }
}
