<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //
    public $table = 'movie_times';
    public $guarded = [];
    public function movie()
	{
		 return $this->belongTo('App\Models\Cinemas','cinemas_id'); 
	}
}
