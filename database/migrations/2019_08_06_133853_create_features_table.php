<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFeaturesTable extends Migration {

	public function up()
	{
		Schema::create('features', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title', 255);
			$table->string('background', 255);
		});
	}

	public function down()
	{
		Schema::drop('features');
	}
}