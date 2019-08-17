<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLandscapesTable extends Migration {

	public function up()
	{
		Schema::create('landscapes', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title', 255);
			$table->integer('height');
		});
	}

	public function down()
	{
		Schema::drop('landscapes');
	}
}