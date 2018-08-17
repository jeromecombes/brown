<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBoyGirlToLandlordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('landlords', function (Blueprint $table) {
          $table->string('boy_girl',20)->nullable()->default(null)->after('children');
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
          $table->dropColumn('boy_girl');
      });
    }
}
