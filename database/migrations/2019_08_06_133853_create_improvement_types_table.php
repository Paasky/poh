<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateImprovementTypesTable extends Migration {

	public function up()
	{
		Schema::create('improvement_types', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title', 255);
			$table->string('icon', 255);
			$table->integer('cost');
			$table->integer('technology_id')->unsigned()->nullable();
		});
	}

	public function down()
	{
		Schema::drop('improvement_types');
	}
}