<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSemestersTable extends Migration {

	public function up()
	{
		Schema::create('semesters', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('semester', 11)->unique();
		});
	}

	public function down()
	{
		Schema::drop('semesters');
	}
}