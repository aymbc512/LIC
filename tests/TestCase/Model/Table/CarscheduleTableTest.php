<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CarscheduleTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CarscheduleTable Test Case
 */
class CarscheduleTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CarscheduleTable
     */
    protected $Carschedule;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Carschedule',
        'app.Stores',
        'app.Cars',
        'app.Carunavailability',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Carschedule') ? [] : ['className' => CarscheduleTable::class];
        $this->Carschedule = $this->getTableLocator()->get('Carschedule', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Carschedule);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CarscheduleTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\CarscheduleTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
