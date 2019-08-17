<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUnitsTable extends Migration {

	public function up()
	{
		Schema::create('units', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('unit_type_id')->unsigned();
			$table->integer('player_id')->unsigned();
			$table->integer('hex_id')->unsigned();
			$table->integer('moves');
			$table->float('damage_percent')->default('100');
			$table->string('name', 255)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('units');
	}
}