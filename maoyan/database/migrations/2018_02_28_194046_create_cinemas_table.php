<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
			$table->string('cinema_name')->comment('影院名称');
			$table->integer('cinema_id')->comment('影院关联id');
			$table->dateTime('created_at')->default('0000-00-00 00:00:00')->comment('影院添加时间');
			$table->dateTime('update_at')->default('0000-00-00 00:00:00')->comment('影院修改时间');
			$table->dateTime('delete_at')->default('0000-00-00 00:00:00')->comment('影院删除时间');
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
