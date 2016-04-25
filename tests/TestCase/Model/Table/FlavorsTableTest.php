<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FlavorsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FlavorsTable Test Case
 */
class FlavorsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.flavors',
        'app.orders',
        'app.costumers',
        'app.messages',
        'app.products',
        'app.category_products',
        'app.categories',
        'app.flavor_products',
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
        $config = TableRegistry::exists('Flavors') ? [] : ['className' => 'App\Model\Table\FlavorsTable'];
        $this->Flavors = TableRegistry::get('Flavors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Flavors);

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
