<?php
use Migrations\AbstractMigration;

class AddForeignKeyDjTag extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function up()
    {
        $table = $this->table('dj_tags');
        $table->addIndex(['dj_id']);
        $table->update();
    }
}
