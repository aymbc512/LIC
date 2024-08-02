<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PricepatternsFixture
 */
class PricepatternsFixture extends TestFixture
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
                'price_pattern_id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'unit_time' => 'Lorem ipsum dolor ',
                'displacement_id' => 1,
                'is_deleted' => 1,
                'fee_kbn' => 1,
                'creator' => 1,
                'created_at' => '2024-08-02 08:09:19',
                'updater' => 1,
                'updated_at' => 1722586159,
            ],
        ];
        parent::init();
    }
}
