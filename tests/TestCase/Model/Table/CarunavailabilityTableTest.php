<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CarunavailabilityTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CarunavailabilityTable Test Case
 */
class CarunavailabilityTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CarunavailabilityTable
     */
    protected $Carunavailability;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Carunavailability',
        'app.Cars',
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
        $config = $this->getTableLocator()->exists('Carunavailability') ? [] : ['className' => CarunavailabilityTable::class];
        $this->Carunavailability = $this->getTableLocator()->get('Carunavailability', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Carunavailability);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CarunavailabilityTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\CarunavailabilityTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
