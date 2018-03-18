<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\UserPower;
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
        $uid = $request->session()->get('id');
        $data = UserPower::where('uid',$uid)->get();
        if($data->count() > 0){
            $arr = [];
            foreach ($data as $v) {
                $route = $v->power();
                if($route->count() > 0){
                    foreach($route as $r){
                        if($r['pid'] == '-1'){
                            return $next($request);
                        }
                        $arr = array_push($arr,$r['route']);
                    }
                }
            }
            $ask_method = basename(request()->route()->getActionName());
            if(in_array($ask_method,$arr)){
                return $next($request);
            }
        }
        return back(); 
    }
}
