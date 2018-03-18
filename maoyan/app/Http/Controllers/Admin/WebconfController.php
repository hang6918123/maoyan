<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Webconf;
class WebconfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Webconf::find(1);
        return view('admin.webconf',['data'=>$data]);
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
        //获取上传的文件对象
        $file = $request->file('logo');
        $title = $request->title;
        $describe = $request->describe;
        $keyword = $request->keyword;
        $copyright = $request->copyright;
        $company = $request->company; 
        //判断是否上传海报
        if($file != null){
            //判断文件是否有效
            if($file->isValid()){

                $entension = $file->getClientOriginalExtension();//上传文件的后缀名
                $newName = date('YmdHis').mt_rand(1000,9999).'.'.$entension;
                $path = $file->move(public_path().'/home/images/',$newName);
                //判断是否移动成功
                if($path){

                    $res = Webconf::where('id',1)->update(['title'=>$title,'logo'=>$newName,'describe'=>$describe,'keyword'=>$keyword,'copyright'=>$copyright,'company'=>$company]);
                    //判断是否入库成功
                    if($res){
                        //入库成功后删除旧海报
                        $old_logo = $request->old_logo;
                        unlink(public_path().'\home\images\\'.$old_logo);
                        //将配置文件中的内容写入config目录下的web.php文件   方便后期读取网站配置
                        $config = Webconf::find(1)->toArray();
                        $str = '<?php return '.var_export($config,true).';';
                        //要写入的路径
                        $path = base_path().'\config\webconf.php';
                        //参数1 写入的文件的路径  参数2  向文件中写入的内容
                        file_put_contents($path,$str);
                        return redirect('/admin/webconf')->with('success','修改成功');
                    } else {
                        //入库不成功删除刚移动过来的新海报
                        unlink(public_path().'\home\images\\'.$newName);
                        
                    }
                }
                return back()->with('error','修改失败');
            }
        } else {
            //没上传海报就直接更新数据
            $res = Webconf::where('id',1)->update(['title'=>$title,'describe'=>$describe,'keyword'=>$keyword,'copyright'=>$copyright,'company'=>$company]);
            if($res){
                //将配置文件中的内容写入config目录下的web.php文件   方便后期读取网站配置
                $config = Webconf::find(1)->toArray();
                $str = '<?php return '.var_export($config,true).';';
                //要写入的路径
                $path = base_path().'\config\webconf.php';
                //参数1 写入的文件的路径  参数2  向文件中写入的内容
                file_put_contents($path,$str);
                return redirect('/admin/webconf')->with('success','修改成功');
            }
            return back()->with('error','修改失败');
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
