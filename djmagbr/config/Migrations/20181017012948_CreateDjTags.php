<?php
use Migrations\AbstractMigration;

class CreateDjTags extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('dj_tags');
        
        $table->addColumn('tag_id', 'integer', [
            'default' => null,
            'limit' => 4,
            'null' => false,
        ])->addIndex(['tag_id']);

        $table->addColumn('dj_id', 'integer', [
            'default' => null,
            'limit' => 4,
            'null' => false,
        ])->addIndex(['dj_id']);

        $table->addColumn('section', 'integer', [
            'default' => null,
            'limit' => 4,
            'null' => false,
        ])->addIndex(['section']);
        
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
