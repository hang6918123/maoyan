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
Route::get('/films', function () {
    return view('home/films');
});
Route::get('/cinemas', function () {
    return view('home/cinemas');
});
Route::get('/board', function () {
    return view('home/board');
});
Route::get('/news', function () {
    return view('home/news');
});
Route::get('login', function () {
    return view('home/login');
});
Route::controller('/conde','Home\UserController');