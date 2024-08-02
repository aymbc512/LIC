<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
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
                'user_id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'furigana' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'passward' => 'Lorem ipsum dolor ',
                'post_cd' => 'Lorem',
                'prefecture' => 'Lor',
                'municipalities' => 'Lorem ipsum dolor sit amet',
                'adress_below' => 'Lorem ipsum dolor sit amet',
                'phone_number' => 'Lorem ipsum d',
                'register_at' => 1722585355,
                'update_at' => 1722585355,
                'privilege' => 'Lorem ipsu',
                'store_id' => 1,
                'user_status' => 'Lor',
                'usage_term' => 1,
            ],
        ];
        parent::init();
    }
}
