<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Cinemas extends Model
{
    
   use SoftDeletes;
	
	public $table = 'cinemas';

	
}
