@extends('home/layouts/layout')
@section('css')
<link rel="stylesheet" href="/home/css/board-index.92a06072.css"/>
<script src="/home/js/jquery-3.3.1.min.js"></script>
@show
@section('content')
<div class="container" id="app" class="page-board/index" >

<div class="content">
    <div class="wrapper">
        <div class="main">
            <p class="update-time">{{$time}}<span class="has-fresh-text">已更新</span></p>
            <p class="board-content">榜单规则：将昨日国内热映的影片，按照评分从高到低排列取前10名。相关数据来源于“麦票专业版”及“麦票电影库”。</p>
            <dl class="board-wrapper">
              @foreach($data as $k => $v)
                <dd>
                        <i class="board-index board-index-{{$k+1}}">{{$k+1}}</i>
    <a href="/films/{{$v['id']}}" title="红海行动" class="image-link" data-act="boarditem-click" data-val="{movieId:1182552}">
      <!-- <img src="/home/picture/loading_2.e3d934bf_1.png" alt="" class="poster-default" /> -->
      <img src="/upload/videos/{{$v['photo']}}" alt="红海行动" class="avatar" style="width:160px;height:200px;" />
    </a>
    <div class="board-item-main">
      <div class="board-item-content">
              <div class="movie-item-info">
        <p class="name"><a href="/films/1182552" title="红海行动" data-act="boarditem-click" data-val="{movieId:1182552}">{{$v['name']}}</a></p>
        <p class="star">
                主演:{{$v['star']}}
        </p>
<p class="releasetime">上映时间：{{$v['years']}}</p>    </div>
    <div class="movie-item-number score-num">
{!!score($v['films_score'])!!}       
    </div>

      </div>
    </div>
@endforeach
                </dd>
            </dl>

        </div>
    </div>
</div>

    </div>
<script type="text/javascript">
  $('.navbar li a:contains(榜单)').toggleClass('active');
</script>
@endsection
@section('js')
<script>
  $('.channel-detail').removeClass('channel-detail channel-detail-orange').addClass('score');
</script>
@endsection