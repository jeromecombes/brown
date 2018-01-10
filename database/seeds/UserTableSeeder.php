<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        
        DB::table('users')->insert([
          'name' => 'Combes',
          'firstname' => 'Jérôme',
          'email' => 'jerome@planningbibliO.fr',
          'password' => bcrypt('password'),
          'admin' => 1,
          'gender' =>'M',
          'dob' => '1982-05-02',
          'place_of_birth' => 'Nemours, France',
          'citizenship' => 'French',
        ]);

        DB::table('users')->insert([
          'name' => 'Reeser',
          'firstname' => 'Erin',
          'email' => 'erin_reeser@brown.edu',
          'password' => bcrypt('password'),
          'admin' => 1,
          'gender' =>'F',
        ]);

        DB::table('users')->insert([
          'name' => 'Toux',
          'firstname' => 'Sylvie',
          'email' => 'sylvie_toux@brown.edu',
          'password' => bcrypt('password'),
          'admin' => 1,
          'gender' =>'F',
        ]);

    }
}
