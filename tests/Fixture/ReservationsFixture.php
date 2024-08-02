<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ReservationsFixture
 */
class ReservationsFixture extends TestFixture
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
                'reservationManegement_id' => 1,
                'customer_id' => 1,
                'vehicle_id' => 1,
                'reservation_store_id' => 1,
                'reservation_start_date' => '2024-08-02',
                'reservation_start_time' => '08:10:05',
                'scheduled_return_date' => '2024-08-02',
                'scheduled_return_time' => '08:10:05',
                'scheduled_usage_time' => '08:10:05',
                'status' => 'Lorem ',
                'childsheet_kbn' => 1,
                'etccard_rental' => 1,
                'delivery_service' => 1,
                'prefecture' => 'Lor',
                'municipalities' => 'Lorem ipsum dolor sit amet',
                'adress_below' => 'Lorem ipsum dolor sit amet',
                'compensation' => 1,
                'total_basic_fee' => 1,
                'total_optional_fee' => 1,
                'reservation_total_amount' => 1,
                'point_usage' => 1,
                'creator' => 1,
                'created_at' => '2024-08-02 08:10:05',
                'updater' => 1,
                'updated_at' => 1722586205,
                'is_deleted' => 1,
            ],
        ];
        parent::init();
    }
}
