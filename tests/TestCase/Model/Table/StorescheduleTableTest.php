<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StorescheduleTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StorescheduleTable Test Case
 */
class StorescheduleTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\StorescheduleTable
     */
    protected $Storeschedule;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Storeschedule',
        'app.Stores',
        'app.Storeholidays',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Storeschedule') ? [] : ['className' => StorescheduleTable::class];
        $this->Storeschedule = $this->getTableLocator()->get('Storeschedule', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Storeschedule);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\StorescheduleTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\StorescheduleTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
