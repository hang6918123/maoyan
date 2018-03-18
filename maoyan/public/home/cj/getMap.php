<?php
	//1.实例化对象并且连接
	$redis = new Redis;
	$res = $redis -> connect('localhost','6379');
	$redis -> select(5);
	$data = $redis->smembers('maps');
	echo json_encode($data);
?>