<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Links;
class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	if(empty($_GET['search'])){
            $link = Links::orderBy('id','desc')->paginate(10);
            $search = '';
        } else {
            $link = Links::where('name','like','%'.$_GET['search'].'%')
                ->orWhere('url','like','%'.$_GET['search'].'%')
                ->orderBy('id','desc')
                ->paginate(10);
            $link->appends(['search'=>$_GET['search']]);
            $search = $_GET['search'];
        }
        return view('admin.link.list',['link'=>$link,'search'=>$search]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.link.add');
    }

    /**
     * 链接添加
     *
     * @param  \Illuminate\Http\Request  $request
     * @return 成功返回链接列表带提示信息，失败返回提交页面带提示信息
     */
    public function store(Request $request)
    {
        $name = $request->name;
        if(trim($name) == null){
            return back()->with('error','名称不能为空');
        }
        $url = $request->url;
        if(trim($url == null)){
            return back()->with('error','地址不能为空');
        }
        $data['name'] = $name;
        $data['url'] = $url;
        $res = Links::create($data);
        if($res){
            return redirect('/admin/link')->with('success','添加成功');
        }
        return back()->with('error','添加失败');

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
        $data = Links::where('id',$id)->first();
        return view('admin.link.edit',['data'=>$data]);
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
    	$name = $request->name;
        $url = $request->url;
    	$res = Links::where('id',$id)->update(['name'=>$name,'url'=>$url]);
        if($res){
            return redirect('/admin/link')->with('success','修改成功');
        }
        return back()->with('error','修改失败');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res = Links::where('id',$id)->delete();
        //判断是否删除成功
        if($res){
            return '{"id":'.$id.',"str":"删除成功"}';
        }
    }
}
