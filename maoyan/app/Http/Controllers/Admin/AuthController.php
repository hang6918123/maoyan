<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Power;
use App\Models\UserPower;
class AuthController extends Controller
{
    /**
     * 权限设置
     *
     * @return 权限设置页面，一级权限
     */
    public function getIndex()
    {
        $data = Power::where('pid',0)->get();
        return view('admin.auth.index',['datas'=>$data]);
    }

    /**
     * 添加权限
     *
     * @return 提示信息
     */
    public function postCreate(request $request)
    {
        $power = $request->all();
        $power['pid'] = (int) $power['pid'];
        $res = Power::create($power);
        if($res){
            return '添加成功';
        }
        return '添加失败';
    }

    /**
     * 权限删除
     * @param \Illuminate\Http\Request  $request
     * @return   提示信息
     */
    public function postDelete(request $request)
    {
        $res = Power::where('id',$request->id)->delete();
        if($res){
            return '删除成功';
        }
        return '删除失败';
    }

    /**
     * 查找二级权限
     * @param \Illuminate\Http\Request  $request
     * @return   权限信息
     */
    public function postShow(request $request)
    {
        $data = Power::where('pid',$request->pid)->get();
        $data = json_encode($data);
        return $data;
    }

    /**
     * 用户岗位
     * 
     * @return   用户岗位页，所有岗位以及用户所属岗位
     */
    public function getEdit($id)
    {
        $powers = Power::where('pid',0)->get();
        $data = UserPower::where('uid',$id)->get(['power_id']);
        if($data->count()){
            foreach ($data as $v) {
                $arr[] = $v['power_id'];
            }
        } else {
            $arr = '';
        }
        
        return view('admin.auth.userPower',['powers'=>$powers,'userPower'=>$arr,'id'=>$id]);
    }

    /**
     * 用户岗位修改操作
     * 
     * @return   提示信息
     */
    public function postUpdate(request $request)
    {
        $action = $request->action;
        $data = $request->except('action');
        if ($action == 'add') {
            $res = UserPower::create($data);
            if ($res) {
                return '岗位添加成功';
            } else {
                return '岗位添加失败';
            }
        } else {
            $res = UserPower::where($data)->delete();
            if ($res) {
                return '岗位取消成功';
            } else {
                return '岗位取消失败';
            }
        }
    }
}
