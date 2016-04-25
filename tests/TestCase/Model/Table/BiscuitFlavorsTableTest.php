<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BiscuitFlavorsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BiscuitFlavorsTable Test Case
 */
class BiscuitFlavorsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.biscuit_flavors',
        'app.biscuits',
        'app.biscuit_entremets',
        'app.entremets',
        'app.flavors',
        'app.flavor_products',
        'app.products',
        'app.category_products',
        'app.categories',
        'app.orders',
        'app.costumers',
        'app.messages',
        'app.deliveries'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('BiscuitFlavors') ? [] : ['className' => 'App\Model\Table\BiscuitFlavorsTable'];
        $this->BiscuitFlavors = TableRegistry::get('BiscuitFlavors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BiscuitFlavors);

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
