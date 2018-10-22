<?php
use Migrations\AbstractSeed;
use Cake\Auth\DefaultPasswordHasher; // Add this line

/**
 * Tags seed.
 */
class TagsSeed extends AbstractSeed
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

  $table = $this->table('tags');
  $data  = [
   'name'     => 'Alog',
   'created' => date('Y-m-d H:m:s'),
   'modified' => date('Y-m-d H:m:s')
    ];
  $table->insert($data)->save();
 }
}
