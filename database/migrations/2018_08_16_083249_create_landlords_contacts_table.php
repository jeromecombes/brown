<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLandlordsContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
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

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('landlords_contacts');
    }
}
