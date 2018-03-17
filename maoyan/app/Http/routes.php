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

// 后台主页路由
Route::get('/admin/index', function () {
    return view('admin/index');
});
// 前台影片路由
Route::resource('/films','Home\VideosController');
// 前台影片评论ajax
Route::controller('/film','Home\VideosController');
// 前台榜单
Route::controller('/board','Home\BoardController');
// 前台搜索
Route::get('/query','Home\BoardController@query');
// 后台影片管理路由
Route::get('/admin/recycle/{id}','Admin\VideosController@recycle');
Route::post('/admin/dele/{id}','Admin\VideosController@dele');
Route::get('/admin/vshow','Admin\VideosController@vshow');
Route::get('/admin/showv/{id}','Admin\VideosController@showv');
Route::resource('/admin/video','Admin\VideosController');
//后台评价路由
Route::controller('/admin/score','Admin\ScoresController');
//后台订单路由
Route::controller('/admin/orders','Admin\OrdersController');
//前台路由主页
Route::controller('/','Home\IndexController');
