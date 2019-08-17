<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePromotionsTable extends Migration {

	public function up()
	{
		Schema::create('promotions', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('promotion_type_id')->unsigned();
			$table->integer('unit_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('promotions');
	}
}