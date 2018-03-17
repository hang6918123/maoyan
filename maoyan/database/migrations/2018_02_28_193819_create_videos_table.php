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
            $table -> increments('id')->comment('影片id');
            $table -> string('name',64)->comment('影片名');
            $table -> string('type',64)->comment('影片类型');
            $table -> string('region',64)->comment('影片拍摄地');
            $table -> string('years',64)->comment('影片上映时间');
            $table -> string('photo',255)->comment('影片封面');
            $table -> string('content',255)->comment('影片简介');
            $table -> string('language',64)->comment('影片语言');
            $table -> bigInteger('time')->comment('影片时长');
<<<<<<< HEAD
            $table->bigInteger('state')->comment('影片状态');
=======
            $table->bigInteger('box_office')->comment('票房');
            $table->bigInteger('state')->comment('影片状态;0:停止售票;1:售票;2:预售;');
>>>>>>> 8e4d54f7c7edf8bbc2afb3cfa6c21ae519842965
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
        Schema::drop('videos');
    }
}
