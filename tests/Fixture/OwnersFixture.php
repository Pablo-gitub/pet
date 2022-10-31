<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OwnersFixture
 */
class OwnersFixture extends TestFixture
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
                'name' => 'Lorem ipsum dolor sit amet',
                'lastname' => 'Lorem ipsum dolor sit amet',
                'fiscalCode' => 'Lorem ipsum do',
                'created' => '2022-10-14 22:38:29',
                'modified' => '2022-10-14 22:38:29',
            ],
        ];
        parent::init();
    }
}
