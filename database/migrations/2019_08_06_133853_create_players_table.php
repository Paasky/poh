<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlayersTable extends Migration {

	public function up()
	{
		Schema::create('players', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('civilization_id')->unsigned();
			$table->integer('game_id')->unsigned();
			$table->integer('user_id')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('players');
	}
}