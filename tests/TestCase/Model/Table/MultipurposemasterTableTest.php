<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MultipurposemasterTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MultipurposemasterTable Test Case
 */
class MultipurposemasterTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MultipurposemasterTable
     */
    protected $Multipurposemaster;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Multipurposemaster',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Multipurposemaster') ? [] : ['className' => MultipurposemasterTable::class];
        $this->Multipurposemaster = $this->getTableLocator()->get('Multipurposemaster', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Multipurposemaster);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MultipurposemasterTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
