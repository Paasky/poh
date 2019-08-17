<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTurnsTable extends Migration {

	public function up()
	{
		Schema::create('turns', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('game_id')->unsigned();
			$table->integer('turn');
		});
	}

	public function down()
	{
		Schema::drop('turns');
	}
}