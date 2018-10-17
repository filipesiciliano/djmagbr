<?php
use Migrations\AbstractMigration;

class AddDeletedToDjsTable extends AbstractMigration
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
        $table = $this->table('djs');
        $table->addColumn('deleted', 'datetime');
        $table->update();
    }
}
