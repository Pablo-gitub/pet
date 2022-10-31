<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClinicsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClinicsTable Test Case
 */
class ClinicsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ClinicsTable
     */
    protected $Clinics;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Clinics',
        'app.Transfers',
        'app.Visits',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Clinics') ? [] : ['className' => ClinicsTable::class];
        $this->Clinics = $this->getTableLocator()->get('Clinics', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Clinics);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ClinicsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
