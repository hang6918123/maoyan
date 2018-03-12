<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home/index');
});

Route::controller('login','Home\LoginController');

Route::group(['middleware'=>'homeLogin'],function(){
	Route::controller('user','Home\UserController');
});

Route::controller('admin/user','Admin\UserController');
Route::controller('admin/auth','Admin\AuthController');
Route::resource('admin/news','Admin\NewsController');


Route::controller('admin/cineman','admin\CinemanController');
Route::controller('admin/movie','admin\MovieController');
Route::controller('admin/carousel','admin\CarouselController');