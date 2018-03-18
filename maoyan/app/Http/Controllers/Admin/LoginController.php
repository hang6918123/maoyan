<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;
use Gregwar\Captcha\PhraseBuilder;
use Session;
use App\Models\Users;
use Hash;
class LoginController extends Controller
{
    /**
     * 后台登录
     *
     * @return 登录页面，网站标题
     */
    public function getIndex()
    { 
        return view('admin.login',['title'=>'后台登录']);
    }

    /**
     * 验证码
     */
    public function getCaptcha($tmp)
    {
        $phrase = new PhraseBuilder;
        // 设置验证码位数
        $code = $phrase->build(4);
        // 生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder($code, $phrase);
        // 设置背景颜色
        $builder->setBackgroundColor(220, 210, 230);
        $builder->setMaxAngle(25);
        $builder->setMaxBehindLines(0);
        $builder->setMaxFrontLines(0);
        // 可以设置图片宽高及字体
        $builder->build($width = 100, $height = 30, $font = null);
        // 获取验证码的内容
        $phrase = $builder->getPhrase();
        // 把内容存入session
        Session::flash('code', $phrase);
        // 生成图片   此处要设置浏览器不要缓存
        header("Cache-Control: no-cache, must-revalidate");
        header("Content-Type:image/jpeg");
        $builder->output();
    }

    /**
     * 后台登录处理
     * @param 用户登录信息
     * @return 登录页面，网站标题
     */
    public function postDo(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        $code = $request->code;
        if(trim($username) == null){
            return back()->with('error','账号不能为空');
        }
        if(trim($password) == null){
            return back()->with('error','密码不能为空');
        }
        if($code != Session::get('code')){
            return back()->with('error','验证码不正确');
        }
        $data = Users::where(['phone'=>$username,'auth'=>1,'state'=>0])->first();
        if($data == null){
            return back()->with('error','账号或密码不正确');
        }
         if(!Hash::check($password, $data->password)){
            return back()->with('error','密码不正确');
        }
        session()->put('admin',true);
        session()->put('a_id',$data['id']);
        session()->put('a_name',$data['name']);
        session()->put('a_photo',$data['photo']);
        return redirect('/admin/index');
    }

    /**
     *用户退出
     * 
     */
    public function getOut()
    {
        session()->forget('admin');
        session()->forget('a_id');
        session()->forget('a_name');
        session()->forget('a_phone');
        return back();
    }
}
