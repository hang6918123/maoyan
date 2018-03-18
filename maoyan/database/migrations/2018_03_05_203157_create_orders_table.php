<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('orders', function(Blueprint $table)
        {
            $table->increments('id')->comment('订单id');
            $table->bigInteger('uid')->comment('用户id');
            $table->bigInteger('number')->comment('订单编号');
            $table->string('time',10)->comment('订单时间');
            $table->string('vname')->comment('影片名');
            $table->string('cinema')->comment('影院名');
            $table->string('hall')->comment('影厅');
            $table->string('seat')->comment('座位');
            $table->string('price')->comment('价格');
            $table->smallInteger('state')->comment('订单状态;0成功;1关闭;2待付款');
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
        //
         Schema::drop('orders');
    }
}
