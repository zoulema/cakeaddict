<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CategoryProductsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CategoryProductsTable Test Case
 */
class CategoryProductsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.category_products',
        'app.categories',
        'app.products',
        'app.orders',
        'app.costumers',
        'app.messages',
        'app.flavors',
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
        $config = TableRegistry::exists('CategoryProducts') ? [] : ['className' => 'App\Model\Table\CategoryProductsTable'];
        $this->CategoryProducts = TableRegistry::get('CategoryProducts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CategoryProducts);

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
