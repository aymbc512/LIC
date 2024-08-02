<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CarsFixture
 */
class CarsFixture extends TestFixture
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
                'car_id' => 1,
                'store_id' => 1,
                'displacement_id' => 1,
                'car_kbn' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'car_registration_number_chimei' => 'Lorem ipsum d',
                'car_registration_number_suji' => 1,
                'number_hiragana' => 'Lorem ip',
                'number_suji' => 'Lor',
                'vin_number' => 'Lorem ipsum dolor ',
                'maker' => 'Lorem ipsum dolor sit amet',
                'model' => 'Lorem ipsum dolor sit amet',
                'color' => 'Lorem ipsum dolor sit a',
                'transmission' => 1,
                'fuel_kbn' => 1,
                'oil_kbn' => 1,
                'is_deleted' => 1,
                'image_file_name' => 'Lorem ipsum dolor sit amet',
                'creator' => 1,
                'created_at' => '2024-08-02 08:09:51',
                'updater' => 1,
                'updated_at' => 1722586191,
            ],
        ];
        parent::init();
    }
}
