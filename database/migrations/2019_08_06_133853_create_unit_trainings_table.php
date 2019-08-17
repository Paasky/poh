<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUnitTrainingsTable extends Migration {

	public function up()
	{
		Schema::create('unit_trainings', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('city_id')->unsigned();
			$table->integer('unit_type_id')->unsigned();
			$table->float('built_amount');
			$table->integer('player_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('unit_trainings');
	}
}