<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateResourcesTable extends Migration {

	public function up()
	{
		Schema::create('resources', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title', 255);
			$table->string('icon', 255);
		});
	}

	public function down()
	{
		Schema::drop('resources');
	}
}