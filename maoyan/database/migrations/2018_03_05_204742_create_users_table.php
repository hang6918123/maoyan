<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('users', function(Blueprint $table)
        {
            $table->increments('id')->comment('用户id');
            $table->string('name',36)->comment('用户名');
            $table->string('phone',11)->comment('手机号');
            $table->string('photo',255)->default('default.jpg')->comment('手机号');
            $table->string('password',255)->comment('密码');
            $table->string('auth',4)->comment('权限,0普通,1管理');
            $table->string('state',4)->comment('状态,0可用,1禁用');
            $table->string('email',255)->comment('邮箱');
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
        //
        Schema::drop('users');
    }
}
