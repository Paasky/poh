<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCitiesTable extends Migration {

	public function up()
	{
		Schema::create('cities', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('city_type_id')->unsigned();
			$table->integer('player_id')->unsigned()->nullable();
			$table->integer('hex_id')->unsigned();
			$table->string('title', 255);
		});
	}

	public function down()
	{
		Schema::drop('cities');
	}
}