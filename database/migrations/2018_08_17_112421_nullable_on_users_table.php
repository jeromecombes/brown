<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NullableOnUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('users', function (Blueprint $table) {
          $table->string('name',255)->nullable()->default(null)->change();
          $table->string('firstname',255)->nullable()->default(null)->change();
          $table->string('gender',20)->nullable()->default(null)->change();
          $table->string('term',20)->nullable()->default(null)->change();
          $table->string('student_id',20)->nullable()->default(null)->change();
          $table->string('concentration',255)->nullable()->default(null)->change();
          $table->string('university',255)->nullable()->default(null)->change();
          $table->string('status',20)->nullable()->default(null)->change();
          $table->string('deposit',100)->nullable()->default(null)->change();
          $table->string('sa_approval',100)->nullable()->default(null)->change();
          $table->string('cf_registration',100)->nullable()->default(null)->change();
          $table->string('place_of_birth',255)->nullable()->default(null)->change();
          $table->string('citizenship',255)->nullable()->default(null)->change();
          $table->string('photo',255)->nullable()->default(null)->change();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('users', function (Blueprint $table) {
          $table->string('name',255)->nullable(false)->default("")->change();
          $table->string('firstname',255)->nullable(false)->default("")->change();
          $table->string('gender',20)->nullable(false)->default("")->change();
          $table->string('term',20)->nullable(false)->default("")->change();
          $table->string('student_id',20)->nullable(false)->default("")->change();
          $table->string('concentration',255)->nullable(false)->default("")->change();
          $table->string('university',255)->nullable(false)->default("")->change();
          $table->string('status',20)->nullable(false)->default("")->change();
          $table->string('deposit',100)->nullable(false)->default("")->change();
          $table->string('sa_approval',100)->nullable(false)->default("")->change();
          $table->string('cf_registration',100)->nullable(false)->default("")->change();
          $table->string('place_of_birth',255)->nullable(false)->default("")->change();
          $table->string('citizenship',255)->nullable(false)->default("")->change();
          $table->string('photo',255)->nullable(false)->default("")->change();
      });
    }
}
