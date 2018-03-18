<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    //
    public $table = 'orders';

    // 一条订单属于多个用户
     public function user()
    {
        return $this->belongsTo('App\User','uid');
    }

    public function video()
    {
    	return $this->hasOne('App\Models\videos','id','vid');
    }
}
