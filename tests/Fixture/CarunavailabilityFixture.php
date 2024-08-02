<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CarunavailabilityFixture
 */
class CarunavailabilityFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'carunavailability';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'carUnavairable_id' => 1,
                'started_on' => '2024-08-02',
                'started_at' => '08:11:27',
                'end_on' => '2024-08-02',
                'end_at' => '08:11:27',
                'car_id' => 1,
                'store_id' => 1,
                'unavailable_reason' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'creator' => 1,
                'created_at' => '2024-08-02 08:11:27',
                'updater' => 1,
                'updated_at' => 1722586287,
                'is_deleted' => 1,
            ],
        ];
        parent::init();
    }
}
