<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use  Illuminate\Database\Eloquent\SoftDeletes;


class videos extends Model
{
	use SoftDeletes;
    public $table = 'videos';
    
    //影片表对应评价表 一对多关系
    public function videoscore(){

    	return $this->hasMany('App\Models\videoscore','uid');
    }

}
