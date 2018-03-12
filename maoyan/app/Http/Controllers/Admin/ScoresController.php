<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use \DB;
use App\User;
use App\Models\videos;
use App\Models\videoscore;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ScoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getInfo($where,$id)
    {
        $scores = DB::table('videoscore')
            ->join('users','users.id','=','videoscore.uid')
            ->join('videos','videos.id','=','videoscore.vid');
        if($where == 'user' && intval($id) > 0){
            $data = $scores->where($where.'s.id',$id)
            ->select('users.name as uname','videoscore.*','videos.name as vname')->paginate(15);
            $name = [];
        } else if($where == 'video' && intval($id) > 0) {
            $name = DB::table('videos')->where('id',$id)->first();
             $data = $scores->where($where.'s.id',$id)
            ->select('users.name as uname','videoscore.*','videos.name as vname')->paginate(15);
        } else{
            return back()->with('serror','参数错误');
        }
        return view('admin/scores/scores',['title'=>'影片用户评价','data'=>$data,'score'=>'用户评论','name'=>$name]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postDele($id)
    {
        //
        $dele = DB::table('videoscore')->where('id',$id)->delete();
        if($dele > 0){
            return back()->with('success','删除成功');
        }
        return back()->with('serror','删除失败');
    }
}
