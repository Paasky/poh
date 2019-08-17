<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventsTable extends Migration {

	public function up()
	{
		Schema::create('events', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('event_type_id')->unsigned();
			$table->integer('hex_id')->unsigned();
			$table->integer('ends_on_turn');
		});
	}

	public function down()
	{
		Schema::drop('events');
	}
}