<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DogsFixture
 */
class DogsFixture extends TestFixture
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
                'microchip' => 1,
                'owner_id' => 1,
                'breed_id' => 1,
                'mom_chip' => 1,
                'dad_chip' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'gender' => 'L',
                'weight' => 1,
                'birthday' => '2022-10-14',
                'created' => '2022-10-14 22:37:54',
                'modified' => '2022-10-14 22:37:54',
            ],
        ];
        parent::init();
    }
}
