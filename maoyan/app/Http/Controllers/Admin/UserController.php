<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Users;
use Redis;
use DB;
use Hash;
use Input;
use Validator;
class UserController extends Controller
{
    /**
     * 用户列表
     *
     * @return 用户列表页,用户数据
     */
    public function getIndex()
    {
        //判断缓存是否有数据
        if(Redis::exists('users')){
            //有就直接取出来
            $data = Redis::hvals('users');
            foreach($data as $v) {
               $arr[] = json_decode($v);
            }
        } else {
            //如果没有就从数据库取出来放进去
            $users = Users::all();
            if($users->first()){

                foreach($users as $v){
                    $vjson = json_encode($v);
                    Redis::hset('users',$v['id'],$vjson);
                }
                $data = Redis::hvals('users');
                foreach($data as $v) {
                   $arr[] = json_decode($v);
                }
            } else {
                $arr = '';
            }
        }
        return view('admin.user.list',['users'=>$arr]);
    }

    /**
     * 用户添加
     *
     * @return 用户添加页面
     */
    public function getCreate()
    {
        return view('admin.user.add');
    }

    /**
     * 用户添加处理
     *
     * @param  \Illuminate\Http\Request  $request
     * @return 失败返回添加页面带失败提示信息，成功返回用户列表页带成功提示信息
     */
    public function postStore(request $request)
    {
        //查询数据库是否有这个手机号
        $res = Users::where('phone',$request->phone)->first();
        //存在就返回添加页面
        if($res){
            return redirect('/admin/user/create')->with('error','添加失败,手机号已存在');
        }
        //不存在就往数据库里存
        $user = $request->except('_token');

        $user['password'] = Hash::make($user['password']);
        //开启事务
        DB::beginTransaction();
        $res2 = Users::create($user);
        //判断是否入库成功
        if($res2){
            //成功后写入redis
            $user = Users::find($res2->id);
            $user = json_encode($user);
            $res3 = Redis::hset('users',$res2->id,$user);
            //判断redis是否写入成功
            if($res3){
                //成功就提交事务并跳转到用户列表页
                DB::commit();
                return redirect('/admin/user')->with('success','添加成功');
            } else {
                //失败就回滚并跳到添加页面
                DB::rollBack();
                return redirect('/admin/user/create')->with('error','添加失败');
            }
            
        } else {
            return redirect('/admin/user/create')->with('error','添加失败');
        }
        
    }

    /**
     * 用户修改页面
     *
     * @param  int  $id
     * @return 成功返回用户列表页带提示信息，失败返回修改页带提示信息
     */
    public function getShow($id)
    {
        $user = Users::find($id);
        return view('admin.user.edit',['user'=>$user]);
    }

    /**
     * 用户头像修改处理
     *
     * @param  int  $id
     * @return 成功返回新头像文件名，失败返回false
     */
    public function postEdit($id)
    {
        //获取上传的文件对象
        $file = Input::file('photo');
        //判断文件是否有效
        if($file->isValid()){
            $old_photo = Input::get('old_photo');
            $entension = $file->getClientOriginalExtension();//上传文件的后缀名
            $newName = date('YmdHis').mt_rand(1000,9999).'.'.$entension;
            $path = $file->move(public_path().'/uploads/user/',$newName);
            //判断是否移动成功
            if($path){
                //成功后写入数据库
                $res = Users::where('id',$id)->update(['photo'=>$newName]);
                //判断是否入库成功
                if($res){
                    //判断旧头像是否是默认头像
                    if( $old_photo != 'default.jpg'){
                        $oldfile = public_path().'\uploads\user\\'.$old_photo;
                        unlink($oldfile);
                    }
                    //压入redis
                    $user = Redis::hget('users',$id);
                    $user = json_decode($user);
                    $user->photo = $newName;
                    $user = json_encode($user);
                    redis::hset('users',$id,$user);
                    //返回文件的路径
                    return  $newName;
                } else {
                    //入库不成功删掉移动成功的头像
                    $newfile = public_path().'/uploads/user/'.$newName;
                    unlink($newfile);
                    return '修改失败';
                }

            }
            
        }
        return '修改失败';

    }

    /**
     * 用户信息修改
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return 成功返回用户列表页带提示信息，失败返回修改页带提示信息
     */
    public function postDoedit(request $request, $id)
    {
        $user = $request->except(['_token','old_photo','photo']);
        if(isset($user['password'])){
            $user['password'] = Hash::make($user['password']);
        }
        $res = Users::where('id',$id)->update($user);
        if($res){
            $user2 = Users::where('id',$id)->first();
            $user2 = json_encode($user2);
            Redis::hset('users',$id,$user2);
            return redirect('/admin/user')->with('success','修改成功');
        }
        return back()->with('error','修改失败');
    }

    /**
     * 状态修改
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return 用户id,用户状态
     */
    public function postUpdate(Request $request, $id)
    {
        //先修改数据库
        $res = Users::where('id',$request->uid)->update(['state'=>$request->state]);
        if($res){
            //数据库修改成功后修改redis中的数据
            $data = Redis::hget('users',$request->uid);
            $arr = json_decode($data);
            $arr->state = $request->state;
            $data = json_encode($arr);
            Redis::hset('users',$request->uid,$data);
            //修改成功后返回用户id,和状态
            return '{"uid":'.$request->uid.',"state":'.$request->state.'}'; 
        }
        return '修改失败';
    }

    /**
     * 用户删除
     *
     * @param  int  $id
     * @return 返回用户列表页和提示信息
     */
    public function postDestroy($id)
    {
        //开启事务
        DB::beginTransaction();
        //删除数据库
        $res = Users::where('id',$id)->delete();
        //判断数据库是否删除成功
        if($res){
            //成功后删除redis
            $res2 = Redis::hdel('users',$id);
            //判断redis是否删除成功
            if($res2){
                //成功后事务提交
                DB::commit();
                return '{"id":'.$id.',"str":"删除成功"}';
            }
            //失败后事务回滚
            DB::rollBack();
            return '删除失败';

        }
        return '删除失败';
    }
}
