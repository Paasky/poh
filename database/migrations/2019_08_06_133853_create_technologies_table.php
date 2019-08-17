<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTechnologiesTable extends Migration {

	public function up()
	{
		Schema::create('technologies', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title', 255);
			$table->string('icon', 255);
			$table->integer('cost');
		});
	}

	public function down()
	{
		Schema::drop('technologies');
	}
}