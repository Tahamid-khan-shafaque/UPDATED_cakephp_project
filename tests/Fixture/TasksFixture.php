<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TasksFixture
 */
class TasksFixture extends TestFixture
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
                'user_name' => 'Lorem ipsum dolor sit amet',
                'category_id' => 1,
                'status' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-09-19 07:16:45',
            ],
        ];
        parent::init();
    }
}
