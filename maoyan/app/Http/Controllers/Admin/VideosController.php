<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Libray\helper;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBlogPostRequest;
use App\Models\Videos;
use Upload;
use App\Models\videoscore;
use DB;
use DispatchesJobs, ValidatesRequests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Routing\Controller as BaseController;

class VideosController extends Controller
{


    public function videosdb(){

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //接受页面传过来的参数
        $length = isset($_GET['Table_length']) ? $_GET['Table_length'] : 10;
        //判断显示条数说否合法
        ($length == 10 || $length == 20 || $length == 50) ? $length : 10; 
        
        $search = isset($_GET['search']) ? $_GET['search'] : '';
            $videos = new Videos;
        if($search != ''){
            //带搜索条件查询数据库‘
            $data = $videos->where('name','like','%'.$search.'%')->paginate($length);
        }else{

            //查询数据库记录
           $data = $videos->paginate($length);
        }
        return view('admin/films/vlist',['title'=>'影片列表','data'=>$data,'length'=>$length,'search'=>$search]);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/films/add',['title'=>'添加影片']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogPostRequest $request)
    {
        //接受参数\
        $name = $request->input('name');
        $type = implode('-',$request->input('type'));
        $region = $request->input('region');
        $years = $request->input('year1').'-'.$request->input('month1').'-'.$request->input('day1');
        $language = $request->input('language');
        $time = $request->input('time');
        $content = $request->input('content');
        $state = $request->input('state');
        // dd($request->all());
        $up = new Upload('photo',public_path().'/upload/videos/');
        $up -> run();
        if ($up->error == null) {
                $photo = $up->_desName;
            } else {
                return back()->with('serror','添加失败');
            }
        
        $videos = new Videos;
        $videos -> name = $name;
        $videos -> type = $type;
        $videos -> region = $region;
        $videos -> years = $years;
        $videos -> time = $time;
        $videos -> content = $content;
        $videos -> photo = $photo;
        $videos -> language = $language;
        $videos -> state = $state;
        if(!$videos -> save()){

            return back()->with('serror', '添加失败');
        }
        return redirect('/admin/video')->with('success', '添加成功');
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
        $data = Videos::where('id',$id)->first();
        if($data == null){
            $data = Videos::withTrashed()->where('id', $id)->first();
            $title = '回收站影片详情';
        }else{
            $title = '影片详情';
        }
        $year = explode('-',$data['years']);
        $type = explode('-',$data['type']);
        return view('admin/films/vinfo',['title'=>$title,'data'=>$data,'year'=>$year,'type'=>$type]);
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
        $data = DB::table('videos')->where('id',$id)->first();
        $year = explode('-',$data['years']);
       $type = explode('-',$data['type']);

        return view('admin/films/vedit',['title'=>'影片修改信息表','data'=>$data,'year'=>$year,'type'=>$type]);
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
        $this->validate($request, [
            
        'name' => 'required',
            'type' => 'required',
            'content' => 'required',
            'region' => 'regex:/\W/',
            'language' => 'regex:/\W/',
            'time' => 'required|numeric|min:5400',          //影片时间不能为空,数值型,不能小于5400
            'state' => 'between:0,3',
    ],[
        'name.required' => '影片名必填',
            'name.unique' => '影片名已存在',
            'type.required'  => '电影类型必选',
            'content.required'  => '电影简介不能为空',
            'region.regex'  => '电影上映地区必选',
            'year1.regex'  => '电影上映时间年必选',
            'year1.numeric'  => '电影上映时间年必须为数字',
            'day1.numeric'  => '电影上映时间日必须为数字',
            'language.regex'  => '电影语言版本必选',
            'time.required'  => '电影时长必填',
            'time.numeric'  => '电影时长必须是数字',
            'time.min'  => '电影时长不能小于5400秒(90分钟)',
            'photo.required'  => '没有上传电影封面',
            'photo.mimes'  => '电影封面格式为jpg,png,jpeg',
            'photo.max'  => '电影封面图片不能大于3M(兆)',
            'state.between'  => '电影状态非法',
    ]);
        // 接受参数
        $name = $request->input('name');
        $type = implode('-',$request->input('type'));
        $region = $request->input('region');
        $language = $request->input('language');
        $content = $request->input('content');
        $time = $request->input('time');
        if(empty($request->input('year1')) && empty($request->input('month1')) && empty($request->input('day1'))){
            $years = $request->input('years');
        }else{
        $years = $request->input('year1').'-'.$request->input('month1').'-'.$request->input('day1');
            
        }
        $state = $request->input('state');
        $oldpho = $request->input('oldpho');
        if($_FILES['photo']['error']!=4){
            $up = new Upload('photo',public_path().'/upload/videos/');
            $up -> run();
            if ($up->error == null) {
                    $photo = $up->_desName;
                    if(!empty($oldpho && is_file(public_path().'/upload/videos/'.$oldpho))){
                        unlink(public_path().'/upload/videos/'.$oldpho);
                    }
                } else {
            
                    return back()->with('serror', '上传图片失败');
                }
        } else {
            $photo = $oldpho;
        }
        $videos =  Videos::where('id',$id)->first();
        $videos -> name = $name;
        $videos -> type = $type;
        $videos -> region = $region;
        $videos -> years = $years;
        $videos -> time = $time;
        $videos -> content = $content;
        $videos -> photo = $photo;
        $videos -> language = $language;
        $videos -> state = $state;
        if(!$videos -> save()){

            return back()->with('serror', '添加失败');
        }
        return redirect('/admin/video')->with('success', '修改成功');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photo = Videos::where('id',$id)->first()-> photo;

        $score = DB::table('videscore')->where('vid',$id)->delete();

        $videos = Videos::where('id',$id)->forceDelete();

        if($videos == 0 && $score == 0){
            return back()->with('serror', '删除失败');
        };
         if(is_file(public_path().'/upload/videos/'.$photo)){
            unlink(public_path().'/upload/videos/'.$photo);
        }
        return back()->with('success', '删除成功');
    }

    //影片回收
    public function recycle($id){
        $videos = Videos::where('id',$id)->first()->delete();
        if(!$videos){
            return back()->with('serror', '放入回收失败');
        };
        return redirect('/admin/vshow')->with('success', '放入回收成功');
    }

  
    public function vshow(){
        $length = isset($_GET['Table_length']) ? $_GET['Table_length'] : 10;
        //判断显示条数说否合法
        ($length == 10 || $length == 20 || $length == 50) ? $length : 10; 
        
        $search = isset($_GET['search']) ? $_GET['search'] : '';
        $videos = Videos::onlyTrashed();
        if($search != ''){
            //带搜索条件查询数据库‘
            $data = $videos->where('name','like','%'.$search.'%')->paginate($length);
        }else{

            //查询数据库记录
           $data = $videos->paginate($length);
        }
        return view('/admin/films/recycle',['title'=>'影片回收站','data'=>$data,'length'=>$length,'search'=>$search]);
    }

    public function showv($id){
        $videos = Videos::withTrashed()
        ->where('id', $id)
        ->restore();
        if($videos==0){
           return back()->with('serror', '恢复失败');
        };
        return redirect('/admin/video')->with('success', '恢复成功');
    }

    public function dele($id){
        $photo = Videos::onlyTrashed()->where('id',$id)->first()->photo;
        $score = DB::table('videscore')->where('vid',$id)->delete();
        $videos = Videos::onlyTrashed()->where('id',$id)->forceDelete();
         if($videos == 0 && $score == 0){
            return back()->with('serror', '删除失败');
        }
        if(is_file(public_path().'/upload/videos/'.$photo)){
            unlink(public_path().'/upload/videos/'.$photo);
        }
        return back()->with('success', '删除成功');
    }
}
