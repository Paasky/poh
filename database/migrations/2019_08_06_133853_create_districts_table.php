<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDistrictsTable extends Migration {

	public function up()
	{
		Schema::create('districts', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('district_type_id')->unsigned();
			$table->integer('hex_id')->unsigned();
			$table->float('built_amount');
			$table->float('damage_percent')->default('0');
			$table->string('name', 255)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('districts');
	}
}