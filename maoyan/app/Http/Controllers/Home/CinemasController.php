<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Models\Cinemas;
use App\Models\Orders;
use App\Models\Movie;
use App\Models\Videos;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Library\cinemas_exist;
use App\Library\cinema_seek;
use App\Library\cinema_2d;
class CinemasController extends Controller
{
    //返回影院页面
    public function getIndex()
    {
        
        return view('\home\cinemas');
    }

    //接收ajax数据1级查询
    public function address(Request $request)
    {

        $input =  $request->name;
        
        session(['oneJi'=>$input]);
         
         return SEEK($input);
    }
    //2级查询
    public function seekS(Request $request)
    {

        
        $limit = $request->name;
        if($limit == '全部'){
            $onestr =  session('oneJi');
            
            return SEEK($onestr);
        }else{
            
           $onestr =  substr($limit,0,strpos($limit, '-'));
           $twostr =  substr($limit,strpos($limit,'-')+1);
            session(['twoJi'=>$twostr]);
            return SEEK($onestr,$twostr);
        }

    }
    //xz查询
    public function seekT(Request $request)
    {

        $limit = $request->input('name');
        if($limit == '1'){
            $limitt = session('oneJi');
            $limittt = session('twoJi');
            return SEEK($limitt,$limittt,2);
        }else if($limit == '2'){
            $limitt = session('oneJi');
            return SEEK($limitt);
        }else{
           $onestr =  substr($limit,0,strpos($limit, '-'));
           $twostr =  substr($limit,strpos($limit,'-')+1);
           session(['threeJi'=>$twostr]);
            return SEEK($onestr,$twostr,2);
        }
    }
    //3级查询
    public function seekTe(Request $request)
    {
       $limit = $request->input('name');//1级-3级-特殊厅
         $sex =  $request->input('sex');//1级-特殊厅
       $onestr =  session('oneJi');
       $twostr =  session('threeJi');
       $three = '';
       if($sex){
           
            $onestr = cut_str($sex,'-',0);
            $twostr = cut_str($sex,'-',1);
            return SEEK($onestr,$twostr,3,$three);

       }else{
            $onestr = cut_str($limit,'-',0);
            $twostr = cut_str($limit,'-',1);
            $limit = cut_str($limit,'-',-1);
            return SEEK($onestr,$twostr,$limit,3,$three);
       }
        
           
            
    }

    //影院详情页
    public function getDetails($id)
    {
        $str = intval($id);
        
       $cinema = Cinemas::find($id);
       $cinemas_name = $cinema->cinema_name;
       $cinemas_address = $cinema->address;
       $cinemas_phone = $cinema->phone;
       $cinemas  = [];
       $cinemas['name'] = $cinemas_name;
       $cinemas['address'] = $cinemas_address;
       $cinemas['phone'] = $cinemas_phone;
       $cinemas_movie = $cinema->moviess->toArray();
       $cinemas_movie_common = [];
       $cinemas_movie_special = [];
       $cinemas_common = [];
       $cinemas_special = [];
       $cinemas_videoss = [];
       foreach($cinemas_movie as $key=>$v)
       {
         if(intval($v['movies_type'])){
            $cinemas_movie_common['common_video'] = $v['movies_common'];
            $cinemas_videos = Videos::where('name',$v['movies_common'])->first()->toArray();
            $cinemas_movie_common['video_type'] = $cinemas_videos;
            $cinemas_videoss[] = $cinemas_videos;
            $cinemas_movie_common['movie_type'] = $v['movies_type'];
            $cinemas_movie_common['common_time'] = $v['movies_common_time'];
            $cinemas_movie_common['id'] = $v['id'];
            array_push($cinemas_common,$cinemas_movie_common);
         }else{
            $cinemas_movie_special['special_video'] = $v['movies_special'];
            $cinemas_videos = Videos::where('name',$v['movies_special'])->first()->toArray();
            $cinemas_movie_special['video_type'] = $cinemas_videos;
            $cinemas_videoss[] = $cinemas_videos;
            $cinemas_movie_special['movie_type'] = $v['movies_type'];
            $cinemas_movie_special['special_time'] = $v['movies_special_time'];
            $cinemas_movie_special['id'] = $v['id'];
            array_push($cinemas_special,$cinemas_movie_special);
         }
       }
       $cinemas_videoss = array_unique_fb($cinemas_videoss);

       // dd($cinemas_common);
       // $cinema->moviess()->
        return view('\home\details',['cinemas_common'=>$cinemas_common,'cinemas_special'=>$cinemas_special,'cinemas'=>$cinemas,'cinemas_videoss'=>$cinemas_videoss]);
    }


    //影院购票页
    public function getWrit($id)
    {

       // $input =  $request->all();
        $movies_id = cut_str($id,'-',0);
        $videos_id = cut_str($id,'-',1);
        

        $movie = Movie::find($movies_id)->toArray();
        $cinema = Cinemas::find($movie['cinemas_id'])->toArray();
        $video = Videos::find($videos_id)->toArray();
        // dd($movie['movies_type']);

        // $yishou = Orders::where('number','like','%'.$cinema['id'].$movie['movies_type'].'%')->lists('seat')->all()->toArray();
        // dd($yishou);

        session(['moviee'=>$movie,'cinemaa'=>$cinema,'videoo'=>$video]);
        return view('\home\writ',['movie'=>$movie,'cinema'=>$cinema,'video'=>$video]);
    }
    //生成订单
    public function getOrders(Request $request)
    {
        $input = $request->input('map_id');//座位
        $math = substr_count($input, '#')+1;
        if ($request->session()->has('id')) {
            $user = session('id');//UID
        }else{
            $user = '匿名用户';
        }

        $movie = session('moviee');
        $cinema = session('cinemaa');
        $video = session('videoo');

        $vid = $video['id'];
        $uid = $user;
        $order_time = date('Y-m-d H:i:s',time());
        $number = $cinema['id'].$movie['movies_type'].'a'.time().rand(1,999);
        $video_name = $video['name'];
        $cinema_name = $cinema['cinema_name'];
        $movie_type =$movie['movies_type'];
        $price = $video['money']*$math;

        $orders = new Orders;
        $orders->vid = $vid;
        $orders->uid = $user;
        $orders->number = $number;
        $orders->order_time = $order_time;
        $orders->vname = $video_name;
        $orders->cinema = $cinema_name;
        $orders->hall = $movie_type;
        $orders->seat = $input;
        $orders->price = $price;
        
        if($orders->save()){

            return 'ok';
        };
    }

    public function getMap(Request $request)
    {

    }
}

