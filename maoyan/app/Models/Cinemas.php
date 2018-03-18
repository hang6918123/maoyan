<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Cinemas extends Model
{
    
   use SoftDeletes;
	
	public $table = 'cinemas';

//影院对影厅关系1对多
	public function moviess()
	{
		 return $this->hasMany('App\Models\Movie','cinemas_id'); 
	}

//影院对电影关系多对多
	public function cinemas_videos()
	{
		 
		return $this->belongsToMany('App\Models\videos','cinemas_videos','cinemas_id','videos_id');
	}
	
}