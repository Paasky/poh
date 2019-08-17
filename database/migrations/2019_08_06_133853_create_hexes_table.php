<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHexesTable extends Migration {

	public function up()
	{
		Schema::create('hexes', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('coords', 255);
			$table->integer('map_id')->unsigned()->index();
			$table->integer('biome_id')->unsigned();
			$table->integer('terrain_id')->unsigned();
			$table->integer('landscape_id')->unsigned();
			$table->integer('feature_id')->unsigned()->nullable();
			$table->integer('resource_id')->unsigned();
			$table->integer('resource_amount');
			$table->integer('player_id')->unsigned()->nullable();
		});
	}

	public function down()
	{
		Schema::drop('hexes');
	}
}