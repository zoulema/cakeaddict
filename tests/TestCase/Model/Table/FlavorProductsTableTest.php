<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FlavorProductsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FlavorProductsTable Test Case
 */
class FlavorProductsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.flavor_products',
        'app.flavors',
        'app.orders',
        'app.costumers',
        'app.messages',
        'app.products',
        'app.category_products',
        'app.categories',
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
        $config = TableRegistry::exists('FlavorProducts') ? [] : ['className' => 'App\Model\Table\FlavorProductsTable'];
        $this->FlavorProducts = TableRegistry::get('FlavorProducts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FlavorProducts);

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
