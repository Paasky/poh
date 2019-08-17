<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePromotionTypesTable extends Migration {

	public function up()
	{
		Schema::create('promotion_types', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title', 255);
			$table->string('icon', 255);
			$table->integer('technology_id')->unsigned()->nullable();
		});
	}

	public function down()
	{
		Schema::drop('promotion_types');
	}
}