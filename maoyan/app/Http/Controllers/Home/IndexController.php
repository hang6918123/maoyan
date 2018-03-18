<?php

namespace App\Http\Controllers\Home;
use App\Models\Videos;
use App\Models\Videoscore;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
   
	public function index(){
		// 查询轮播图数据
		$carousel = DB::table('carousel')->where('carousel_auth',0)->get();
		//查询热映影片
		$films = DB::table('videos')->where('state',1)->where('deleted_at','=',null)->paginate(8);
		//查询预售影片
		$yushou = DB::table('videos')->where('state',2)->where('deleted_at','=',null)->paginate(8);
		//查询热播
		$hot = DB::table('videos')->where('box_office','>',0)->where('deleted_at','=',null)->orderBy('box_office','desc')->paginate(7);
		// 今日票房
		$year = date("Y");
		$month = date("m");
		$day = date("d");
		$start = date(mktime(0,0,0,$month,$day,$year));//当天开始时间戳
		$end= date(mktime(23,59,59,$month,$day,$year));//当天结束时间戳
		$box = DB::table('orders')->where('order_time','>=',$start)->where('order_time','<=',$end)->leftJoin('videos','videos.id','=','orders.vid')->where('deleted_at','=',null)->paginate(10);
		//想看排行
		$think = DB::table('videoscore as think')->leftJoin('videos','videos.id','=','think.vid')->where('videos.deleted_at','=',null)->where('think.think','>',0)->select('think.vid','videos.name','videos.years','videos.photo')->groupBy('vid')->selectRaw('count(think.think) as kk')->orderBy('kk','desc')->get();
		//top10
		$top = DB::table('videos')->where('deleted_at','=',null)->where('films_score','>',0)->orderBy('films_score','desc')->select('videos.name','videos.films_score','videos.id','videos.photo')->get();
		return view('home/index',['car'=>$carousel,'films'=>$films,'yushou'=>$yushou,'hot'=>$hot,'box'=>$box,'think'=>$think,'top'=>$top]);
	}

	

}
