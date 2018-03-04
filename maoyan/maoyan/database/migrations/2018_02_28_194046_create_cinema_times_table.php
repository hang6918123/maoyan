<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCinemaTimesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cinema_times', function(Blueprint $table)
		{
			$table->increments('id')->comment('放影时间表id');
			$table->string('watch_time')->comment('观影时间');
			$table->string('show_time')->comment('放映时间');
			$table->string('lang', 64)->comment('语言');
			$table->string('shou_from', 64)->comment('放映厅');
			$table->boolean('sellingprice')->comment('影片价格');
			$table->timestamps();
            $table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cinema_times');
	}

}
