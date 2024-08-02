<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CarscheduleFixture
 */
class CarscheduleFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'carschedule';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'carSchedule_id' => 1,
                'date' => '2024-08-02',
                'time' => '08:11:03',
                'is_unavailable' => 1,
                'unavailable_reason' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'store_id' => 1,
                'car_id' => 1,
                'carUnavairable_id' => 1,
                'is_deleted' => 1,
            ],
        ];
        parent::init();
    }
}
