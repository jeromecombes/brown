<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSmokersToLandlordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('landlords', function (Blueprint $table) {
          $table->string('smoker')->nullable()->default(null)->after('deposit');
          $table->string('pets')->nullable()->default(null)->after('smoker');
          $table->string('children')->nullable()->default(null)->after('pets');
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
          $table->dropColumn('smoker');
          $table->dropColumn('pets');
          $table->dropColumn('children');
      });
    }
}
