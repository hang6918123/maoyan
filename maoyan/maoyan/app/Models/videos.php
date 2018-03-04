<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use  Illuminate\Database\Eloquent\SoftDeletes;


class videos extends Model
{
	use SoftDeletes;
    public $table = 'videos';
}
