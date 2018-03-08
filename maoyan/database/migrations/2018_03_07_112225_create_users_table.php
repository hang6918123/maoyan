<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 36);
			$table->string('password', 36)->nullable();
			$table->string('phone', 11)->unique('user_phone')->comment('用户手机号(账号)');
			$table->string('photo')->default('default.jpg')->comment('用户头像');
			$table->boolean('auth')->default(0)->comment('权限 0普通用户 1管理员');
			$table->boolean('state')->default(0)->comment('用户状态 0正常  1禁用');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
