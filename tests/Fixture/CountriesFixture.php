<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CountriesFixture
 */
class CountriesFixture extends TestFixture
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
                'id' => 1,
                'country_code' => 'Lorem ipsum dolor sit amet',
                'country_name' => 'Lorem ipsum dolor sit amet',
                'created_at' => 1695176390,
                'updated_at' => 1695176390,
            ],
        ];
        parent::init();
    }
}
