<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OwnersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OwnersTable Test Case
 */
class OwnersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OwnersTable
     */
    protected $Owners;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Owners',
        'app.Dogs',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Owners') ? [] : ['className' => OwnersTable::class];
        $this->Owners = $this->getTableLocator()->get('Owners', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Owners);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\OwnersTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
