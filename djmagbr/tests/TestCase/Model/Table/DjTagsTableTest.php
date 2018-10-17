<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DjTagsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DjTagsTable Test Case
 */
class DjTagsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DjTagsTable
     */
    public $DjTags;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dj_tags',
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
        $config = TableRegistry::getTableLocator()->exists('DjTags') ? [] : ['className' => DjTagsTable::class];
        $this->DjTags = TableRegistry::getTableLocator()->get('DjTags', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DjTags);

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
