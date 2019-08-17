<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBuildingRequirementsTable extends Migration {

	public function up()
	{
		Schema::create('building_requirements', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('required_id')->unsigned();
			$table->integer('for_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('building_requirements');
	}
}