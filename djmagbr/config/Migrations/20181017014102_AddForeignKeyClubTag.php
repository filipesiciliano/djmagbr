<?php
use Migrations\AbstractMigration;

class AddForeignKeyClubTag extends AbstractMigration
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
        $table->addIndex(['club_id']);
        $table->update();
    }
}
