<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SchedulepolicyFixture
 */
class SchedulepolicyFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'schedulepolicy';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'schedule_id' => 1,
                'open_at' => '08:10:45',
                'closed_at' => '08:10:45',
                'store_id' => 1,
                'days_of_the_week' => 'L',
                'available_on' => '2024-08-02',
                'unavairable_on' => '2024-08-02',
                'creator' => 1,
                'created_at' => '2024-08-02 08:10:45',
                'updater' => 1,
                'updated_at' => 1722586245,
                'is_deleted' => 1,
            ],
        ];
        parent::init();
    }
}
