<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSecondaryContactToLandlordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('landlords', function (Blueprint $table) {
          $table->string('lastname2')->nullable()->default(null)->after('landline');
          $table->string('firstname2')->nullable()->default(null)->after('lastname2');
          $table->string('email2')->nullable()->default(null)->after('firstname2');
          $table->string('cellphone2')->nullable()->default(null)->after('email2');
          $table->string('landline2')->nullable()->default(null)->after('cellphone2');
      });

      Schema::dropIfExists('landlords_contacts');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('landlords', function (Blueprint $table) {
          $table->dropColumn('lastname2');
          $table->dropColumn('firstname2');
          $table->dropColumn('email2');
          $table->dropColumn('cellphone2');
          $table->dropColumn('landline2');
      });

      Schema::create('landlords_contacts', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('landlord_id')->default(0);
          $table->string('lastname')->default('');
          $table->string('firstname')->default('');
          $table->string('email')->default('');
          $table->string('cellphone')->default('');
          $table->string('landline')->default('');
          $table->timestamps();
          $table->softDeletes();
      });
    }
}
