@extends('home/layouts.layout')
@section('css')
  

  

  <meta name="HandheldFriendly" content="true" />
  <meta name="format-detection" content="email=no" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <script src="/home/js/common.dc33ab40.js"></script>
	<script src="/home/js/cinemas-cinema.e0024071.js"></script> 
<script>
  cid = "c_93ziierd";
  ci = 1;
    window.system = {"cinemaImgs":[{"imgid":"288774842","url":"/home/ec9127ac73d519016c1f55a5cbfe4014566042.png","imgDesc":""}]};

  window.openPlatform = '';

  </script>

  <link rel="stylesheet" href="/home/css/common.4b838ec3.css"/>
<link rel="stylesheet" href="/home/css/cinemas-cinema.c339c8d8.css"/>
  
@endsection

   
  
  
 

@section('content')

  

  
<div class="header-placeholder"></div>

    <div class="banner cinema-banner">
  <div class="wrapper clearfix">
    <div class="cinema-left">
      <div class="avatar-shadow">
        <img class="avatar" src="/lunbo/2.jpg">
      </div>
    </div>

    <div class="cinema-main clearfix">
      <div class="cinema-brief-container">
        <h3 class="name text-ellipsis">{{$cinemas['name']}}</h3>
        <div class="address text-ellipsis">{{$cinemas['address']}}</div>
        <div class="telphone">电话：{{$cinemas['phone']}}</div>
        
        <div class="features-group">
          <div class="group-title">影院服务</div>

          <div class="feature">
            <span class="tag ">3D眼镜</span>
            <p class="desc text-ellipsis" title="免押金">免押金</p>
          </div>
          <div class="feature">
            <span class="tag ">儿童优惠</span>
            <p class="desc text-ellipsis" title="1.3m以下儿童观看2D普通电影免票，每个成年人仅限带一名儿童。">1.3m以下儿童观看2D普通电影免票，每个成年人仅限带一名儿童。</p>
          </div>
        </div>
      </div>
    </div>

    
  </div>
</div>


    <div class="container" id="app" class="page-cinemas/cinema" >
      <div class="movie-list-container" data-cinemaid="15280">
        <div class="movie-list">
@foreach($cinemas_videoss as $k=>$v)          
          <div 
            class="movie active" 
            data-index="0" 
            data-movieid="1204622" 
            data-bid="b_uup5nnq7" 
            data-act="cinema-movie-click"
            data-val="{city_id:1, movie_id:1204622, cinema_id:15280}"
          >
            <img src="/upload/videos/{{$v[7]}}" alt="">
          </div>
          
@endforeach			
          <span class="pointer"></span>
        </div>

        <span class="scroll-prev scroll-btn"></span>
        <span class="scroll-next scroll-btn"></span>
      </div>

      <div class="show-list active" data-index="0">

<div class="movie-info">

@foreach($cinemas_videoss as $k=>$v)
  <div>
    <h3 class="movie-name"></h3>

        <span class="score sc">{{$v[8]}}</span>

  </div>

  <div class="movie-desc">
  	<div>
      <span class="key">电影 :</span>
      <span class="value">{{$v[1]}}</span>
    </div>
    <div>
      <span class="key">时长 :</span>
      <span class="value">{{ceil($v[11]/60)}}分钟</span>
    </div>
    <div>
      <span class="key">类型 :</span>
      <span class="value">{{$v[2]}}</span>
    </div>
    <div>
      <span class="key">主演 :</span>
      <span class="value"> {{$v[5]}}</span>
    </div>
  </div>
@endforeach
</div>

<div class="show-date">
  <span>观影时间 :</span>
    <span 
      class="date-item active"
      data-index="0"
    >今天 3月16</span>
   </div>

  <div class="plist-container active">
      
<table class="plist">
  <thead>
    <tr>
      <th>放映时间</th>
      <th>电影</th>
      <th>语言版本</th>
      <th>放映厅</th>
      <th>售价（元）</th>
      <th>选座购票</th>
    </tr>
  </thead>
@foreach($cinemas_common as  $v)
  <tbody>
    <tr class="">
      <td>
        <span class="begin-time">{{$v['common_time']}}</span>
        
      </td>
      <td>
        <span class="lang">{{$v['common_video']}}</span>
        
      </td>
      <td>
        <span class="lang">{{$v['video_type']['language']}}</span>
      </td>
      <td>
        <span class="hall">{{$v['movie_type']}}号厅</span>
      </td>
      <td>
        <span class="sell-price">{{$v['video_type']['money']}}</span>
      </td>
      <td>
        <a href="/cinemas/writ/{{$v['id']}}-{{$v['video_type']['id']}}" 
          class="buy-btn normal"
          data-tip=""
          data-act="show-click"
          data-bid="b_gvh3l8gg"
          data-val="{movie_id: 1204622, cinema_id:15280}"
        >选座购票</a>
      </td>
    </tr>
  </tbody>
@endforeach

@if($cinemas_special)
 @foreach($cinemas_special as  $v)


  <tbody>
    <tr class="">
      <td>
        <span class="begin-time">{{$v['special_time']}}</span>
        
      </td>
      <td>
        <span class="lang">{{$v['special_video']}}</span>
        
      </td>
      <td>
        <span class="lang">{{$v['video_type']['language']}}</span>
      </td>
      <td>
        <span class="hall">{{$v['movie_type']}}</span>
      </td>
      <td>
        <span class="sell-price">{{$v['video_type']['money']}}</span>
      </td>
      <td>
        <a href="/cinemas/writ/{{$v['id']}}-{{$v['video_type']['id']}}" 
          class="buy-btn normal"
          data-tip=""
          data-act="show-click"
          data-bid="b_gvh3l8gg"
          data-val="{movie_id: 1204622, cinema_id:15280}"
        >选座购票</a>
      </td>
    </tr>
  </tbody>
@endforeach


@endif 
</table>
  </div>


      </div>
      


  
    </div>


    

</body>
</html>
  

@endsection

@section('js')
<script src="/home/js/jquery-3.3.1.min.js"></script>
<script>
	$('.movie-list div').click(function{
		console.log(11111);
		$('movie-list div').removeClass('movie active');
		$(this).addClass('movie active');
	})
</script>

@endsection