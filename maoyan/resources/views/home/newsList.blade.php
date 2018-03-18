@extends('home.layouts.layout')


@section('title')
新闻资讯
@endsection

@section('css')
<link rel="stylesheet" href="/home/css/common.4b838ec3.css"/>
<link rel="stylesheet" href="/home/css/news-hotnews.a01df872.css"/>
<!-- <link rel="stylesheet" href="/bootstrap-3.3.7-dist/css/bootstrap.css"> -->
<style>
  .pagination {
    display: inline-block;
    padding-left: 0;
    margin: 20px 0;
    border-radius: 4px;
    margin-top: 25px;
    margin-bottom: 10px;
  }
  .pagination>li {
    display: inline;
  }
  .pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover {
    z-index: 3;
    color: #fff;
    cursor: default;
    background-color: #337ab7;
    border-color: #337ab7;
  }
  .pagination>li>a, .pagination>li>span {
    position: relative;
    float: left;
    padding: 6px 12px;
    margin-left: -1px;
    line-height: 1.42857143;
    color: #337ab7;
    text-decoration: none;
    background-color: #fff;
    border: 1px solid #ddd;
  }
</style>
@endsection

@section('content')
<div class="subnav">
  <ul class="navbar">
    <li>
      <a href="/news">热点首页</a>
    </li>
    <li>
      <a class="active" href="/news/list">新闻资讯</a>
    </li>
  </ul>
</div>


<div class="container" id="app" class="page-news/hotNews" style="height:1370px;">
  <div class="detail-container">
    <div class="news-container">
      @foreach($news as $v)
      <div class="news-box clearfix">
        <a class="news-img" href="/news/one/{{$v['id']}}" target="_blank">
          <img src="/uploads/news/{{$v['poster']}}">
        </a>
        <div class="news-content ">
          <h4 class="news-header one-line">
            <a href="/news/one/{{$v['id']}}" target="_blank">{{$v['title']}}</a>
          </h4>
          <div class="latestNews-text">{{$v['descride']}}</div>
          <div class="info-container">
            <span class="news-source">猫眼电影</span>
            <span class="news-date">{{date('m-d',$v['pubdate'])}}</span>
            <span class="images-view-count view-count">{{$v['reading']}}</span>
          </div>
        </div>
      </div>
      @endforeach
    </div>
      {!!$news->render()!!}
  </div>
</div>


@endsection

@section('js')
  <script>
    $('a[data-act=hotNews-click]').attr('class','active');
  </script>
@endsection