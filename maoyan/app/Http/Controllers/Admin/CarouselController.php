<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\models\carousel;
//轮播图
class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAdd()
    {
        //轮播图添加页
        return view('admin\carousel\carousel');
    }

    //执行轮播添加页
    public function postStara(Request $request)
    {

      $uploads_dir  =  '/lunbo';
      $lunbo_path = [];
      // dd($_FILES);s
       foreach ( $_FILES ['phone'][ "error" ] as  $key  =>  $error ) {

            if ( $error  ==  UPLOAD_ERR_OK ) {
                 $tmp_name  =  $_FILES ['phone'][ "tmp_name" ][ $key ];

                 $name  =  $_FILES ['phone'][ "name" ][ $key ];
                 

                 if(move_uploaded_file ( $tmp_name , public_path().$uploads_dir."/".$name)){
                    $lunbo_path['carousel_path'] = $uploads_dir."/".$name;
                    $lunbo_path['carousel_name'] = $name;
                    
                    carousel::create($lunbo_path);
                 }else{
                    
                    return redirect('admin\carousel\add')->with('mss','上传失败请重新上传');
                 }
            }else{
                
                return redirect('admin\carousel\add')->with('mss','请检查文件后重新上传');
            }

        }

        return redirect('admin\carousel\add')->with('mes','上传成功');

    }

    //选择轮播图页
    public function getEdit()
    {
       $carousel =  carousel::get()->toArray();
       // dd($carousel);
       return view('admin\carousel\carousel_edit',['carousel'=>$carousel]);
    }

    //轮播选择处理
    public function getUpdate($id)
    {
        // dd($id);
        $str = '';
        $carousel = carousel::find($id)->toArray();
        $carousel['carousel_auth'] ? $str = '0' : $str = '1';
        $carousel = carousel::find($id);
        $carousel->carousel_auth = $str;
        $carousel->save();
        if($str){

            return back()->with('mes','开启成功');
        }else{
            return back()->with('mes','关闭成功');
        }
    }

    //轮播图删除页
    public function getDelete($id)
    {
        $carousel = carousel::find($id)->toArray();
        $str = public_path().$carousel['carousel_path'];
        if(unlink($str)){
            $carousel = carousel::find($id)->delete();
            return back()->with('mes','删除图片成功');
        }else{
            return back()->with('mes','删除图片失败');

        }
        
    }
}
