<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGamesTable extends Migration {

	public function up()
	{
		Schema::create('games', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('map_id')->unsigned();
			$table->string('title', 255);
		});
	}

	public function down()
	{
		Schema::drop('games');
	}
}