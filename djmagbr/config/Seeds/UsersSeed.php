<?php
use Migrations\AbstractSeed;
use Cake\Auth\DefaultPasswordHasher; // Add this line

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
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

  $table = $this->table('users');
  $data  = [
   'name'     => 'Filipe Siciliano',
   'email'    => 'filipesiciliano@gmail.com',
   'password' => (new DefaultPasswordHasher)->hash(12345)
   
  ];
  $table->insert($data)->save();
 }
}
