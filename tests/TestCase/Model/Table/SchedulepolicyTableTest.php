<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SchedulepolicyTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SchedulepolicyTable Test Case
 */
class SchedulepolicyTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SchedulepolicyTable
     */
    protected $Schedulepolicy;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Schedulepolicy',
        'app.Stores',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Schedulepolicy') ? [] : ['className' => SchedulepolicyTable::class];
        $this->Schedulepolicy = $this->getTableLocator()->get('Schedulepolicy', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Schedulepolicy);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SchedulepolicyTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\SchedulepolicyTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
