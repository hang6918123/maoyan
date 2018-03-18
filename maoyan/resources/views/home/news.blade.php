@extends('home.layout')


@section('title')
热点首页
@endsection

@section('css')
<link rel="stylesheet" href="/home/css/common.4b838ec3.css"/>
<link rel="stylesheet" href="/home/css/news-hotnews.a01df872.css"/>
@endsection

@section('content')
<div class="subnav">
  <ul class="navbar">
    <li>
      <a class="active" href="/news">热点首页</a>
    </li>
    <li>
      <a href="/news/list">新闻资讯</a>
    </li>
  </ul>
</div>


<div class="container" id="app" class="page-news/hotNews" >
  <div class="hotIndex-container">
    <div class="index-news-container clearfix" style="height:500px;">
        <div class="popular-container">
          <h4 class="red">热门资讯</h4>
          <ul>
            @foreach($data as $k=>$v)
            @if($k == 0)
            <li class="top1-list">
              <div>
                <div class="top-info-thumb">
                  <a href="/news/one/{{$v['id']}}" target="_blank">
                    <img src="/uploads/news/{{$v['poster']}}">
                    <i class="ranking top-info-icon red-bg">{{$k+1}}</i>
                  </a>
                </div>
                <p class="top1-news-content">
                  <a href="/news/one/{{$v['id']}}" class="two-line" title="{{$v['title']}}" target="_blank">
                    {{$v['title']}}
                  </a>
                </p>
            </div>
          </li>
          @else
          <li class="">
            <div>
              <div class="normal-link">
                <i class="ranking red">{{$k+1}}</i>
                <p class="top10-news-content">
                  <a href="/news/one/{{$v['id']}}" target="_blank">{{$v['title']}}</a>
                </p>
              </div>            
            </div>
          </li>
          @endif
          @endforeach
        </ul>
      </div>

      <div class="latest-container">
        <h4 class="latest-header red">
          最新资讯
          <a href="/news/list" class="all-latest">
            全部
            <span class="arrow red-arrow"></span>
          </a>
        </h4>


        <div class="latest-content clearfix">
          @foreach($news as $v)
          <div class="latest-news-box">
            <a href="/news/one/{{$v['id']}}" target="_blank">
              <img src="/uploads/news/{{$v['poster']}}">
            </a>
            <p class="latest-news-title">
              <a href="/news/one/{{$v['id']}}" class="two-line" title="{{$v['title']}}" target="_blank">
                {{$v['title']}}
              </a>
            </p>
            <div class="info-container">
              <span>猫眼电影</span>
              <span class="images-view-count view-count">{{$v['reading']}}</span>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('js')
  <script>
    $('a[data-act=hotNews-click]').attr('class','active');
  </script>
@endsection