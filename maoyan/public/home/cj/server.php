<?php
	//1.实例化对象,并且连接
	$redis = new Redis;
	$res = $redis -> connect('localhost','6379');
	$redis -> select(5);
	$map = explode('#',$_GET['map_id']);
	foreach($map as $key => $value) {
		if($redis->sismember('maps',$value)) {
			echo $value.'该座位已经售出';
			exit;
		}
	}
	foreach ($map as $key => $value) {
		$redis -> sadd('maps',$value);
	}
	echo 'ok';