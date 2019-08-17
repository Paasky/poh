<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKnownTechnologiesTable extends Migration {

	public function up()
	{
		Schema::create('known_technologies', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('technology_id')->unsigned();
			$table->integer('player_id')->unsigned();
			$table->integer('percent');
		});
	}

	public function down()
	{
		Schema::drop('known_technologies');
	}
}