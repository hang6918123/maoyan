<?php
use App\Models\Cinemas;
/**
 * @param 1string 2strig 3mix 4.string
 *
 * @return json 
 */

function SEEK()
{


        $numargs = func_num_args();
         $args = func_get_args();
        if($numargs == 1){
            $one = func_get_arg(0);

            $cinema = Cinemas::where('address','like','%'.$one.'%')
                        ->get()
                        ->toArray();
        }elseif($numargs == 2){
            $one = $args[0];
            $two = $args[1];
            $cinema = Cinemas::where('address','like','%'.$one.'%')
                        ->where('address','like','%'.$two.'%')
                        ->get()
                        ->toArray();
        }elseif($numargs == 3){
            $one = $args[0];
            $two = $args[1];
            $cinema = Cinemas::where('address','like','%'.$one.'%')
                        ->where('address','like','%'.$two.'%')
                        ->get()
                        ->toArray();
        }elseif($numargs == 4){
            $one = $args[0];
            $two = $args[1];
            $cinema = Cinemas::where('address','like','%'.$one.'%')
                        ->where('cinema_movie','like','%'.$two.'%')
                        ->get()
                        ->toArray();
                        // return $cinema;
        }elseif($numargs == 5){
             $one = $args[0];
             $two = $args[1];
             $three = $args[2];
             $cinema = Cinemas::where('address','like','%'.$one.'%')
                            ->where('address','like','%'.$two.'%')
                            ->where('cinema_movie','like','%'.$three.'%')
                            ->get()
                            ->toArray();
        }
        
        if(!$cinema){
            return 0;
        }else{
            $address = [];
            $addresss = [];
            $str = []; 
            foreach($cinema as $key=>$value){
               array_push($address,cut_str($value['address'],'-',-3));
               array_push($addresss,cut_str($value['address'],'-',2));
               for($i=1;$i<=substr_count($value['cinema_movie'],',')+1;$i++){
                    if($i !== 1){
                      $str[] = cut_str($value['cinema_movie'],',',$i-1);
                    }
               };
            }

            $tst = array_unique(array_filter($str));
            $bb = array_unique($address);
            $aa = array_unique($addresss);
            //索引数组转关联数组
            $towb=[];
            $towa=[];
            for($i=0;$i<count($bb);$i++){
                $towb[rand(2,999)]=$bb[$i];
            }
            for($i=0;$i<count($aa);$i++){
                $towa[rand(2,999)]=$aa[$i];
            }
            $cinema['shi'] = $towb;
            $cinema['xz'] = $towa;
            $cinema['tst'] = $tst;
            
            if($numargs==2)
            {
                $cinema['auth']='1';
            }elseif($numargs==3)
            {  $par = func_get_arg(2);
                $cinema['auth']=$par;
            }elseif($numargs==4){
                $par = func_get_arg(2);
                $cinema['auth']=$par;
            }elseif($numargs==5){
                $par = func_get_arg(3);
                $cinema['auth']=$par;
            }

            
            
            $cinemas = json_encode($cinema);
            
            return $cinemas;
        }

}