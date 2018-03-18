@extends('home/layouts.layout')
@section('css')
    <link rel="stylesheet" href="/home/css/cinemas-list.81574a4d.css"/>

    <link rel="stylesheet" href="/home/css/movie-list.ffb4de4a.css"/>
    <link rel="stylesheet" href="/home/css/common.4b838ec3_1.css"/>
    <link rel="stylesheet" href="/home/css/movie-list.ffb4de4a.css"/>
      
      <script src="/home/js/jquery-3.3.1.min.js"></script>

@endsection

@section('content')
   

<div class="container" id="app" class="page-cinemas/list" >
  <div class="tags-panel">
    <ul class="tags-lines">
    
      

      
        <li class="tags-line" data-type="brand">
          <div class="tags-title">市:</div>
          <ul class="tags" name="shi">
            <li class="active">
              全部
            </li>
            
          </ul>
        </li>
        <li >
          <div class="tags-title">行政区:</div>
          <ul class="tags" name="xz">
            <li class="active">
              <a  href="#" >全部</a>
            </li>
            
          </ul>
        </li>
        <li class="tags-line tags-line-border" data-type="hallType">
          <div class="tags-title">特殊厅:</div>
          <ul class="tags" name="ts">
            <li class="active">
              <a  href="#" >全部</a>
            </li>

          
          </ul>
        </li>
    </ul>
  </div>

  <div class="cinemas-list">
 
  </div>

<div class="cinema-pager">
    
  
  <ul class="list-pager">



  
      <li class="active">
    <a class="page_1" href="javascript:void(0);" style="cursor: default">1</a>
  

      <li>  <a class="page_2"
            href="?offset=12"
        >下一页</a>
      </li>
  </ul>


</div>

<script id="comment-form-container" type="text/template">
  <form id="comment-form" data-val="{movieid:}">
    <div class="score-msg-container ">
        <div class="score"><span class="num"></span>分</div>
        <div class="score-message"></div>
        <div class="no-score">
          请点击星星评分
        </div>
    </div>
    <div class="score-star-contaienr">
      <ul class="score-star clearfix" data-score="">
    <li>
<i class="half-star left "></i><i class="half-star right "></i>    </li>
    <li>
<i class="half-star left "></i><i class="half-star right "></i>    </li>
    <li>
<i class="half-star left "></i><i class="half-star right "></i>    </li>
    <li>
<i class="half-star left "></i><i class="half-star right "></i>    </li>
    <li>
<i class="half-star left "></i><i class="half-star right "></i>    </li>
</ul>

    </div>
    <div class="content-container">
      <textarea placeholder="快来说说你的看法吧" name="content" id="" cols="30" rows="10"></textarea>
      <span class="word-count-info"></span>
    </div>
    <input type="hidden" name="score" />
    <input class="btn" type="submit" value="提交" data-act="comment-submit-click" />
  </form>
  <div class="close">×</div>
</script>
    </div>
<script type="text/javascript">
  $('.navbar li a:contains(影院)').toggleClass('active');
