<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PricepatternsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PricepatternsTable Test Case
 */
class PricepatternsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PricepatternsTable
     */
    protected $Pricepatterns;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Pricepatterns',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Pricepatterns') ? [] : ['className' => PricepatternsTable::class];
        $this->Pricepatterns = $this->getTableLocator()->get('Pricepatterns', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Pricepatterns);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PricepatternsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
