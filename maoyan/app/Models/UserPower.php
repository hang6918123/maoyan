<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPower extends Model
{
    public $table = 'user_power';
    public $guarded = [];

    public function power()
    {
    	return $this->belongsToMany('App\Models\Power','power_id','pid');
    }
}
