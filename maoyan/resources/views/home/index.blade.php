@extends('home/layouts.layout')
@section('css')
<link rel="stylesheet" href="/home/css/home-index.705294ae_1.css"/>
<script src="/home/js/stat.583e6097_1.js"></script>
  <script src="/home/js/jquery-3.3.1.min.js"></script>
  <style type="text/css">
    .channel-detail i{
      margin-right: 0px;
    }
  </style>
@show
@section('content')
   

<div class="header-placeholder"></div>

<div class="banner">
  <div class="slider single-item slider-banner">
    @foreach($car as $k => $v)
  <a target="_blank" data-act="bannerNews-click" " data-bgUrl="{{$v['carousel_path']}}"></a>
  @endforeach
</div>

</div>

    <div class="container" id="app" class="page-home/index" >
<div class="content">
  <div class="aside">
    <div class="ranking-box-wrapper">
  <div class="panel">
    <div class="panel-header">
      <span class="panel-title">
        <span class="textcolor_red">今日票房</span>
      </span>
    </div>
    <div class="panel-content">
            <ul class="ranking-wrapper ranking-box">
      @foreach($box as $k => $v)
      @if($k == 0)
            <li  class="ranking-item ranking-top ranking-index-1">
      <a href="/films/{{$v['id']}}" target="_blank" data-act="ticketList-movie-click" data-val="{movieid:1182552}">
        <div class="ranking-top-left">
          <i class="ranking-top-icon"></i>
            <img class="ranking-img  default-img" data-src="/upload/videos/{{$v['photo']}}" />
        </div>
        <div class="ranking-top-right">
          <div class="ranking-top-right-main">
            <span class="ranking-top-moive-name">{{$v['name']}}</span>
              <p class="ranking-top-wish">
                  今日票房：<span class="stonefont">{{day_box($v['id'],'vid')}}</span>
              </p>
          </div>
        </div>
      </a>
    </li>
    @else
            <li class="ranking-item ranking-index-{{$k+1}}">
      <a href="/films/{{$v['id']}}" target="_blank" data-act="ticketList-movie-click" data-val="{movieid:344990}">
          <span class="normal-link">
            <i class="ranking-index">2</i>
            <span class="ranking-movie-name">{{$v['name']}}</span>

            <span class="ranking-num-info">
                 今日票房：<span class="stonefont">{{day_box($v['id'],'vid')}}</span>
              </span>
          </span>
      </a>
    </li>

  @endif
  @endforeach  

</ul>


    </div>
  </div>
    </div>

    <div class="box-total-wrapper clearfix">
        <h3>今日大盘</h3>
        <div>
          <p>
            <span class="num"><span class="stonefont"></span>{{day_box(0,'pan')}}</span>
          </p>
          <p class="meta-info">
            北京时间 {{date('Y-m-d H:i:s',time())}}
            <span class="pull-right">麦票专业版实时票房数据</span>
          </p>
        </div>
    </div>

    <div class="most-expect-wrapper">
  <div class="panel">
    <div class="panel-header">
      <span class="panel-more">
      </span>
      <span class="panel-title">
        <span class="textcolor_orange">最受期待</span>
      </span>
    </div>
    <div class="panel-content">
            <ul class="ranking-wrapper ranking-mostExpect">
      @foreach($think as $k => $v)
      @if($k == 0)
            <li  class="ranking-item ranking-top ranking-index-1">
      <a href="/films/{{$v['vid']}}" target="_blank" data-act="mostExpect-movie-click" data-val="{movieid:341138}">
        <div class="ranking-top-left">
          <i class="ranking-top-icon"></i>
            <img class="ranking-img  default-img" src="/upload/videos/{{$v['photo']}}" />
        </div>
        <div class="ranking-top-right">
          <div class="ranking-top-right-main">
            <span class="ranking-top-moive-name">{{$v['name']}}</span>

              <p class="ranking-release-time">上映时间：{{$v['years']}}</p>

              <p class="ranking-top-wish">
                  <span class="stonefont">{{$v['kk']}}</span>人想看
              </p>
          </div>
        </div>
      </a>
    </li>
    @else
            <li class="ranking-item ranking-index-{{$k+1}}">
      <a href="/films/{{$v['vid']}}" target="_blank" data-act="mostExpect-movie-click" data-val="{movieid:78460}">
          <i class="ranking-index">{{$k+1}}</i>
            @if($k<3)
          <span class="img-link">
            <img class="ranking-img default-img" src="/upload/videos/{{$v['photo']}}" /></span>
            @endif
          <div class="name-link ranking-movie-name">{{$v['name']}}</div>

          <span class="ranking-num-info"><span class="stonefont">{{$v['kk']}}</span>人想看</span>
      </a>
    </li>
    @endif
@endforeach

</ul>


    </div>
  </div>
    </div>

    <div class="top100-wrapper">
  <div class="panel">
    <div class="panel-header">
      <span class="panel-title">
        <span class="textcolor_orange">TOP 10</span>
      </span>
    </div>
    <div class="panel-content">
      @foreach($top as $k => $v)
      @if($k == 0)
            <ul class="ranking-wrapper ranking-top100">
            <li  class="ranking-item ranking-top ranking-index-1">
      <a href="/films/1203" target="_blank" data-act="TOP100-movie-click" data-val="{movieid:1203}">
        <div class="ranking-top-left">
          <i class="ranking-top-icon"></i>
            <img class="ranking-img  default-img" data-src="/upload/videos/{{$v['photo']}}" />
        </div>
        <div class="ranking-top-right">
          <div class="ranking-top-right-main">
            <span class="ranking-top-moive-name">{{$v['name']}}</span>


              <p class="ranking-top-wish">
                  <span class="stonefont">{{$v['films_score']}}</span>分
              </p>
          </div>
        </div>
      </a>
    </li>
    @else
            <li class="ranking-item ranking-index-{{$k+1}}">
      <a href="/films/1297" target="_blank" data-act="TOP100-movie-click" data-val="{movieid:1297}">
          <span class="normal-link">
            <i class="ranking-index">{{$k+1}}</i>
            <span class="ranking-movie-name">{{$v['name']}}</span>

            <span class="ranking-num-info">
                <span class="stonefont">{{$v['films_score']}}</span>分
              </span>
          </span>
      </a>
    </li>
    @endif
    @endforeach
           

