<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\UserPower;
use App\Models\Power;

class PowerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //获取当前路由和方法
        $ask_method = basename(request()->route()->getActionName());
        //给管理员后台首页通用权限
        if($ask_method == 'IndexController@index'){
            return $next($request);
        }

        //查看岗位
        $uid = $request->session()->get('a_id');
        $data = UserPower::where('uid',$uid)->get();
        if($data->count()){

	        foreach($data->all() as $k){
	            $route = $k->power;
	            if($route->count() > 0){
	                foreach($route as $r){
	                    if($r->pid == '-1'){
	                        return $next($request);
	                    }
	                    $arr[] = $r->route;
	                }
	            }
	        }
	        //看是否有权限
	        if(in_array($ask_method,$arr)){
	            return $next($request);
	        }
	    }        
        return back(); 
    }
}