</script>
@endsection
@section('js')
<script>

    $('.city-container').on({
          mouseover: function(){
              $(this).attr('class','city-container active');
          },
          mouseout: function(){
               $(this).attr('class','city-container');
          }
      });
 function ergodic(date){
  var str = '';
               if(date == 0){
                 
                 str= str+'<div class="no-cinemas">抱歉，没有找到相关结果，请尝试用其他条件筛选。</div>';
   
              }else{
                
                 var obj = JSON.parse(date);
                 
                 var key;
                 for(key in obj){
                  
                    if(key !== 'shi' && key !== 'tst' && key !== 'xz' && key !== 'auth'){
                      if(obj[key].status == 1){
                        str = str+'<div class="cinema-cell"><div class="cinema-info"><a href="/cinemas/details/'+obj[key].id+' "class="cinema-name" data-act="cinema-name-click" data-bid="b_4tkpau4m" data-val="{city_id: 1, cinema_id: 15280}">'+obj[key].cinema_name+'</a><p class="cinema-address">'+obj[key].address+'</p></div><div class="buy-btn"><a href="/cinemas/details/'+obj[key].id+'"  data-act="buy-btn-click" data-val="{city_id: 1, cinema_id: 5736}" data-bid="b_4tkpau4m">选座购票</a></div><div class="price"><span class="rmb red">￥</span><span class="price-num red"><span class="stonefont">'+obj[key].cinema_money+'</span></span><span>起</span></div></div></div>'
                      }
                      
                    }
                 }
                 //遍历shi
                 var shi = obj['shi'];
                 var shii = '';
                 for(key in shi){
                      shii += '<li class=""><a  href="javascript:void(0)" >'+shi[key]+'</a></li>';
                 }
                 //遍历xz
                 var xz = obj['xz'];
                 var xzz = '';
                 for(key in xz){
                        xzz += '<li class=""><a  href="javascript:void(0)" >'+xz[key]+'</a></li>';
                 }
                 //遍历tst
                var tst = obj['tst'];
                var tstt = '';
                for(key in tst){
                    tstt += '<li class=""><a  href="javascript:void(0)" >'+tst[key]+'</a></li>';
                  }
                }

              $('.cinemas-list').html('<h2 class="cinemas-list-header">影院列表</h2>').append(str); 
              

              if(obj.auth == 1){

                $('ul[name=xz]').html('<li class="active"><a  href="javascript:void(0)" >全部</a></li>').append(xzz);
                $('ul[name=ts]').html('<li class="active"><a  href="javascript:void(0)" >全部</a></li>').append(tstt);
                return;
              }else if(obj.auth == 2){

                $('ul[name=ts]').html('<li class="active"><a  href="javascript:void(0)" >全部</a></li>').append(tstt);
                return;
              }else if(obj.auth == 3){
                return;
              }else{
                // console.log(obj['auth']);
              $('ul[name=shi]').html('<li class="active"><a  href="javascript:void(0)" >全部</a></li>').append(shii);
              $('ul[name=xz]').html('<li class="active"><a  href="javascript:void(0)" >全部</a></li>').append(xzz);
              $('ul[name=ts]').html('<li class="active"><a  href="javascript:void(0)" >全部</a></li>').append(tstt);
                return;
            }
 }  
 $(document).ready(function(){
  $('#BJ').trigger('click');
});
    
var a;
    $("a[class=js-city-name]").click(function(){
        
        a = $(this).html();   
        
         $.get("/cinemas/address",{'name':a},function(date){
                
               ergodic(date);
          });
   
    });
//ajax查询2级标签
var oneS;
var oneSS;
    $('ul[name=shi]').delegate('li','click',function(){
       
       $('ul[name=shi]>li').attr('class','');
       $(this).attr('class','active');
       oneSS = $(this).find('a').html();

       if(oneSS == '全部'){
         oneS = oneSS;
    }else{
       oneS = a +'-'+ $(this).find('a').html();
       // console.log(oneS);

    }
      
      $.get("/cinemas/seeks",{"name":oneS},function(date){

         ergodic(date);

      })


    });
//ajax查询3级标签
var twoS;
var twoSS;
    $('ul[name=xz]').delegate('li','click',function(){

       $('ul[name=xz]>li').attr('class','');
       $(this).attr('class','active');
       twoSS = $(this).find('a').html();
      
      if(twoSS == '全部'){
          if(oneS == '全部'){
            twoS = '2';

          }else{
            twoS = '1';

          }
        }else{
           twoS = a +'-'+$(this).find('a').html();

        }
        $.get("/cinemas/seekt",{"name":twoS},function(date){

         ergodic(date);

      })

    });
//ajax查询4级标签
var threeS;

    $('ul[name=ts]').delegate('li','click',function(){

       $('ul[name=ts]>li').attr('class','');
       $(this).attr('class','active');
       threeS = $(this).find('a').html();
       var threeSe = '';
       
       if(oneSS == '全部' && twoSS == '全部' && threeS == '全部'){
            return;
        }else if(oneSS !== '全部' && twoSS == '全部' && threeS == '全部'){
          $('ul[name=xz]').trigger('click');
        }else if(oneSS == '全部' && twoSS == '全部' && threeS !== '全部'){
              threeSe = a +'-'+$(this).find('a').html();
        }else if(twoSS == '全部' && threeS !== '全部'){
             threeSe = a +'-'+$(this).find('a').html(); 

        }else if(twoSS !== '全部' && threeS == '全部' ){
          return;
        }else if(twoSS !== '全部' && threeS !== '全部'){
             threeS = a +'-'+twoSS+'-'+$(this).find('a').html(); 
        }else{
             threeS = a +'-'+twoSS+'-'+$(this).find('a').html()
        }
        $.get("/cinemas/seekte",{'name':threeS,'sex':threeSe},function(date){

         ergodic(date);

      })
    
    });

//ajax查询数据库的地址信息
     
      

</script>

@endsection