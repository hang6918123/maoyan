<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Library\helper;
use App\Http\Requests;
use DB;
use App\Http\Controllers\Controller;
use App\Models\Videos;
use App\Models\Videoscores;
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
                $video->where('years','<',$years.'-12-31');
            }elseif($years == '2000-2010'){
                $video->where('years','<','2010-12-31');
                $video->where('years','>','2000-1-1');
            }elseif($years == '90年代'){
                $video->where('years','like','19%');
            }elseif($years == '80年代'){
                $video->where('years','like','18%');
            }elseif($years == '70年代'){
                $video->where('years','like','17%');
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
                    $video->orderBy('score','desc');
                    break;
            }
        }else{
            $sortId = '';
            // $video->where('years','>',$date);
        }
          $data =    $video->select('Videos.*','videoscore.score')->leftJoin('videoscore', 'videoscore.vid', '=', 'videos.id')->paginate(60);
        //
        $get = [];
        $get = $_GET;
        
           // dd(pth($get,1,'yearId'));
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
