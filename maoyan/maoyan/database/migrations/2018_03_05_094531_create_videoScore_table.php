<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideoScoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   //影片评价评分表
         Schema::create('videoScore', function(Blueprint $table)
        {
            $table->integer('vid')->comment('影片关联id');
            $table->integer('uid')->comment('用户id');
            $table->bigInteger('score')->comment('影片评分');
            $table->string('content')->comment('影片评价');
            $table->bigInteger('zan')->comment('影片评价点赞');
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
        Schema::drop('VideoScore');
    }
}
