<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateImprovementsTable extends Migration {

	public function up()
	{
		Schema::create('improvements', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('improvement_type_id')->unsigned();
			$table->integer('hex_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('improvements');
	}
}