<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UserpermissionsFixture
 */
class UserpermissionsFixture extends TestFixture
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
                'userPrivilege_id' => 1,
                'privilege_name' => 'Lorem ipsum d',
                'is_deleted' => 1,
            ],
        ];
        parent::init();
    }
}
