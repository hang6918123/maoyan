@extends('home/layouts.layout')
@section('css')
  <link rel="stylesheet" href="home/css/common.4b838ec3.css"/>
<link rel="stylesheet" href="/home/css/query-index.8f264800.css"/>
<link rel="stylesheet" href="/home/css/page.css"/>
  <script src="/home/js/stat.583e6097.js"></script>
    <script src="/home/js/jquery-3.3.1.min.js"></script>
@show
@section('content')
<div class="search-box">
  <form data-state-val="{kw:'s'}" class="search-form" data-actform="query-search-click">
    <input class="kw" type="text" name="kw" maxlength="32" value="{{$kw}}" placeholder="找影视剧、影人、影院" autocomplete="off">
    <button class="submit" type="submit"></button>
  </form>
</div>
<div class="subnav">
  <ul class="navbar">
    <li>
      <a data-act="subnav-click" data-val="{subnavClick:0}"
          data-state-val="{subnavId:0}"
          class="active" href="javascript:void(0);"
      >影视剧（{{count($data)}}）</a>
    </li>
    <!-- <li>
      <a data-act="subnav-click" data-val="{subnavClick:1}"
          href="/query?kw=s&amp;type=1"
      >影人（360）</a>
    </li>
    <li>
      <a data-act="subnav-click" data-val="{subnavClick:2}"
          href="/query?kw=s&amp;type=2"
      >影院（62）</a>
    </li> -->
  </ul>
</div>

@if($data != null)
    <div class="container" id="app" class="page-query/index" >
<div class="search-result-box">
      <dl class="movie-list">
        @foreach($data as $k => $v)
  <dd>
    <div class="movie-item">
      <a href="/films/{{$v['id']}}" target="_blank" data-act="movie-click" data-val="{movieid:347764}">
      <div class="movie-poster">
        <img class="poster-default" src="picture/loading_2.e3d934bf.png" />
        <img src="/upload/videos/{{$v['photo']}}" style="width:160px;height:220px;" />
      </div>
      </a>
        
        
      <div class="movie-ver"></div>
    </div>
    <div class="channel-detail movie-item-title" title="S">
      <a href="/films/347764" target="_blank" data-act="movies-click" data-val="{movieId:347764}">{{$v['name']}}</a>
    </div>
<div class="movie-item-subtitle"></div>
<div class="absolute-info">
     <div class="channel-detail channel-detail-orange"><span class="stonefont">{{count(films_think($v['id']))}}</span>人想看</div>

  <div class="movie-item-cat">{{$v['type']}}</div>
  <div class="movie-item-pub">{{$v['years']}}</div>
</div>
  
@endforeach

    
  
</dl>
<div class="pager">
  {!! $data->appends(['kw' =>$kw])->render() !!}
</div>
</div>
    </div>
@else
<div class="search-result-box">
    <div class="empty-list">

      <h3>很抱歉，没找到相关的影视剧</h3>
      <dl>
        <dt>小喵建议您：</dt>
        <dd>1. 请检查输入的关键词是否有误</dd>
        <dd>2. 请缩短关键词</dd>
      </dl>
    </div>
</div>
@endif
@endsection
@section('js')
<script type="text/javascript">
$('.pager .active').removeClass('active').css({'width':'32.21930px','height':'30px','background':'#ef4238'});;
$('.pagination .disabled').css({'width':'32.21930px','height':'30px','font-size':'1px'});

</script>
    <!-- <script src="/home/js/common.dc33ab40.js"></script> -->
<!-- <script src="/home/js/query-index.a6a615c4.js"></script> -->
<!-- <script type="text/javascript">
  $('.navbar li a:contains(首页)').addClass('active');
</script>
 <script src="/home/js/common.1faad3f9_1.js"></script>
<script src="/home/js/home-index.fb70025c_1.js"></script>
<script>
$('.channel-detail').removeClass('channel-detail channel-detail-orange').addClass('movie-score');
</script> -->
@endsection