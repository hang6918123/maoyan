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
//前台登录
Route::controller('login','Home\LoginController');

//前台登录中间件
Route::group(['middleware'=>'homeLogin'],function(){
	//前台用户中心
	Route::controller('user','Home\UserController');
});
//前台资讯
Route::controller('news','Home\NewsController');
//前台路由主页
Route::get('/','Home\IndexController@index');

//---------------------------------------------------------------------------//

//后台登录
Route::controller('admin/login','Admin\LoginController');

//后台登录中间件
Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>['adminLogin','power']],function(){
	// 后台主页路由
	Route::resource('index', 'IndexController');
	//后台用户
	Route::controller('user','UserController');
	//后台岗位权限
	Route::controller('auth','AuthController');
	//后台资讯
	Route::resource('news','NewsController');

	Route::controller('cineman','CinemanController');

	Route::controller('movie','MovieController');

	Route::controller('carousel','CarouselController');
	// 后台影片管理路由
	Route::get('recycle/{id}','VideosController@recycle');

	Route::post('dele/{id}','VideosController@dele');

	Route::get('vshow','VideosController@vshow');

	Route::get('showv/{id}','VideosController@showv');

	Route::resource('video','VideosController');
	//后台评价路由
	Route::controller('score','ScoresController');
	//后台订单路由
	Route::controller('orders','OrdersController');
	//后台友情链接
	Route::resource('link','LinkController');
	//后台网站配置
	Route::resource('webconf','WebconfController');
});


Route::get('/cinemas/address','home\CinemasController@address');
Route::get('/cinemas/seeks','home\CinemasController@seeks');
Route::get('/cinemas/seekt','home\CinemasController@seekt');
Route::get('/cinemas/seekte','home\CinemasController@seekte');
Route::controller('/cinemas','home\CinemasController');





// 前台影片路由
Route::resource('/films','Home\VideosController');
// 前台影片评论ajax
Route::controller('/film','Home\VideosController');
// 前台榜单
Route::controller('/board','Home\BoardController');
// 前台搜索
Route::get('/query','Home\BoardController@query');
