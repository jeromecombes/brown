<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddHousingInfoToLandlordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('landlords', function (Blueprint $table) {
          $table->string('lastname3')->nullable()->default(null)->after('landline2');
          $table->string('firstname3')->nullable()->default(null)->after('lastname3');
          $table->string('email3')->nullable()->default(null)->after('firstname3');
          $table->string('cellphone3')->nullable()->default(null)->after('email3');
          $table->string('landline3')->nullable()->default(null)->after('cellphone3');
          $table->string('type',100)->nullable()->default(null)->after('landline3');
          $table->string('subway',100)->nullable()->default(null)->after('type');
          $table->string('borough',10)->nullable()->default(null)->after('subway');
          $table->string('rental',100)->nullable()->default(null)->after('borough');
          $table->string('kitchen',100)->nullable()->default(null)->after('rental');
          $table->string('bathroom',100)->nullable()->default(null)->after('kitchen');
          $table->string('internet',10)->nullable()->default(null)->after('bathroom');
          $table->string('heater',100)->nullable()->default(null)->after('internet');
          $table->string('charge',100)->nullable()->default(null)->after('heater');
          $table->string('deposit',100)->nullable()->default(null)->after('charge');
          $table->text('notes')->nullable()->default(null)->after('deposit');
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
          $table->dropColumn('lastname3');
          $table->dropColumn('firstname3');
          $table->dropColumn('email3');
          $table->dropColumn('cellphone3');
          $table->dropColumn('landline3');
          $table->dropColumn('type');
          $table->dropColumn('subway');
          $table->dropColumn('borough');
          $table->dropColumn('rental');
          $table->dropColumn('kitchen');
          $table->dropColumn('bathroom');
          $table->dropColumn('internet');
          $table->dropColumn('heater');
          $table->dropColumn('charge');
          $table->dropColumn('deposit');
          $table->dropColumn('notes');
      });
    }
}
