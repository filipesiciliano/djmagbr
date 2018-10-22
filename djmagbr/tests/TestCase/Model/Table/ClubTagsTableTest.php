<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClubTagsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClubTagsTable Test Case
 */
class ClubTagsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ClubTagsTable
     */
    public $ClubTags;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.club_tags',
        'app.clubs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ClubTags') ? [] : ['className' => ClubTagsTable::class];
        $this->ClubTags = TableRegistry::getTableLocator()->get('ClubTags', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ClubTags);

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
