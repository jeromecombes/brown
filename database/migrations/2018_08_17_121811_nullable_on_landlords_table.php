<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NullableOnLandlordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('landlords', function (Blueprint $table) {
          $table->string('lastname',255)->nullable()->default(null)->change();
          $table->string('firstname',255)->nullable()->default(null)->change();
          $table->string('street',255)->nullable()->default(null)->change();
          $table->string('zip',20)->nullable()->default(null)->change();
          $table->string('city',100)->nullable()->default(null)->change();
          $table->string('email',255)->nullable()->default(null)->change();
          $table->string('cellphone',20)->nullable()->default(null)->change();
          $table->string('landline',20)->nullable()->default(null)->change();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('landlords', function (Blueprint $table) {
          $table->string('lastname',255)->nullable(false)->default('')->change();
          $table->string('firstname',255)->nullable(false)->default('')->change();
          $table->string('street',255)->nullable(false)->default('')->change();
          $table->string('zip',255)->nullable(false)->default('')->change();
          $table->string('city',255)->nullable(false)->default('')->change();
          $table->string('email',255)->nullable(false)->default('')->change();
          $table->string('cellphone',255)->nullable(false)->default('')->change();
          $table->string('landline',255)->nullable(false)->default('')->change();
      });
    }
}
