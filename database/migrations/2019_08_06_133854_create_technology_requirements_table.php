<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTechnologyRequirementsTable extends Migration {

	public function up()
	{
		Schema::create('technology_requirements', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('required_id')->unsigned();
			$table->integer('for_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('technology_requirements');
	}
}