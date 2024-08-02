<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SalesmanagementTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SalesmanagementTable Test Case
 */
class SalesmanagementTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SalesmanagementTable
     */
    protected $Salesmanagement;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Salesmanagement',
        'app.Reservations',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Salesmanagement') ? [] : ['className' => SalesmanagementTable::class];
        $this->Salesmanagement = $this->getTableLocator()->get('Salesmanagement', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Salesmanagement);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SalesmanagementTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\SalesmanagementTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
