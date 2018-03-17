<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Library\helper;
use App\Http\Requests;
// use App\Library\helper;
use DB;
use Illuminate\Support\Facades\Redis;
use josn_encond;
use App\Http\Controllers\Controller;
use App\Models\Videos;
use App\User;
use App\Models\Videoscore;
class VideosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $video = DB::table('Videos');
        //接受参数
        // 检测参数合法性
        // 按时类型排序
        if(intval(isset($_GET['catId']))>0){
            $cat = vtype()[$_GET['catId']-1];
            $video ->where('type','like','%'.$cat.'%');
        }else{
            $cat = '';
        }
        // 按时区域排序
        if(intval(isset($_GET['sourceId']))>0){
            $region = vregion()[$_GET['sourceId']-1];
            $video -> where('region',$region);
        }else{
            $region = '';
        }
        // 按时年代排序
        if(intval(isset($_GET['yearId']))>0){
            $years = year()[$_GET['yearId']-1];
            //判断时间段
            if($years == year()[0]){
                $video->where('years','>',$years.'-12-31');
            }elseif($years == '2000-2010'){
                $video->where('years','<','2010-12-31');
                $video->where('years','>','2000-1-1');
            }elseif($years == '90年代'){
                $video->where('years','like','199%');
            }elseif($years == '80年代'){
                $video->where('years','like','198%');
            }elseif($years == '70年代'){
                $video->where('years','like','197%');
            }elseif($years == '更早'){
                $video->where('years','<','1700-1-1');
            }else{
                $video->where('years','like',$years.'%');

            }
        }else{
            $years = '';
        }
         // 按热门排序   按时间排序   按评价排序
            $date = date('Y-m-d',time());
        if(intval(isset($_GET['sortId']))>0){
            $sortId = $_GET['sortId'];
            switch($sortId){
                // case 1:
                //     $video->where('years','>',$date);
                //     break;
                case 1:
                    $video->orderBy('years','desc');
                    break;
                case 2:
                    $video->orderBy('u_score','desc');
                    break;
            }
        }else{
            $sortId = '';
            // $video->where('years','>',$date);
        }
          $data =    $video->leftJoin('videoscore', 'videos.id', '=', 'videoscore.vid')->where('Videos.deleted_at','=',null)->select('Videos.*','videoscore.u_score')->groupBy('videos.id')->paginate(60);
        //
        $get = [];
        $get = $_GET;

