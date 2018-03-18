<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use SmsManager;
use App\Models\Users;
use Redis;
class LoginController extends Controller
{
    /**
     * 显示登录页
     *
     * @return 登录页面
     */
    public function getIndex()
    {
        if(session()->has('home')){
            return redirect('/');
        }
        return view('home.login');
    }

     /**
     * 登录处理
     *
     * @return 成功返回网站首面,失败返回登录页
     */
    public function postJudge(request $request)
    {
        // //验证数据
        // $validator = Validator::make($request->all(), [
        //     'mobile'     => 'required|confirm_mobile_not_change|confirm_rule:mobile_required',
        //     'verifyCode' => 'required|verify_code',
        //     //more...
        // ], [
        //     'mobile.required' => '手机号不能为空',
        //     'mobile.confirm_mobile_not_change' => '验证码已过期',
        //     'mobile.confirm_rule' => '手机号和验证码不匹配',
        //     'verifyCode.required' => '验证码不能为空',
        //     'verifyCode.verify_code' => '验证码不正确'
        // ]);
        // if ($validator->fails()) {
        //    //验证失败后建议清空存储的发送状态，防止用户重复试错
        //     SmsManager::forgetState();
        //     $request->flashOnly('mobile');
        //     return redirect()->back()->withErrors($validator);
        // }
        //判断数据库是否有此用户
        $data = Users::where('phone',$request->mobile)->first();
        if($data == null){
            //没有就自动注册
        	$str = "QWERTYUIOPASDFGHJKLZXCVBNM1234567890qwertyuiopasdfghjklzxcvbnm";
			$name = substr(str_shuffle($str),26,10);
			$phone = $request->mobile; 
        	$user = new Users;
        	$user->name = $name;
        	$user->phone = $phone;
        	$res = $user->save();
        	if($res > 0){
                //注册成功压入SESSION
                session()->put('home',true);
                session()->put('id',$user->id);
        		session()->put('name',$name);
                session()->put('phone',$phone);
                session()->put('photo','default.jpg');
                //压入redis
                $datas = Users::find($user->id);
                $datas = json_encode($datas);
                Redis::hset('users',$user->id,$datas);
        		return redirect('/');
        	} else {
                //注册失败就返回
        		$request->flashOnly('mobile');
        		return redirect()->back()->withErrors(['登陆失败']);
        	}

        }
        //查看账号是否被禁用
        if($data->state == 1){
            $request->flashOnly('mobile');
            return redirect()->back()->withErrors(['此手机号已被禁用']);
        }
        //注册过就把信息直接压入session
        session()->put('home',true);
        session()->put('id',$data->id);
        session()->put('name',$data->name);
        session()->put('phone',$data->phone);
        session()->put('photo',$data->photo);

        return redirect('/');

    }

    /**
     * 退出登录
     *
     * @return 上次页面
     */
    public function getOut()
    {
        session()->forget('home');
        session()->forget('id');
        session()->forget('name');
        session()->forget('phone');
        session()->forget('photo');
        return back();
    }

}
