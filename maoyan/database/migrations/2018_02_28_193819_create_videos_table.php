<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         //影片表数据库迁移
        Schema::create('videos',function(Blueprint $table){
            $table -> increments('id')->comment('影片id');     //影片id
            $table -> string('name')->comment('影片名');       //影片名
            $table -> string('type')->comment('影片类型');       //影片类型
            $table -> string('region')->comment('影片拍摄地');     //影片拍摄地
            $table -> string('years')->comment('影片上映时间');     //影片上映时间
            $table -> string('language')->comment('影片语言');     //影片语言
            $table -> string('language')->comment('影片时长');     //影片语言
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
    }
}
