<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SalesmanagementFixture
 */
class SalesmanagementFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'salesmanagement';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'salesManegement_id' => 1,
                'reservation_id' => 1,
                'vehicle_id' => 1,
                'reservation_store_id' => 1,
                'status_kbn' => 1,
                'start_on' => '2024-08-02',
                'start_at' => '08:11:35',
                'end_on' => '2024-08-02',
                'end_at' => '08:11:35',
                'usage_time' => '08:11:35',
                'late_time' => '08:11:35',
                'option_amount' => 1,
                'other_additional_fee' => 1,
                'other_additional_fee_contents' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'reduced_fee' => 1,
                'reduced_fee_contents' => 1,
                'basic_fee' => 1,
                'late_fee' => 1,
                'amount_of_points_used' => 1,
                'reward_points' => 1,
                'total_amount' => 1,
                'accounting_amount' => 1,
                'commission' => 1,
                'amount_paid_to_store' => 1,
                'liquidated' => 1,
                'creator' => 1,
                'created_at' => '2024-08-02 08:11:35',
                'updater' => 1,
                'updated_at' => 1722586295,
                'is_deleted' => 1,
            ],
        ];
        parent::init();
    }
}
