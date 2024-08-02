<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserpermissionsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserpermissionsTable Test Case
 */
class UserpermissionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UserpermissionsTable
     */
    protected $Userpermissions;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Userpermissions',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Userpermissions') ? [] : ['className' => UserpermissionsTable::class];
        $this->Userpermissions = $this->getTableLocator()->get('Userpermissions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Userpermissions);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\UserpermissionsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
