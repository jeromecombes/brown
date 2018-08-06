<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\User;

class AddColumnSemesterToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('users', function (Blueprint $table) {
          $table->integer('semester1')->default(0)->after('photo');
          $table->integer('semester2')->default(0)->after('semester1');
      });
      
      User::where('email','=','student1@brown.edu')->update(['semester1' => 4]);
      User::where('email','=','student2@brown.edu')->update(['semester1' => 4]);
      User::where('email','=','student3@brown.edu')->update(['semester1' => 4]);
      User::where('email','=','student4@brown.edu')->update(['semester1' => 4]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('users', function (Blueprint $table) {
          $table->dropColumn('semester1');
          $table->dropColumn('semester2');
      });
    }
}
