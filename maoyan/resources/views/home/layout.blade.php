<!DOCTYPE html>

<!--[if IE 8]><html class="ie8"><![endif]-->
<!--[if IE 9]><html class="ie9"><![endif]-->
<!--[if gt IE 9]><!--><html><!--<![endif]-->
<head>
  <title>
	@section('title')
	@show
  </title>
  
	<meta charset="utf-8">
	<meta name="keywords" content="电影,电视剧,票房,美剧,猫眼电影,电影排行榜,电影票,经典电影,在线观看">
	<meta name="description" content="国内观众优选的在线购票平台，用户流行的观影决策平台。">
	<meta http-equiv="cleartype" content="yes" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="renderer" content="webkit" />

	<meta name="HandheldFriendly" content="true" />
	<meta name="format-detection" content="email=no" />
	<meta name="format-detection" content="telephone=no" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="/home/images/maoyan.ico" type="image/x-icon"/>
	@section('css')
	@show
</head>
<body>

<div class="header">
  <div class="header-inner">
        <a href="/" class="logo" data-act="icon-click"></a>
        <div class="city-container" data-val="{currentcityid:1 }">
            <div class="city-selected">
                <div class="city-name">
                  北京
                  <span class="caret"></span>
                </div>
            </div>
            <div class="city-list" data-val="{ localcityid: 1 }">
                <div class="city-list-header">定位城市：<a class="js-geo-city">北京</a></div>
                <ul>
                    <li>
                        <div>
                          <a class="js-city-name" href="/{{Request::path()}}">阿拉善盟</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="nav">
            <ul class="navbar">
                <li><a href="/" data-act="home-click"  class="active"  >首页</a></li>
                <li><a href="/films" data-act="movies-click" >电影</a></li>
                <li><a href="/cinemas" data-act="cinemas-click" >影院</a></li> 
                
                <li><a href="/board" data-act="board-click" >榜单</a></li>
                <li><a href="/news" data-act="hotNews-click" >热点</a></li>
            </ul>
        </div>
		@if(session()->has('home'))
		<div class="user-info">
            <div class="user-avatar has-login">
              <img class="user_photo" src="/uploads/user/{{session()->get('photo')}}">
              <span class="caret"></span>
              <ul class="user-menu">
                <li class="text">
                  <a href="/profile/orders">我的订单</a>
                </li>
                <li class="text login-name"><a href="/user">基本信息</a></li>
                <li class="text"><a href="/login/out" class="J-logout" data-act="logout-click">退出登录</a></li>
              </ul>
            </div>
        </div>
		@else
		<div class="user-info">
            <div class="user-avatar J-login">
				<img class="user_photo" src="/uploads/user/{{session()->get('photo')}}">
				<span class="caret"></span>
				<ul class="user-menu">
					<li><a href="javascript:void 0">登录</a></li>
				</ul>
            </div>
        </div>
		@endif
        <form action="/query" target="_blank" class="search-form" data-actform="search-click">
            <input name="kw" class="search" type="search" maxlength="32" placeholder="找影视剧、影人、影院" autocomplete="off">
            <input class="submit" type="submit" value="">
        </form>

        <div class="app-download">
          <a href="/app" target="_blank">
            <span class="iphone-icon"></span>
            <span class="apptext">APP下载</span>
            <span class="caret"></span>
            <div class="download-icon">
                <p class="down-title">扫码下载APP</p>
                <p class='down-content'>选座更优惠</p>
            </div>
          </a>
        </div>
  </div>
</div>
<div class="header-placeholder"></div>
@section('content')
@show
<div class="footer">
    <p class="friendly-links">
        友情链接 :
        <a href="http://www.meituan.com" data-query="utm_source=wwwmaoyan" target="_blank">美团网</a>
        <span></span>
        <a href="http://i.meituan.com/client" data-query="utm_source=wwwmaoyan" target="_blank">美团下载</a>
    </p>
    <p>
        &copy;2016
        猫眼电影 maoyan.com
        <a href="https://tsm.miit.gov.cn/pages/EnterpriseSearchList_Portal.aspx?type=0&keyword=京ICP证160733号&pageNo=1" target="_blank">京ICP证160733号</a>
        <a href="http://www.miibeian.gov.cn" target="_blank">京ICP备16022489号-1</a>
        京公网安备 11010502030881号
        <a href="/about/licence" target="_blank">网络文化经营许可证</a>
        <a href="http://www.meituan.com/about/rules" target="_blank">电子公告服务规则</a>
    </p>
    <p>北京猫眼文化传媒有限公司</p>
</div>
</body>
</html>
<script src="/public/js/jquery-3.3.1.min.js"></script>
<script>
    $('.city-container').on({
        mouseover: function(){
            $(this).attr('class','city-container active');
        },
        mouseout: function(){
             $(this).attr('class','city-container');
        }
    });
</script>
@section('js')

@show