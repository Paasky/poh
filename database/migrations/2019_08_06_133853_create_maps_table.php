<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMapsTable extends Migration {

	public function up()
	{
		Schema::create('maps', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->tinyInteger('is_scenario');
			$table->string('title', 255);
		});
	}

	public function down()
	{
		Schema::drop('maps');
	}
}