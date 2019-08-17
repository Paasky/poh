<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventTypesTable extends Migration {

	public function up()
	{
		Schema::create('event_types', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title', 255);
			$table->integer('turns');
			$table->string('icon', 255);
		});
	}

	public function down()
	{
		Schema::drop('event_types');
	}
}