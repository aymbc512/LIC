<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * StoresFixture
 */
class StoresFixture extends TestFixture
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
                'store_id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'phone_number' => 'Lorem ipsum d',
                'email' => 'Lorem ipsum dolor sit amet',
                'post_cd' => 'Lorem ipsum d',
                'prefectures' => 'Lor',
                'municipalities' => 'Lorem ipsum dolor sit amet',
                'adress_below' => 'Lorem ipsum dolor sit amet',
                'officer_name' => 'Lorem ipsum dolor sit amet',
                'officer_phone_number' => 'Lorem ipsum d',
                'open_at' => '07:55:54',
                'close_at' => '07:55:54',
                'contract_start_at' => '2024-08-02',
                'contract_end_at' => '2024-08-02',
                'delivery_service' => 1,
                'management_company' => 1,
                'remarks' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'creator' => 1,
                'created_at' => '2024-08-02 07:55:54',
                'updater' => 1,
                'updated_at' => 1722585354,
                'is_deleted' => 1,
            ],
        ];
        parent::init();
    }
}
