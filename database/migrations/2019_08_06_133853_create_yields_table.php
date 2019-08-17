<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateYieldsTable extends Migration {

	public function up()
	{
		Schema::create('yields', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('model_id');
			$table->string('model_class', 255);
			$table->integer('biome_id')->unsigned()->nullable();
			$table->integer('terrain_id')->unsigned()->nullable();
			$table->integer('landscape_id')->unsigned()->nullable();
			$table->integer('feature_id')->unsigned()->nullable();
			$table->integer('resource_id')->unsigned()->nullable();
			$table->float('food')->default('0');
			$table->float('gold')->default('0');
			$table->float('production')->default('0');
			$table->float('culture')->default('0');
			$table->float('research')->default('0');
			$table->float('religion')->default('0');
			$table->float('health')->default('0');
			$table->float('order')->default('0');
			$table->float('corruption')->default('0');
			$table->float('espionage')->default('0');
			$table->integer('trade_routes')->default('0');
			$table->float('trade_gold')->default('0');
			$table->float('trade_research')->default('0');
			$table->float('trade_espionage')->default('0');
			$table->tinyInteger('trade_values_affect_land')->unsigned()->default('0');
			$table->tinyInteger('trade_values_affect_water')->unsigned()->default('0');
			$table->tinyInteger('trade_values_affect_air')->unsigned()->default('0');
			$table->tinyInteger('is_local')->unsigned()->default('0');
			$table->tinyInteger('is_percent')->unsigned()->default('0');
		});
	}

	public function down()
	{
		Schema::drop('yields');
	}
}
