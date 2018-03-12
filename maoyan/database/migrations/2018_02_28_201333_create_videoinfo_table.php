<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideoinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //影片评价表
        Schema::create('videoinfo', function(Blueprint $table)
        {
            $table->integer('vid')->comment('影片关联id');
            $table->integer('uid')->comment('用户id');
            $table->bigInteger('box_office')->comment('票房');
            $table->bigInteger('think')->comment('影片想看人数');
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
        Schema::drop('videoinfo');
    }
}
