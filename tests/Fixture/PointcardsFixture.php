<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PointcardsFixture
 */
class PointcardsFixture extends TestFixture
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
                'pointCard_id' => 1,
                'user_id' => 1,
                'grant_point' => 1,
                'usage_point' => 1,
                'accumulated_point' => 1,
                'created_at' => 1722586322,
                'is_deleted' => 1,
            ],
        ];
        parent::init();
    }
}
