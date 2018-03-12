<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Orders;
use App\User;
use DB;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {   
        //接受页面传过来的参数
        $length = isset($_GET['Table_length']) ? $_GET['Table_length'] : 10;
        $where = isset($_GET['where']) ? $_GET['where'] : '';
        //判断显示条数说否合法
        ($length == 10 || $length == 20 || $length == 50) ? $length : 10; 
        ($where== 'name' ||$where == 'phone') ? $where : 'name';
        $search = isset($_GET['search']) ? $_GET['search'] : '';
            $order = DB::table('Users')->join('orders', 'users.id', '=', 'orders.uid');
            
        if($search != '' && $where != ''){
            //带搜索条件查询数据库
            if($where == 'name'){
                $data = $order->where('users.name', 'like','%'.$search.'%')->paginate($length);
            } else{
                $data = $order->where('users.phone','like','%'.$search.'%')->paginate($length);
            }
        }else{
            $data = $order->paginate($length);
        }
        return view('admin/orders/orders',['title'=>'订单列表','data'=>$data,'length'=>$length,'search'=>$search,'where'=>$where]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getInfo($id)
    {
        //
        $user = user::find($id);
        $orders = $user->orders;
        $data = [];
        foreach($orders as $k){
            $data = $k;
        }
        return view('/admin/orders/orinfo',['title'=>'用户订单详情','user'=>$user,'data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postOff(Request $request,$id)
    {
        //
        $data = orders::find($id);
        $data->state = 1;
        if($data -> save()){
            return back()->with('success','修改成功');
        }
        return back()->with('serror','修改失败');
    }
}
