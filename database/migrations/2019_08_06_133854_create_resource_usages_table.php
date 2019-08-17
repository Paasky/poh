<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateResourceUsagesTable extends Migration {

	public function up()
	{
		Schema::create('resource_usages', function(Blueprint $table) {
			$table->increments('id');
			$table->string('model_class', 255);
			$table->integer('model_id');
			$table->integer('consume_resource_id')->unsigned()->nullable();
			$table->integer('create_resource_id')->unsigned()->nullable();
			$table->integer('require_resource_id')->unsigned()->nullable();
			$table->integer('consume_count')->default('0');
			$table->integer('create_count')->default('0');
			$table->tinyInteger('is_local')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('resource_usages');
	}
}