<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\cinemas;
use App\Models\videos;
use App\Models\Movie;
use App\Http\Requests;
use DB;
use App\Http\Controllers\Controller;

class MovieController extends Controller
{
    /**
     * @param   void
     *
     * @return 返回影厅查找页面
     */
    public function getIndex()
    {
        return view('admin/movie/movie_add',['common'=>'','special'=>[]]);
    }
    /**
     * @param   id
     * 
     * @return 返回影院数据
     */
    public function getList($id)
     {	
   
    	$movies = Cinemas::find($id)->toArray();
    	
    	//普通厅数量
    	$common = intval(explode(',',$movies['cinema_movie'])[0]);
    	//特殊厅转数组
    	$special = explode(',',(substr($movies['cinema_movie'],strpos($movies['cinema_movie'],',')+1)));
    	
    	return view('admin/movie/movie',['common'=>$common,'special'=>$special,'movies'=>$movies ]);
    }
    /**
     * @param   id
     * 
     * @return 返回影院数据
     */
    public function getSeek(Request $request)
     {	
     	$input = $request->all();
    	
     	dd($input);

    	if(intval($input['movie_name'])){
    		$movies = Cinemas::find($input['movie_name']);
    	}else{
    		
    		$movies = Cinemas::where('cinema_name',$input)->first()->toArray();

    	}
    	//普通厅数量
    	$common = intval(explode(',',$movies['cinema_movie'])[0]);
    	//特殊厅转数组
    	$special = explode(',',(substr($movies['cinema_movie'],strpos($movies['cinema_movie'],',')+1)));
    	
    	return view('admin/movie/movie',['movies'=>$movies,'common'=>$common,'special'=>$special]);
    
    }
	/**
	 * @param  影厅里上架的电影和开播时间
	 * @return 
	 */
    public function postAdd(Request $request)
    {
    	$input = $request->except('_token');
    	$id = $input['cinema_id'];
    	$input = $request->except('cinema_id','_token');
    	//判断提交的电影在数据库里是否存在
    	
    	
    	$i = 1;
    	$arr = [];
    	$arrr = [];
    	foreach($input as $k=>$v){
    		++$i;
    		if($i%2 == 0){
				$arr[$k] = $v[0];
    		}else{
    			$arrr[$k] = $v[0];
    		}
    		
    	}
    	$video = array_filter(array_values($arr));
    	
  		foreach($video as $k=>$v){
    		
  			
  			$videos = Db::table('videos')->where('name',"$v")->first();
  				
  			


  		}
  			if($videos){ 
					
  			}else{
  				return back()->with('mes','没有查到您想要添加的电影');

  			}

  		//查看电影是否重复添加
  		$cinema = Cinemas::find($id);
  		$common = [];

		$in = $cinema->moviess;
		foreach($in as $k=>$v){
			$common[] = $v['movies_common'];
			$common[] = $v['movies_special'];
		}

		if(!(array_intersect($video,array_filter($common)))){

		$arr = array_filter($arr);
    		$i = -1;
    		foreach($arr as $k=>$v){
    			++$i;
    			if(intval($k)){
    				$movie[$i]['movies_type'] = "$k";
    				$movie[$i]['movies_common'] = $v;
    				$movie[$i]['movies_common_time'] = array_values($arrr)[$i];
    				$movie[$i]['cinemas_id'] = $id;
    			} else {
    				$movie[$i]['movies_type'] = $k;
    				$movie[$i]['movies_special'] = $v;
    				$movie[$i]['movies_special_time'] = array_values($arrr)[$i];
    				$movie[$i]['cinemas_id'] = $id;
    			}
    		}
    		

    		foreach($movie as $v){
    			Movie::create($v);

    		}
   
    		return back()->with('mss','添加电影成功');
    	}else{
    		return back()->with('mse','不能重复添加电影');
    	}
    }
//电影下架
    public function getDelete()
    {

    	return view('admin.movie.movie_edit',['cinema'=>[],'input'=>[]]);
    }
//电影下架查找
    public function getVseek(Request $request)
    {   
    	$inputt = $request->except('_token');
    	$page = $request -> input('cineman_count',5);
        $search = $request -> input('cineman_seek','');

        $input = [];
	           if(intval($inputt['cinema_name'])){
		    		
	    		
		    		$cineman = Movie::where('cinemas_id',$inputt['cinema_name'])
	    						->paginate($page);
		    		if(!$cineman){
		    			return back()->with('mse','请检查输入的id是否正确');
		    		}
		    		
		    		$input['id'] = $inputt['cinema_name'];
		    		$input['name'] = Cinemas::find($inputt['cinema_name'])->cinema_name;
	    	}else{
	    		$cinema = Cinemas::where('cinema_name',$inputt['cinema_name'])->first()->toArray();
	    		$cineman = Movie::where('cinemas_id',$cinema['id'])
	    						->paginate($page);
	    		if(!$cineman){
		    			return back()->with('mse','请检查输入的电影院是否正确');
		    		}				
	    		
	    		$input['name'] = $inputt['cinema_name'];
	    		$input['id'] = $cinema['id'];
	    		
	    	}
      

    	
    	

    	return view('admin.movie.movie_edit',['cinema'=>$cineman,'input'=>$input]);
    }
//影厅电影下架操作
    public function getEdit($id)
    {
    	Movie::find($id)->delete();

    	return back()->with('mse','删除成功');
	}

}