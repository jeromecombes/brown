<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLandlordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landlords', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lastname')->default('');
            $table->string('firstname')->default('');
            $table->string('street')->default('');
            $table->string('zip')->default('');
            $table->string('city')->default('');
            $table->string('email')->default('');
            $table->string('cellphone')->default('');
            $table->string('landline')->default('');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('landlords');
    }
}
