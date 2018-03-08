<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCinemasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cinemas', function(Blueprint $table)
		{
			$table->increments('id')->comment('影院id');
			$table->text('address', 65535)->comment('影院地址');
			$table->string('phone', 32)->comment('影院电话');
			$table->string('cinema_name')->unique('cinema_name')->comment('影院名称');
			$table->string('cinema_movie')->comment('影厅第一个逗号前面为普通厅数量，后面为特殊厅类型');
			$table->boolean('status')->default(1)->comment('0,维护中1，正常状态');
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
		Schema::drop('cinemas');
	}

}
