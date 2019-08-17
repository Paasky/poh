<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlayerTurnsTable extends Migration {

	public function up()
	{
		Schema::create('player_turns', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('turn_id')->unsigned();
			$table->integer('player_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('player_turns');
	}
}