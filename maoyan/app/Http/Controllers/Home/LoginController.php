<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use SmsManager;
use App\Models\Users;
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
            return redirect('user');
        }
        return view('home.login');
    }

     /**
     * 登录判断
     *
     * @return 网站首面
     */
    public function postJudge(request $request)
    {
        //验证数据
        $validator = Validator::make($request->all(), [
            'mobile'     => 'required|confirm_mobile_not_change|confirm_rule:mobile_required',
            'verifyCode' => 'required|verify_code',
            //more...
        ], [
            'mobile.required' => '手机号不能为空',
            'mobile.confirm_mobile_not_change' => '验证码已过期',
            'mobile.confirm_rule' => '手机号和验证码不匹配',
            'verifyCode.required' => '验证码不能为空',
            'verifyCode.verify_code' => '验证码不正确'
        ]);
        if ($validator->fails()) {
           //验证失败后建议清空存储的发送状态，防止用户重复试错
            SmsManager::forgetState();
            $request->flashOnly('mobile');
            return redirect()->back()->withErrors($validator);
        }

        $data = Users::where('phone',$request->mobile)->first();
        if($data == null){
        	$str = "QWERTYUIOPASDFGHJKLZXCVBNM1234567890qwertyuiopasdfghjklzxcvbnm";
			$name = substr(str_shuffle($str),26,10);
			$phone = $request->mobile; 
        	$user = new Users;
        	$user->name = $name;
        	$user->phone = $phone;
        	$res = $user->save();
        	if($res > 0){
                session()->put('home',true);
        		session()->put('user',['name' => $name,'phone' => $phone,'photo' => 'default.jpg']);
        		return redirect('/user');
        	} else {
        		$request->flashOnly('mobile');
        		return redirect()->back()->withErrors(['登陆失败']);
        	}

        }
        if($data->state == 1){
            $request->flashOnly('mobile');
            return redirect()->back()->withErrors(['此手机号已被禁用']);
        }
        
        session()->put('home',true);
        session()->put('user',['name' => $data->name,'phone' => $data->phone,'photo' => $data->photo]);
        return redirect('/user');

    }

}
