<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DjVoteTagsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DjVoteTagsTable Test Case
 */
class DjVoteTagsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DjVoteTagsTable
     */
    public $DjVoteTags;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dj_vote_tags',
        'app.tags',
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
        $config = TableRegistry::getTableLocator()->exists('DjVoteTags') ? [] : ['className' => DjVoteTagsTable::class];
        $this->DjVoteTags = TableRegistry::getTableLocator()->get('DjVoteTags', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DjVoteTags);

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
