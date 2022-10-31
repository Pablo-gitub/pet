<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TransfersFixture
 */
class TransfersFixture extends TestFixture
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
                'date' => '2022-10-14',
                'seller_id' => 1,
                'buyer_id' => 1,
                'dog_id' => 1,
                'clinic_id' => 1,
                'fiscalCode' => 'Lorem ipsum do',
                'prize' => 1,
                'created' => '2022-10-14 22:37:45',
                'modified' => '2022-10-14 22:37:45',
            ],
        ];
        parent::init();
    }
}
