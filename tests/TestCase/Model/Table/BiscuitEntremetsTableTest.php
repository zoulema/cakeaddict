<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BiscuitEntremetsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BiscuitEntremetsTable Test Case
 */
class BiscuitEntremetsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.biscuit_entremets',
        'app.biscuits',
        'app.entremets'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('BiscuitEntremets') ? [] : ['className' => 'App\Model\Table\BiscuitEntremetsTable'];
        $this->BiscuitEntremets = TableRegistry::get('BiscuitEntremets', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BiscuitEntremets);

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
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
