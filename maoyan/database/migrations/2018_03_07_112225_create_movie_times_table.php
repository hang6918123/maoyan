<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMovieTimesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('movie_times', function(Blueprint $table)
		{
			$table->increments('id')->comment('影厅表');
			$table->string('movies_type')->nullable()->comment('影厅类型及普通厅数量 普通厅数量格式“3-1”');
			$table->string('movies_common')->nullable()->comment('普通厅正在播放的电影');
			$table->string('movies_special')->nullable()->comment('特殊厅正在播放的电影');
			$table->string('movies_common_time')->nullable()->comment('普通厅电影的播放时段');
			$table->string('movies_special_time')->nullable()->comment('特殊厅的播放时段');
			$table->string('movies_sellingprice')->nullable()->comment('影片的单价');
			$table->integer('cid')->comment('存父id');
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
		Schema::drop('movie_times');
	}

}
