<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUnitTypesTable extends Migration {

	public function up()
	{
		Schema::create('unit_types', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title', 255);
			$table->string('icon', 255);
			$table->integer('cost');
		});
	}

	public function down()
	{
		Schema::drop('unit_types');
	}
}