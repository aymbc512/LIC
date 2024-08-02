<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MultipurposemasterFixture
 */
class MultipurposemasterFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'multipurposemaster';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'multi_purpose_master_id' => 1,
                'data_id' => 1,
                'detail_id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'is_deleted' => 1,
            ],
        ];
        parent::init();
    }
}
