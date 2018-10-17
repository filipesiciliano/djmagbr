<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DjsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DjsTable Test Case
 */
class DjsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DjsTable
     */
    public $Djs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.djs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Djs') ? [] : ['className' => DjsTable::class];
        $this->Djs = TableRegistry::getTableLocator()->get('Djs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Djs);

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
