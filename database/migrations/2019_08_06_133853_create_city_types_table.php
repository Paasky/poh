<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCityTypesTable extends Migration {

	public function up()
	{
		Schema::create('city_types', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title', 255);
			$table->string('icon', 255);
		});
	}

	public function down()
	{
		Schema::drop('city_types');
	}
}