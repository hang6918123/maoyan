<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Validator;
use App\Cinemas;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CinemanController extends Controller
{
//影院列表页面
    public function getIndex(Request $request)
    {

        $page = $request -> input('cineman_count',5);
        $search = $request -> input('cineman_seek','');
        // dd($request->all());
        if(!empty($search)){
           $cinema = Cinemas::orderBy('cinema_name','asc')
           ->where('cinema_name','like','%'.$search.'%')
           ->paginate($page);
        }else{

        $cinema = Cinemas::orderBy('id','asc')
        ->paginate($page);
        }
        

        // dd($cinema[0]);
        return view('admin/cineman/cineman',['cinema'=>$cinema]);
    }
//影院添加页面g
    public function getAdd(){
        
        return view('admin/cineman/cineman_add');
    }
//处理影院添加数据
    public function postStara(Request $request)
    {
        //判断添加数据
        //
        // dd($request->all());
        $input = $request->except(['_token']);

        $date = $this->validate($request, [
            'cineman_name' => 'required',
            'cineman_address' => 'required',
            'cineman_phone' => 'required',
            "cineman_province" => 'required',
            "cineman_country"=> 'required',
             "cineman_town" => 'required'
        ],[
            'cineman_name.required' => '电影院名字必填',
            'cineman_address.required' => '电影院地址必填',
            'cineman_phone.required' => '电影院联系方式必填',
            'cineman_province.required' => '地址必填',
            'cineman_country.required' => '地址必填',
            'cineman_country.required' => '地址必填'
        ]);
         $str = $input['cineman_province'].'-'.$input['cineman_country'].'-'.$input['cineman_town'].'-'.$input['cineman_address'];
        // $str = strlen($input['cineman_country']);
       
        // dd($str);
        $cinemas = new Cinemas;

        $cinemas->cinema_name = $input['cineman_name'];
        $cinemas->phone = $input['cineman_phone'];
        $cinemas->address = $str;
        
        
        $date = $cinemas->save();
        if($date){
            // return redirect('/admin/config')->with('msg', 'Update Success! 成功！ :)');
            return back()->with('mes','添加成功');
        }



    }
//影院状态
    public function getEdit($id)
    {
        $status = substr($id,0,1);

        $idd = trim(strrchr($id, '-'),'-');
        
        $status ? $status = '0' : $status = '1';
        $cinemas = Cinemas::find($idd);
        $cinemas->status = $status;
        $statu = $cinemas->save();
        if($statu){
            return back();
        }
    }
//影院修改页面
    public function getUpdate($id=0)
    {

        $cinema = Cinemas::find($id);

        return view('admin/cineman/cineman_edit',['cinema'=>$cinema]);
    }

//影院修改处理
    public function postAlter(Request $request)
    {
         $input = $request->except(['_token']);

        $date = $this->validate($request, [
            'cineman_name' => 'required',
            'cineman_address' => 'required',
            'cineman_phone' => 'required',
            "cineman_province" => 'required',
            "cineman_country"=> 'required',
             "cineman_town" => 'required'

        ],[
            'cineman_name.required' => '电影院名字必填',
            'cineman_address.required' => '电影院地址必填',
            'cineman_phone.required' => '电影院联系方式必填',
            'cineman_province.required' => '地址必填',
            'cineman_country.required' => '地址必填',
            'cineman_country.required' => '地址必填'
        ]);
         $str = $input['cineman_province'].'-'.$input['cineman_country'].'-'.$input['cineman_town'].'-'.$input['cineman_address'];
        // $str = strlen($input['cineman_country']);
       
        $id = $input['cineman_id'];
        $cinemas = Cinemas::find($id);
        $cinemas->cinema_name = $input['cineman_name'];
        $cinemas->phone = $input['cineman_phone'];
        $cinemas->address = $str;
        $cinemas->status = $input['cineman_gender'];
        
        
        $date = $cinemas->save();
        if($date){
            // return redirect('/admin/config')->with('msg', 'Update Success! 成功！ :)');
            return redirect('admin/cineman')->with('mes','修改成功');
        }
    }

//影院删除
    public function getDestroy($id)
    {
        $cinemas = Cinemas::find($id);
        $cinemas -> delete();
        return back()->with('mes','删除成功');
    }

//影院回收站
    public function getDelete(Request $request)
    {
         $page = $request -> input('cineman_count',5);
        $search = $request -> input('cineman_seek','');
        // dd($request->all());
        if(!empty($search)){
           $cinema = Cinemas::orderBy('cinema_name','asc')
           ->where('cinema_name','like','%'.$search.'%')
           ->onlyTrashed()
           ->paginate($page);
        }else{

            $cinema = Cinemas::orderBy('id','asc')
            ->onlyTrashed()
            ->paginate($page);
        
        }
        
       
        
        // dd($cinemas);
        return view('admin/cineman/cineman_delete',['cinema'=>$cinema]);
    }
//恢复被删除的影院
    public function getUp($id)
    {
        
        $date = Cinemas::withTrashed()

                ->where('id', $id)

                ->restore();
        if($date){
             return back()->with('mes','影院数据恢复成功');
         }else{
            return back()->with('mes','影院数据恢复失败');
         }
    }
            
//永久删除影院
    public function getDe($id=0)
    {
        
        $cinemas = Cinemas::where('id',$id)->first();
        if($cinemas){
            $cinemas = Cinemas::where('id',$id)->first();
        }else{
            $cinemas = Cinemas::where('id',$id)->onlyTrashed()->first();
        }
        
         
        $date = $cinemas->forceDelete();
        
            return back()->with('mes','影院数据永久删除成功');
       
        
        
    }
//修改页面影院搜索
    public function getSeek(Request $request)

    {
       $str =  $request->input('cineman_name');

       $number = intval($request->input('cineman_name'));

       
        if($number)
        {
           $cinema = Cinemas::where('id',$str)->first();
             
            if($cinema){

                return view('admin/cineman/cineman_edit',['cinema'=>$cinema]);
            }else{
               $cinema = Cinemas::where('id',$str)->onlyTrashed()->first();
               if($cinema){
                 return view('admin/cineman/cineman_edit',['cinema'=>$cinema]);
                 
               }else{

               return back()->with('mes','没有查到您想要找的id');
               }
            }
           
        }else{
           $cinema = Cinemas::where('cinema_name',$str)->first();
          
           if($cinema){
               
                return view('admin/cineman/cineman_edit',['cinema'=>$cinema]);
            
            }else{
               
                $cinema = Cinemas::where('cinema_name',$str)->onlyTrashed()->first();
                
                if($cinema){
                    
                return view('admin/cineman/cineman_edit',['cinema'=>$cinema]);
                
                }else{
                   return back()->with('mes','没有查到您想要找的电影院'); 
                }
            }
        }


}
}

