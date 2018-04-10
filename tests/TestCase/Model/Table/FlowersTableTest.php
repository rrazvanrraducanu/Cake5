<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FlowersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FlowersTable Test Case
 */
class FlowersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FlowersTable
     */
    public $Flowers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.flowers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Flowers') ? [] : ['className' => FlowersTable::class];
        $this->Flowers = TableRegistry::get('Flowers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Flowers);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
