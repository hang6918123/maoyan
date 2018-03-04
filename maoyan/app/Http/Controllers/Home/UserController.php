<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Users;
use Input;
use Validator;
class UserController extends Controller
{
    /**
     * 用户中心基本信息
     *
     * @return 用户基本信息页
     */
    public function getIndex()
    {
        return view('home/userinfo');
    }

    public function postUpload()
    {
        //获取上传的文件对象
        $file = Input::file('fileUpload');
        //判断文件是否有效
        if($file->isValid()){
            $entension = $file->getClientOriginalExtension();//上传文件的后缀名
            $newName = date('YmdHis').mt_rand(1000,9999).'.'.$entension;
            $path = $file->move(public_path().'/uploads/user/',$newName);
            //判断是否移动成功
            if($path){
                //成功后写入数据库
                $res = Users::where('phone',session()->get('user')['phone'])->update(['photo'=>$newName]);
                //判断是否入库成功
                if($res){
                    //判断旧头像是否是默认头像
                    if(session()->get('user')['photo'] != 'default.jpg'){
                        $oldfile = public_path().'\uploads\user\\'.session()->get('user')['photo'];
                        unlink($oldfile);
                    }
                    //把新图片压入session
                    $user = session()->get('user');
                    $user['photo'] = $newName;
                    session()->put('user',$user);
                    //返回文件的路径
                    return  $newName;
                } else {
                    //入库不成功删掉移动成功的头像
                    $newfile = public_path().'/uploads/user/'.$newName;
                    unlink($newfile);
                }

            }
            
        }
    }

    public function getSessions()
    {
        dd(session('user'));
    }
}
