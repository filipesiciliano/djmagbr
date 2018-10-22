<?php
use Migrations\AbstractSeed;
use Cake\Auth\DefaultPasswordHasher; // Add this line

/**
 * Djs seed.
 */
class DjsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [];

        $table = $this->table('djs');
        $data  = [
   'name'     => 'Alok',
   'created' => date('Y-m-d'),
   'modified' => date('Y-m-d'),
   'deleted' => null
  ];
        $table->insert($data)->save();
    }
}
