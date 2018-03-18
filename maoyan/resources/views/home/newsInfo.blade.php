@extends('home.layout')


@section('title')
{{$data['title']}}
@endsection

@section('css')
<link rel="stylesheet" href="/home/css/common.4b838ec3.css"/>
<link rel="stylesheet" href="/home/css/news-detail.8be10f92.css"/>
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
<div class="container" id="app" class="page-news/detail" >
  <div class="news-page">
    <div class="news-main">
      <div class="news-title">
        <h1>{{$data['title']}}</h1>
        <div class="news-subtitle">
          猫眼电影&nbsp;&nbsp;
          {{date('m-d H:i',$data['pubdate'])}}&nbsp;&nbsp;
          <span class="news-icon-views"></span>
          {{$data['reading']}}
        </div>
      </div>
      <div class="news-content">
        {!! $data['content'] !!}
      </div>    
      <div class="news-action">
        <span class="news-action-block like-news" id="laub" data="{{$data['id']}}">
          <span class="like-icon"></span>&nbsp;&nbsp;
          <span class="like-news-count">
            {{$data['laub_num']}}
          </span>
        </span>
        <div style="display: inline-block; position: relative;" id="share_news">
          <div class="news-action-block share-banner">
            <span class="share-banner-icon"></span>&nbsp;&nbsp;分 享
          </div>
          <div style="position: absolute; top: 42px; left: 0px; z-index: 10; display: none;" id="share_news_case">
            <div class="share-board">
              <div class="share-qrcode">
                <div class="share-qrcode-desc">QQ / 微信扫码</div>
                <div class="share-qrcode-img" title="http://m.maoyan.com/information/35406?_v_=yes">
                  <canvas width="90" height="90" style="display: none;"></canvas>
                  <img alt="Scan me!" src="data:image/png;base64,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" style="display: block;">
                </div>
              </div>
              <div class="share-list">
                <a target="_blank" class="share-icon share-icon-douban" data-act="news-share-douban" data-val="{ newsid:35406}" href="https://www.douban.com/share/service/?href=http%3A%2F%2Fmaoyan.com%2Ffilms%2Fnews%2F35406&amp;name=%E5%A5%A5%E6%96%AF%E5%8D%A1%E6%9C%80%E4%BD%B3%E5%BD%B1%E7%89%87%E6%B0%B4%E5%BD%A2%E7%89%A9%E8%AF%AD%EF%BC%8C%E5%91%A8%E6%B7%B1%E7%8C%AE%E5%94%B1%EF%BC%8C%E4%BD%9F%E5%A4%A7%E4%B8%BA%E5%A4%AB%E5%A6%87%E6%89%93call%20-%20%E7%8C%AB%E7%9C%BC%E7%94%B5%E5%BD%B1" title="分享到豆瓣">豆瓣</a>
                <a target="_blank" class="share-icon share-icon-qzone" data-act="news-share-qqzone" data-val="{ newsid:35406}" href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=http%3A%2F%2Fmaoyan.com%2Ffilms%2Fnews%2F35406&amp;summary=%E5%A5%A5%E6%96%AF%E5%8D%A1%E6%9C%80%E4%BD%B3%E5%BD%B1%E7%89%87%E6%B0%B4%E5%BD%A2%E7%89%A9%E8%AF%AD%EF%BC%8C%E5%91%A8%E6%B7%B1%E7%8C%AE%E5%94%B1%EF%BC%8C%E4%BD%9F%E5%A4%A7%E4%B8%BA%E5%A4%AB%E5%A6%87%E6%89%93call%20-%20%E7%8C%AB%E7%9C%BC%E7%94%B5%E5%BD%B1&amp;pics=http%3A%2F%2Fp0.meituan.net%2Fmovie%2F1faa4669e98557897f82a3fc50b0a04054996.jpg%40750w_1l" title="分享到QQ空间">QQ空间</a>
                <a target="_blank" class="share-icon share-icon-renren" data-act="news-share-renren" data-val="{ newsid:35406}" href="http://widget.renren.com/dialog/share?resourceUrl=http%3A%2F%2Fmaoyan.com%2Ffilms%2Fnews%2F35406&amp;srcUrl=http%3A%2F%2Fmaoyan.com%2Ffilms%2Fnews%2F35406&amp;description=%E5%A5%A5%E6%96%AF%E5%8D%A1%E6%9C%80%E4%BD%B3%E5%BD%B1%E7%89%87%E6%B0%B4%E5%BD%A2%E7%89%A9%E8%AF%AD%EF%BC%8C%E5%91%A8%E6%B7%B1%E7%8C%AE%E5%94%B1%EF%BC%8C%E4%BD%9F%E5%A4%A7%E4%B8%BA%E5%A4%AB%E5%A6%87%E6%89%93call%20-%20%E7%8C%AB%E7%9C%BC%E7%94%B5%E5%BD%B1&amp;pic=http%3A%2F%2Fp0.meituan.net%2Fmovie%2F1faa4669e98557897f82a3fc50b0a04054996.jpg%40750w_1l" title="分享到人人网">人人网</a>
                <a target="_blank" class="share-icon share-icon-weibo" data-act="news-share-weibo" data-val="{ newsid:35406}" href="http://v.t.sina.com.cn/share/share.php?appkey=375875218&amp;url=http%3A%2F%2Fmaoyan.com%2Ffilms%2Fnews%2F35406&amp;title=%E5%A5%A5%E6%96%AF%E5%8D%A1%E6%9C%80%E4%BD%B3%E5%BD%B1%E7%89%87%E6%B0%B4%E5%BD%A2%E7%89%A9%E8%AF%AD%EF%BC%8C%E5%91%A8%E6%B7%B1%E7%8C%AE%E5%94%B1%EF%BC%8C%E4%BD%9F%E5%A4%A7%E4%B8%BA%E5%A4%AB%E5%A6%87%E6%89%93call%20-%20%E7%8C%AB%E7%9C%BC%E7%94%B5%E5%BD%B1&amp;pic=http%3A%2F%2Fp0.meituan.net%2Fmovie%2F1faa4669e98557897f82a3fc50b0a04054996.jpg%40750w_1l" title="分享到新浪微博">新浪微博</a>
                <a target="_blank" class="share-icon share-icon-tweibo" data-act="news-share-tweibo" data-val="{ newsid:35406}" href="http://v.t.qq.com/share/share.php?appkey=51d04b4824744e71bd1e55baceb42562&amp;url=http%3A%2F%2Fmaoyan.com%2Ffilms%2Fnews%2F35406&amp;title=%E5%A5%A5%E6%96%AF%E5%8D%A1%E6%9C%80%E4%BD%B3%E5%BD%B1%E7%89%87%E6%B0%B4%E5%BD%A2%E7%89%A9%E8%AF%AD%EF%BC%8C%E5%91%A8%E6%B7%B1%E7%8C%AE%E5%94%B1%EF%BC%8C%E4%BD%9F%E5%A4%A7%E4%B8%BA%E5%A4%AB%E5%A6%87%E6%89%93call%20-%20%E7%8C%AB%E7%9C%BC%E7%94%B5%E5%BD%B1&amp;pic=http%3A%2F%2Fp0.meituan.net%2Fmovie%2F1faa4669e98557897f82a3fc50b0a04054996.jpg%40750w_1l" title="分享到腾讯微博">腾讯微博</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div style="height:170px;width:800px"></div>
    </div>
  </div>
</div>
@endsection

@section('js')
<script>
  $('#share_news_case').on({
    mouseover: function() {
      $(this).css('display','block');
    },
    mouseout: function() {
      $(this).css('display','none');
    }
  });
  $('#share_news').on({
    mouseover: function() {
      $('#share_news_case').css('display','block');
    },
    mouseout: function() {
      $('#share_news_case').css('display','none');
    }
  });

  $('#laub').click(function(){
  	var id = $(this).attr('data');
  	var num = $('.like-news-count').html();
  	$.ajax({
  		headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
  		url: '/news/laub',
  		type: 'post',
  		data: {'id':id},
  		dataType: 'json',
  		success: function(data) {
  			if(data.num == 1){
  				$('.like-news-count').html(++num);
  			}
  			alert(data.str);
  		},
  		error: function(XMLHttpRequest, textStatus, errorThrown) {
  			alert('点赞失败，请明天再来');
  		}
  	});
  });
</script>
@endsection