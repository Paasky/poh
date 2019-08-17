<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBiomesTable extends Migration {

	public function up()
	{
		Schema::create('biomes', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title', 255);
			$table->string('color', 7);
		});
	}

	public function down()
	{
		Schema::drop('biomes');
	}
}