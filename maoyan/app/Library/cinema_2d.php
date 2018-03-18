<?php
function array_unique_fb($array2D)
{  
	foreach ($array2D as $v)
	{   

		$v=join(',',$v);   
	    $temp[]=$v;  
	}  
	
	$temp=array_unique($temp);  
	
	foreach ($temp as $k => $v)
		{ 
		 $temp[$k]=explode(',',$v);  

		}  

	return $temp; 

} 