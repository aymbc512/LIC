<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * StoreholidaysFixture
 */
class StoreholidaysFixture extends TestFixture
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
                'storeHoliday_id' => 1,
                'starded_on' => '2024-08-02',
                'started_at' => '08:11:20',
                'end_on' => '2024-08-02',
                'end_at' => '08:11:20',
                'holiday_reason' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'store_id' => 1,
                'creator' => 1,
                'created_at' => '2024-08-02 08:11:20',
                'updater' => 1,
                'updated_at' => 1722586280,
                'is_deleted' => 1,
            ],
        ];
        parent::init();
    }
}