</ul>


    </div>
  </div>
    </div>

  </div>
  <div class="mainn">
    <div class="movie-grid">
  <div class="panel">
    <div class="panel-header">
      <span class="panel-more">
        <a href="/films" class="textcolor_red" data-act="all-playingMovie-click">
          <span>全部</span>
        </a>
        <span class="panel-arrow panel-arrow-red"></span>
      </span>
      <span class="panel-title">
        <span class="textcolor_red">正在热映（{{count($films)}}）</span>
      </span>
    </div>
    <div class="panel-content">
            <dl class="movie-list">
  @foreach($films as $k => $v)
  <dd>
    <div class="movie-item">
      <a href="/films/{{$v['id']}}" target="_blank" data-act="playingMovie-click" data-val="{movieid:1182552}">
      <div class="movie-poster">
        <img class="poster-default" src="/home/picture/loading_2.e3d934bf_1.png" />
        <img data-src="/upload/videos/{{$v['photo']}}" style="width:100%;height:100%;" />
        <div class="movie-overlay movie-overlay-bg">
          <div class="movie-info">
          {!!score($v['films_score'])!!}
            <div class="movie-score"></div>
            <div class="movie-title movie-title-padding"
              title="红海行动" >{{$v['name']}}</div>
          </div>
        </div>
      </div>
      </a>
<div class="movie-detail movie-detail-strong movie-sale">
  <a href="/cinemas?movieId=1182552"
  class="active" data-act="salePlayingMovie-click" data-val="{movieid:1182552}" >购 票</a>
</div>
       @if(strrchr($v['language'],'3'))
      <div class="movie-ver"><i class="imax3d"></i></div>
      @endif
    </div>
  
  @endforeach
  
</dl>


    </div>
  </div>

  <div class="panel">
    <div class="panel-header">
      <span class="panel-more">
        <a href="/films" class="textcolor_blue" data-act="all-upcomingMovie-click">
          <span>全部</span>
        </a>
        <span class="panel-arrow panel-arrow-blue"></span>
      </span>
      <span class="panel-title">
        <span class="textcolor_blue">即将上映（{{count($yushou)}}）</span>
      </span>
    </div>
    <div class="panel-content">
            <dl class="movie-list">
  @foreach($yushou as $k => $v)
  <dd>
    <div class="movie-item">
      <a href="/films/{{$v['id']}}" target="_blank" data-act="upcomingMovie-click" data-val="{movieid:1196183}">
      <div class="movie-poster">
        <img class="poster-default" src="/home/picture/loading_2.e3d934bf_1.png" />
        <img data-src="/upload/videos/{{$v['photo']}}" style="width:100%;height: 100%" />
        <div class="movie-overlay movie-overlay-bg">
          <div class="movie-info">
            <div class="movie-title"
              title="翻滚吧姐妹" >{{$v['name']}}</div>
          </div>
        </div>
      </div>
      </a>
<div class="movie-detail movie-wish"><span class="stonefont">{{count(films_think($v['id']))}}</span>人想看</div>
      <div class="movie-ver"></div>
    </div>
    <div class="movie-detail movie-rt">{{$v['years']}}上映</div>
  @endforeach
  
</dl>


    </div>
  </div>

  <div class="panel">
    <div class="panel-header">
      <span class="panel-more">
        <a href="/films" class="textcolor_red" data-act="all-hotMovie-click">
          <span>全部</span>
        </a>
        <span class="panel-arrow panel-arrow-red"></span>
      </span>
      <span class="panel-title">
        <span class="textcolor_red">热播电影</span>
      </span>
         </div>
    <div class="panel-content">
            <dl class="movie-list">
    @foreach($hot as $k => $v)
  <dd>
    <div class="movie-item">
      <a href="/films/{{$v['id']}}" target="_blank" data-act="hotMovie-click" data-val="{movieid:78772}">
      <div class="movie-poster 
      @if($k == 0)
      movie-poster-long
      @endif
      ">
        <img class="poster-default" src="/home/picture/loading_2.e3d934bf_1.png" />
        <img data-src="/upload/videos/{{$v['photo']}}" style="width:100%;height: 100%;" />
        <div class="movie-overlay movie-overlay-bg">
          <div class="movie-info" id="hot">
            {!!score($v['films_score'])!!}
            <div class="movie-title movie-title-padding"
              title="闺蜜" >{{$v['name']}}</div>
          </div>
        </div>
      </div>
      </a>
       @if(strrchr($v['language'],'3'))
      <div class="movie-ver"><i class="imax3d"></i></div>
      @endif
    </div>
  @endforeach
</dl>


    </div>
  </div>
    </div>
  </div>
</div>
    </div>
@endsection
@section('js')
<script type="text/javascript">
  $('.navbar li a:contains(首页)').addClass('active');
</script>
 <script src="/home/js/common.1faad3f9_1.js"></script>
<script src="/home/js/home-index.fb70025c_1.js"></script>
<script>
$('.channel-detail').removeClass('channel-detail channel-detail-orange').addClass('movie-score');
</script>
@endsection