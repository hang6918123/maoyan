<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\News;
use Redis;
class NewsController extends Controller
{
    /**
     * 热点资讯
     *
     * @return 热点资讯页，热点资讯信息
     */
    public function getIndex()
    {

        $news = News::orderBy('pubdate','desc')->take(6)->get(['id','title','poster','reading']);
        $data = News::orderBy('reading','desc')->take(10)->get(['id','title','poster','reading']);
        return view('home.news',['news'=>$news,'data'=>$data]);
    }

    /**
     * 资讯列表
     *
     * @return 资讯列表页，资讯信息
     */
    public function getList()
    {
        $news = News::orderBy('pubdate','desc')->paginate(10);
        return view('home.newsList',['news'=>$news]);
    }

    /**
     * 资讯详情
     *
     * @return 资讯详情页，资讯信息
     */
    public function getOne($id)
    {
        News::where('id',$id)->increment('reading');
        $data = News::where('id',$id)->first();
        return view('home.newsInfo',['data'=>$data]);
    }

    /**
     * 点赞
     *
     * @return 提示信息，点赞数量
     */
    public function postLaub(Request $request)
    {
        //检查是否登录
        if(!session()->has('home')){
            return '{"str":"请先登录","num":2}';
        }
        //检查今天是否已经点赞
        $nid = $request->id;
        $uid = session()->get('id');
        $res = Redis::exists($nid.'-'.$uid);
        if($res){
            return '{"str":"今天已经赞过了哦","num":0}';
        }
        //点赞操作
        $num = News::where('id',$nid)->increment('laub_num');
        $year = date("Y");
        $month = date("m");
        $day = date("d");
        $now = time();
        $end = mktime(23,59,59,$month,$day,$year);
        $secs = $end - $now; 
        Redis::setex($nid.'-'.$uid,$secs,'true');
        return '{"str":"点赞成功，谢谢支持","num":'.$num.'}';
    }
}
