<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\User;

class PopulateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('users')->insert([
          'name' => 'Student1',
          'firstname' => 'Firstname1',
          'email' => 'student1@brown.edu',
          'password' => bcrypt('password'),
          'gender' =>'F',
        ]);
        DB::table('users')->insert([
          'name' => 'Student2',
          'firstname' => 'Firstname2',
          'email' => 'student2@brown.edu',
          'password' => bcrypt('password'),
          'gender' =>'M',
        ]);
        DB::table('users')->insert([
          'name' => 'Student3',
          'firstname' => 'Firstname3',
          'email' => 'student3@brown.edu',
          'password' => bcrypt('password'),
          'gender' =>'F',
        ]);
        DB::table('users')->insert([
          'name' => 'Student4',
          'firstname' => 'Firstname4',
          'email' => 'student4@brown.edu',
          'password' => bcrypt('password'),
          'gender' =>'M',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        User::where('email','=','student1@brown.edu')->delete();
        User::where('email','=','student2@brown.edu')->delete();
        User::where('email','=','student3@brown.edu')->delete();
        User::where('email','=','student4@brown.edu')->delete();

    }
}
