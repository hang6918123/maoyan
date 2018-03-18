<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Validator;
use App\Models\News;
class NewsController extends Controller
{
    /**
     * 资讯列表
     *@param   search  搜索条件 
     * @return 资讯信息，资讯列表页
     */
    public function index()
    {
        if(empty($_GET['search'])){
            $news = News::orderBy('id','desc')->paginate(5);
            $search = '';
        } else {
            $news = News::where('title','like','%'.$_GET['search'].'%')
                ->orWhere('id','like','%'.$_GET['search'].'%')
                ->orderBy('id','desc')
                ->paginate(5);
            $news->appends(['search'=>$_GET['search']]);
            $search = $_GET['search'];
        }
        return view('admin.news.list',['news'=>$news,'search'=>$search]);
    }

    /**
     * 发布资讯
     *
     * @return 添加页面
     */
    public function create()
    {
        return view('admin.news.add');
    }

    /**
     * 发布处理
     *
     * @param  \Illuminate\Http\Request  $request
     * @return 资讯列表url地址
     */
    public function store(Request $request)
    {
        $title = Input::get('title');
        $content = Input::get('content');
        $descride = Input::get('descride');
        //获取上传的文件对象
        $file = Input::file('poster');
        //判断文件是否有效
        if($file->isValid()){
            $entension = $file->getClientOriginalExtension();//上传文件的后缀名
            $newName = date('YmdHis').mt_rand(1000,9999).'.'.$entension;
            $path = $file->move(public_path().'/uploads/news/',$newName);
            //判断是否移动成功
            if($path){
                 $news = new News;
                 $news->title = $title;
                 $news->descride = $descride;
                 $news->poster = $newName;
                 $news->content = $content;
                 $news->pubdate = time();
                 $res = $news->save();
                 if($res){
                    //资讯列表的url地址
                    $url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                    return $url;
                 }
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {     
        return view('errors.404');
    }

    /**
     * 资讯修改
     *
     * @param  int  $id
     * @return 修改页面，要修改的资讯的信息
     */
    public function edit($id)
    {
        $data = News::where('id',$id)->first();
        return view('admin.news.edit',['data'=>$data]);
    }

    /**
     * 资讯修改处理
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return 资讯列表url地址，提示信息
     */
    public function update(Request $request, $id)
    {
        //获取上传的文件对象
        $file = $request->file('poster');
        $title = $request->title;
        $content = $request->content;
        $descride = $request->descride;
        //判断是否上传海报
        if($file != null){
            //判断文件是否有效
            if($file->isValid()){

                $entension = $file->getClientOriginalExtension();//上传文件的后缀名
                $newName = date('YmdHis').mt_rand(1000,9999).'.'.$entension;
                $path = $file->move(public_path().'/uploads/news/',$newName);
                //判断是否移动成功
                if($path){

                    $res = News::where('id',$id)->update(['title'=>$title,'descride'=>$descride,'content'=>$content,'poster'=>$newName]);
                    //判断是否入库成功
                    if($res){
                        //入库成功后删除旧海报
                        $old_poster = $request->old_poster;
                        unlink(public_path().'\uploads\news\\'.$old_poster);
                        return redirect('/admin/news')->with('success','修改成功');
                    } else {
                        //入库不成功删除刚移动过来的新海报
                        unlink(public_path().'\uploads\news\\'.$newName);
                        
                    }
                }
                return back()->with('error','修改失败');
            }
        } else {
            //没上传海报就直接更新数据
            $res = News::where('id',$id)->update(['title'=>$title,'descride'=>$descride,'content'=>$content]);
            if($res){
                return redirect('/admin/news')->with('success','修改成功');
            }
            return back()->with('error','修改失败');
        }
    }

    /**
     * 资讯删除
     *
     * @param  int  $id
     * @return 提示信息
     */
    public function destroy($id)
    {
        //先查出海报
        $poster = News::where('id',$id)->first();
        $res = News::where('id',$id)->delete();
        //判断是否删除成功
        if($res){
            //删除成功后删除海报
            unlink(public_path().'\uploads\news\\'.$poster['poster']);
            return '{"id":'.$id.',"str":"删除成功"}';
        }
    }
}
