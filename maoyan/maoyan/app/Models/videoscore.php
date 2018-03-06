<?php

namespace App\\Models;

use Illuminate\Database\Eloquent\Model;

class videoscore extends Model
{
    //
    public $table = 'videoscore';

    // 多条评论属于一个用户
    public function user()
    {
        return $this->belongsTo('App\User','uid');
    }

    // 多条电影属于一个电影
    public function video()
    {
    	return $this->belongsTo('App\Models\videos','vid');
    }
}
