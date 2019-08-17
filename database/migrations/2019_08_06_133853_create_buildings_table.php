<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBuildingsTable extends Migration {

	public function up()
	{
		Schema::create('buildings', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('city_id')->unsigned();
			$table->float('built_amount');
			$table->float('damage_percent')->nullable();
			$table->integer('building_type_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('buildings');
	}
}