// dd($data);
        return view('home/films',['data'=>$data,'catId'=>$cat,'scoureId'=>$region,'yearId'=>$years,'sortId'=>$sortId,'get'=>$get]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //电影详情页
        $video = Videos::where('id',$id)->get();
        //取出数据
        // dd($video);
            foreach($video as $k => $v){
                $info = $v;
            }
        
        if(!isset($info)){
            return "<script language=javascript>alert('没有该影片！');history.back();</script>";
        }
        // dd($video);
        // 获取用户评论
       $score = DB::table('videoscore')->where('vid',$id)->where('u_content','>',0)->leftJoin('users','videoscore.uid','=','users.id')->select('users.*','videoscore.u_content','videoscore.u_score','videoscore.zan')->get();
       //获取用户信息
       $uid = session('id');
       $user = DB::table('videoscore')->where('uid',$uid)->where('vid',$id)->select('videoscore.u_score','videoscore.think')->first();
       //获取用户今天是否对评论点赞
       Redis::select(15);
       $set = Redis::exists('zan'.$uid);
        // 检查redis中是否存在数据
       
       if($set){
            $redis =  Redis::hgetall('zan'.$uid);
            $zan = [];
            foreach($redis as $v){
                $arr = json_decode($v,true);
                $zan[] = $arr;
            } 
       }else{
          $zan = [[1]];
       }
       //获取最新资讯
       $news = DB::table('news')->paginate(5);
            // dd($zan);
        return view('home/film',['video'=>$info,'score'=>$score,'user'=>$user,'zan'=>$zan,'news'=>$news,'uid'=>$uid]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param 前台想看ajax
     * @return 返回影响行数成功1，失败0
     */
    public function getThink()
    {
        // 接受参数
        $uid = $_GET['uid'];
        $vid = $_GET['vid'];
        $score = DB::table('videoscore')->where('uid',$uid)->where('vid',$vid)->first();
        // 查询用户是否对影片评论或点击过想看
        $res = DB::table('videoscore');
        if($score == null){
            $y = $res->insert(['uid'=>$uid,'vid'=>$vid,'think'=>1]);
        }else{
            $y = $res->where('uid',$uid)->update(['uid'=>$uid,'think'=>1]);
        }
        return dd($y);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  影片评论评分ajax
     * @return \
     */
    public function getScore(Request $request)
    {   
        // return $request->all();
        // 评论内容
        $content = $request->input('content');
        // 用户id
        $uid = $request->input('userId');
        // 评分
        $scores = $request->input('score');
        //判断影片评分合法性
        (intval($scores) >= 0.5 || intval($scores) <= 5) ? $scores : $scores=5;
        $scores = $scores*2;
        // 影片id
        $vid = $request->input('ci');
        // 查看用户是否发过评论
        $score = DB::table('videoscore')->where('uid',$uid)->where('vid',$vid)->first(); 
        //判断用户有没有发表评价
                $res = DB::table('videoscore');
        // 判断文章是否为空
        
        if(empty($content)){

            if($score == null){
                $y = $res->insert(['uid'=>$uid,'vid'=>$vid,'u_score'=>$scores]);
            }else{
                $y = $res->where('vid',$vid)->where('uid',$uid)->update(['uid'=>$uid,'u_score'=>$scores]);
            }
        }else{
            // return dd($score);
             if($score == null){
                $res = new videoscore;
                $res-> u_score = $scores;
                $res-> vid = $vid;
                $res-> uid = $uid;
                $res-> u_content = $content;
                $a  = $res->save();
                if($a >0){
                    $y = 1;
                }else{
                    $y = 0;
                }
            }else{
                $time = date('Y-m-d H:i:s',time());
                $res = Videoscore::where('vid',$vid)->where('uid',$uid)-> update(['uid'=>$uid,'u_score'=>$scores,'u_content'=>$content,'created_at'=>$time]);
                if($res >0){
                    $y = 1;
                }else{
                    $y = 0;
                }
            }
        }
        // 计算平均评分
        $data = DB::select('select avg(u_score) as num from videoscore where u_score>0 and vid='.$vid);
        foreach($data[0] as $k){
            $num = $k;
        }
        // return $num;
        if(!is_int($num)){
            $num = round($num,1);
        }
        if($num>0 && $num<=10){
            $res = DB::table('videos')->where('id',$vid)->update(['films_score'=>$num]);
        }elseif(round($num,1)<=0){
            $num = 1;
            $res = DB::table('videos')->where('id',$vid)->update(['films_score'=>$num]);
        }elseif(round($num,1)>10){
            $num = 10;
            $res = DB::table('videos')->where('id',$vid)->update(['films_score'=>$num]);
        }
        return $y;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  官网的ajax用于接收防止报错
     * @return \Illuminate\Http\Response
     */
    public function getPp($id=1)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  官网的ajax用于接收防止报错
     * @return \Illuminate\Http\Response
     */
    public function getCities($id)
    {
        
    }

    public function getZan(Request $request)
    {   
        // return dd($request->all());
        // 接受参数
        // 电影ID
        $vid = $request->input('ci');
         // 发表评论用户ID
        $uid = $request->input('business');
        // 登录用户ID
        $b_uid = $request->input('userId');
        Redis::select(15);
        $set = Redis::exists('zan'.$uid,$vid.$uid.$b_uid);
        // 检查redis中是否存在数据
       if(!$set){
            $data = json_encode(['uid'=>$uid,'vid'=>$vid,'b_uid'=>$b_uid]);
            $res = Redis::hset('zan'.$uid,$vid.$uid.$b_uid,$data);
        return dd($res);
       }else{
            $res = Redis::del('zan'.$uid,$vid.$uid.$b_uid);
        return $res;

       }

        

    }
}
