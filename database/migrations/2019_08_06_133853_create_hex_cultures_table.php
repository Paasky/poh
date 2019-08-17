<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHexCulturesTable extends Migration {

	public function up()
	{
		Schema::create('hex_cultures', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('player_id')->unsigned();
			$table->integer('hex_id')->unsigned();
			$table->float('amount');
		});
	}

	public function down()
	{
		Schema::drop('hex_cultures');
	}
}