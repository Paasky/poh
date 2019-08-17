<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCivilizationsTable extends Migration {

	public function up()
	{
		Schema::create('civilizations', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title', 255);
			$table->string('color1', 7);
			$table->string('color2', 7);
			$table->string('icon', 255);
		});
	}

	public function down()
	{
		Schema::drop('civilizations');
	}
}