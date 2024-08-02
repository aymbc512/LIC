<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UserlogsFixture
 */
class UserlogsFixture extends TestFixture
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
                'userLog_id' => 1,
                'user_id' => 1,
                'login_at' => 1722586312,
                'ip_adress' => 'Lorem ipsum dolor sit amet',
                'browser_information' => 'Lorem ipsum dolor sit amet',
                'device' => 'Lorem ipsum dolor sit amet',
                'is_deleted' => 1,
            ],
        ];
        parent::init();
    }
}
