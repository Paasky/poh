<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActionsTable extends Migration {

	public function up()
	{
		Schema::create('actions', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('player_turn_id')->unsigned();
			$table->integer('model_id');
			$table->string('model_class', 255);
			$table->longText('data');
			$table->string('type', 255);
		});
	}

	public function down()
	{
		Schema::drop('actions');
	}
}