<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPower extends Model
{
    public $table = 'user_power';

    public $primaryKey = 'uid';

    public $guarded = [];

    public function power()
    {

    	return $this->hasMany('App\Models\Power','pid','power_id');
    	
    }
}
