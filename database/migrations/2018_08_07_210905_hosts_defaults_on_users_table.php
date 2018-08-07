<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HostsDefaultsOnUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('users', function (Blueprint $table) {
          $table->string('host',255)->nullable()->default(null)->change();
          $table->text('host_notes')->nullable()->default(null)->change();
          $table->text('notes1')->nullable()->default(null)->change();
          $table->text('notes2')->nullable()->default(null)->change();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
