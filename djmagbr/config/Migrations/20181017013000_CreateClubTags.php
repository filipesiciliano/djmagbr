<?php
use Migrations\AbstractMigration;

class CreateClubTags extends AbstractMigration
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
        $table = $this->table('club_tags');
        
        $table->addColumn('tag_id', 'integer', [
            'default' => null,
            'limit' => 4,
            'null' => false,
        ])->addIndex(['tag_id']);


        $table->addColumn('club_id', 'integer', [
            'default' => null,
            'limit' => 255,
            'null' => false,
            
        ]);
        
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
