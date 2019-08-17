<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTerrainsTable extends Migration {

	public function up()
	{
		Schema::create('terrains', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title', 255);
			$table->string('background', 255);
			$table->integer('biome_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('terrains');
	}
}