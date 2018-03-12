<?php

/**
 * [cinema_exist description]
 * @param  [type] string [电影id或者名字]
 * @return [type]              [不存在返回上一页]
 */
return function cinema_exist($cinema_name){


       $str =  $request->input("$cinema_name");

       $number = intval($request->input("$cinema_name"));

       
        if($number)
        {
           $cinema = Cinemas::where('id',$str)->first();
             
           $movies = explode(',',(substr($cinema['cinema_movie'],strpos($cinema['cinema_movie'],',')+1)));


            if($cinema){

                
            }else{
               $cinema = Cinemas::where('id',$str)->onlyTrashed()->first();
               if($cinema){
                 
                 
               }else{

               return back()->with('mes','没有查到您想要找的id');
               }
            }
           
        }else{
           $cinema = Cinemas::where("$cinema_name",$str)->first();
          
           if($cinema){
                
               $movies = explode(',',(substr($cinema['cinema_movie'],strpos($cinema['cinema_movie'],',')+1))); 
                
                
            
            }else{
               
                $cinema = Cinemas::where("$cinema_name",$str)->onlyTrashed()->first();
                
                if($cinema){
                    
                
                
                }else{
                   return back()->with('mes','没有查到您想要找的电影院'); 
                }
            }
        }
}