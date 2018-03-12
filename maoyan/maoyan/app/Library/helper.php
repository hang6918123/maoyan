<?php

//影片类型
function vtype(){

	return $vtype = ['爱情','喜剧','动画','剧情','恐怖','惊悚','科幻','动作','悬疑','犯罪','冒险','战争','奇幻','运动','家庭','古装','武侠','西部','历史','传记','情色','歌舞','黑色电影','短片','纪录片','其他'];
}

// 影片上映地区
function vregion(){
	return $vregion = ['大陆','美国','韩国','日本','中国香港','中国台湾','泰国','印度','法国','英国','俄罗斯','意大利','西班牙','德国','波兰','澳大利亚','伊朗','其他'];
}

//影片语言
function vlanguage(){
	return $vlanguage = ['国语2D','国语3D','英语2D','英语3D'];
}

function year(){
	return $year = ['2018以后','2018','2017','2016','2015','2014','2013','2012','2011','2000-2010','90年代','80年代','70年代','更早'];
}
//前台评分处理
function score($score){
	if(empty($score)){
		return '<div class="channel-detail channel-detail-orange">暂无评分</div>';
	}else{
		$arr = explode('.',$score);
		return '<div class="channel-detail channel-detail-orange"><i class="integer">'.$arr[0].'.</i><i class="fraction">'.$arr[1].'</i></div>';
	}
}
//影片状态
function state($v){
	if($v == 0){
	    return '停止售票';
	}elseif($v == 1){
	    return '售票';
	}elseif($v == 2){
	    return '预售票';
	}else{
	    return '状态错误';
	}
}
//判断$_GET内是多少数组并进行url拼接
function get_url($k,$v,$get,$id,$path){
			
			
}
//电影路径处理
//$get
function pth($get,$id,$path){
		if($id == 0){
			unset($get[$path]);
			return	http_build_query($get);
		}
		if (count($get)==0){
			$get[$path] = $id;
			return	http_build_query($get);
		}
	foreach($get as $k =>$v){
		if(count($get)==1){
			
			if($k == 'catId'){
				if($path == 'sourceId' || $path == 'yearId' || $path == 'sortId'){
					$get[$path] = $id;
					return http_build_query($get);
				}
				$get[$k] = $id;
				return http_build_query($get);
			}elseif($k == 'sourceId'){
				if($path == 'catId' || $path == 'yearId' || $path == 'sortId'){
					$get[$path] = $id;
				return http_build_query($get);
				}
				$get[$k] = $id;
				return http_build_query($get);
			}elseif($k == 'yearId'){
		
				if($path == 'catId' || $path == 'sourceId' || $path == 'sortId'){
					$get[$path] = $id;
				return http_build_query($get);
				}
				$get[$k] = $id;
				return http_build_query($get);
				
			}elseif($k == 'sortId'){
				if($path == 'catId' || $path == 'sourceId' || $path == 'yearId'){
					$get[$path] = $id;
				return http_build_query($get);
				}
				$get[$k] = $id;
				return http_build_query($get);
			}
		}
		if(count($get)==2){
			
			if($k == 'catId'){
			if($path == 'sourceId' || $path == 'yearId' || $path == 'sortId'){
				$get[$path] = $id;
			return http_build_query($get);
			}
			$get[$k] = $id;
			return http_build_query($get);
		}elseif($k == 'sourceId'){
			if($path == 'catId' || $path == 'yearId' || $path == 'sortId'){
				$get[$path] = $id;
			return http_build_query($get);
			}
			$get[$k] = $id;
			return http_build_query($get);
		}elseif($k == 'yearId'){
	
			if($path == 'catId' || $path == 'sourceId' || $path == 'sortId'){
				$get[$path] = $id;
			return http_build_query($get);
			}
			$get[$k] = $id;
			return http_build_query($get);
			
		}elseif($k == 'sortId'){
			if($path == 'catId' || $path == 'sourceId' || $path == 'yearId'){
				$get[$path] = $id;
			return http_build_query($get);
			}
			$get[$k] = $id;
			return http_build_query($get);
		}		
		}
		if(count($get)==3){
			
			if($k == 'catId'){
			if($path == 'sourceId' || $path == 'yearId' || $path == 'sortId'){
				$get[$path] = $id;
			return http_build_query($get);
			}
			$get[$k] = $id;
			return http_build_query($get);
		}elseif($k == 'sourceId'){
			if($path == 'catId' || $path == 'yearId' || $path == 'sortId'){
				$get[$path] = $id;
			return http_build_query($get);
			}
			$get[$k] = $id;
			return http_build_query($get);
		}elseif($k == 'yearId'){
	
			if($path == 'catId' || $path == 'sourceId' || $path == 'sortId'){
				$get[$path] = $id;
			return http_build_query($get);
			}
			$get[$k] = $id;
			return http_build_query($get);
			
		}elseif($k == 'sortId'){
			if($path == 'catId' || $path == 'sourceId' || $path == 'yearId'){
				$get[$path] = $id;
			return http_build_query($get);
			}
			$get[$k] = $id;
			return http_build_query($get);
		}
		}
		if(count($get)==4){
			
			if($k == 'catId'){
			if($path == 'sourceId' || $path == 'yearId' || $path == 'sortId'){
				$get[$path] = $id;
			return http_build_query($get);
			}
			$get[$k] = $id;
			return http_build_query($get);
		}elseif($k == 'sourceId'){
			if($path == 'catId' || $path == 'yearId' || $path == 'sortId'){
				$get[$path] = $id;
			return http_build_query($get);
			}
			$get[$k] = $id;
			return http_build_query($get);
		}elseif($k == 'yearId'){
	
			if($path == 'catId' || $path == 'sourceId' || $path == 'sortId'){
				$get[$path] = $id;
			return http_build_query($get);
			}
			$get[$k] = $id;
			return http_build_query($get);
			
		}elseif($k == 'sortId'){
			if($path == 'catId' || $path == 'sourceId' || $path == 'yearId'){
				$get[$path] = $id;
			return http_build_query($get);
			}
			$get[$k] = $id;
			return http_build_query($get);
		}
		}
	}
}