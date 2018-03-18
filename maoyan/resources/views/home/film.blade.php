@extends('home/layouts.layout')
@section('css')
<link rel="stylesheet" href="/home/css/movie-list.ffb4de4a.css"/>
<link rel="stylesheet" href="/home/css/movie-detail.40d4116c.css"/>
<!-- <script src="/home/js/stat.583e6097.js"></script> -->
  <script src="/home/js/jquery-3.3.1.min.js"></script>
   <script>
  cid = "c_47wrcgg";
  ci = {{$video['id']}};
val = {"id":1182552};    window.system = {"user":{"id":{{session('id')}},"token":"Bka0sj9ncK53_2I-GnZxkExFBqIAAAAAfgUAAL7ysfsSe3f3nlZQpI23ak_BCoP8Erw15QuE63H844OIepy_o6Eoa0ZDFduPHuhTKg","username":"一颗悸动不安的心","profile":{"age":"25","avatarType":255,"avatarurl":"https://img.meituan.net/avatar/e62dc7b4abb1441b786e2b1a07281cbe12457.jpg","birthday":631123200000,"currentExp":0,"gender":1,"id":76685590,"juryLevel":0,"maoyanAge":"4","nextTitle":"","nickName":"一颗悸动不安的心","registerTime":1394013983000,"roleType":0,"ticketCount":5,"title":"青铜会员","topicCount":0,"totalExp":130,"uid":1217754262,"userLevel":1,"userNextLevel":2,"username":"一颗悸动不安的心","vipType":0,"visitorCount":0},"isProfessional":false},"uid":76685590,"movieId":"1182552","imgs":[""],"myComment":{}};

  window.openPlatform = '';

  </script>
  <link rel="stylesheet" href="css/common.4b838ec3.css"/>
<link rel="stylesheet" href="css/movie-detail.40d4116c.css"/>
  <!-- <script src="js/stat.583e6097.js"></script> -->
  <script>if(window.devicePixelRatio >= 2) { document.write('<link rel="stylesheet" href="css/image-2x.8ba7074d.css"/>') }</script>
<script>
  window.mta && mta('tag', 'page', '/films/-id-')
</script>
  <style>
    @font-face {
      font-family: stonefont;
      /*src: url('//vfile.meituan.net/colorstone/3ff9e92aa4c19f3354ffc6ede390e7913168.eot');*/
      /*src: url('//vfile.meituan.net/colorstone/3ff9e92aa4c19f3354ffc6ede390e7913168.eot?#iefix') format('embedded-opentype'),*/
           /*url('//vfile.meituan.net/colorstone/884a752dc3e4260d0e9c0a186a383e0c2080.woff') format('woff');*/
    }

    .stonefont {
      font-family: stonefont;
    }
  </style>
@show
@section('content')
<div class="banner">
    <div class="wrapper clearfix">
      <div class="celeInfo-left">
        <div class="avatar-shadow">
          <img class="avatar" src="/upload/videos/{{$video['photo']}}" alt="">
            <div class="movie-ver">
         @if(strrchr($video['language'],'3'))
        <i class="imax3d"></i>
        @endif
        </i></div>
        </div>
      </div>

      <div class="celeInfo-right clearfix">
            <div class="movie-brief-container" >
      <h3 class="name">{{$video['name']}}</h3>
      <ul>
        <li class="ellipsis">{{$video->type}}</li>
        <li class="ellipsis">
        {{$video->region}}
          / {{ceil(($video->time)/60)}}分钟
        </li>
        <li class="ellipsis">{{$video->years}}{{$video->region}}上映</li>
      </ul>
    </div>
        @if(session('home'))
    <div class="action-buyBtn">
      <div class="action clearfix" data-val="{movieid:1182552}">
        @if($user['think']==1)
        <a class="wish ">
          <div>
              <span class="wish-msg" data-act="wish-click">已想看</span>
          </div>
        </a>
            @else
            <a class="wish " onclick="think({{session('id')}},{{$video->id}})">
          <div>
              <span class="wish-msg" data-act="wish-click">想看</span>
          </div>
        </a>
            @endif
             @if($user['u_score'] > 0)
        <a class="" data-bid="b_rxxpcgwd">
          <div>
            <span class="score-btn-msg" data-act="comment-open-click">
                {{pingfen($user['u_score'])}}
            </span>
          </div>
        </a>
            @else
             <a class="score-btn" data-bid="b_rxxpcgwd">
          <div>
            <span class="score-btn-msg" data-act="comment-open-click">
                评分
            </span>
          </div>
        </a>
        @endif
      </div>
       @if($video->state ==1)
        <a class="btn buy" href="/cinemas?movieId=1182552" target="_blank">立即购票</a>
      @endif
    </div>
        @else
       <div class="action-buyBtn" id="buyBtn">
      <div class="action clearfix" data-val="{movieid:1182552}">
        <a class="wish " data-wish="false" data-score="" data-bid="b_gbxqtw6x">
          <div>
              <span class="wish-msg" data-act="wish-click">想看</span>
          </div>
        </a>
        <a class="" >
          <div>
            <span class="score-btn-msg" data-act="comment-open-click">
                评分
            </span>
          </div>
        </a>
      </div>
        <a class="btn buy">立即购票</a>
    </div>
        @endif

    <div class="movie-stats-container">

        <div class="movie-index">
          <p class="movie-index-title">用户评分</p>
          <div class="movie-index-content score normal-score">
              <span class="index-left info-num ">
                <span class="stonefont">{{$video->films_score}}</span>
              </span>
              <div class="index-right">
                
              </div>
          </div>
        </div>

        

        <div class="movie-index">
          <p class="movie-index-title">累计票房</p>
          <div class="movie-index-content box">
              <span class="stonefont">{{$video['box_office']}}</span><span class="unit"></span>
          </div>
        </div>
    </div>

      </div>
    </div>
</div>


    <div class="container" id="app" class="page-movie/detail" >
<div class="main-content-container clearfix">
  <div class="main-content">
    <div class="tab-container">
      <div class="tab-title-container clearfix">
        <div class="tab-title active" data-act="tab-desc-click">介绍</div>
        <!-- <div class="tab-title " data-act="tab-celebrity-click">演职人员</div>
        <div class="tab-title tab-disabled" data-act="tab-award-click">奖项</div>
        <div class="tab-title " data-act="tab-img-click">图集</div> -->
      </div>
      <div class="tab-content-container">
        <div class="tab-desc tab-content active" data-val="{tabtype:'desc'}">

  <div class="module">
    <div class="mod-title">
      <h3>剧情简介</h3>
    </div>
    <div class="mod-content">
      <span class="dra">{{$video->films_content}}</span>
    </div>
  </div>


  <!-- <div class="module">
    <div class="mod-title">
      <h3>演职人员</h3>
        <a class="more" href=#celebrity data-act="all-actor-click">全部</a>
    </div>
    <div class="mod-content">
                      <div class="celebrity-container clearfix" >

                    <div class="celebrity-group">
  <div class="celebrity-type">
    导演
  </div>
  <ul class="celebrity-list clearfix">
      <li class="celebrity " data-act="celebrity-click" data-val="{celebrityid:28977}">
  <a href="/films/celebrity/28977" target="_blank" class="portrait">
    <img class="default-img" data-src="/home/picture/5164df8a84f61a24e299401ddc71cd2c33989.jpg@128w_170h_1e_1c" alt="">
  </a>
  <div class="info">
    <a href="/films/celebrity/28977" target="_blank" class="name">
      林超贤
    </a>
  </div>
</li>

  </ul>
</div>


                    <div class="celebrity-group">
  <div class="celebrity-type">
    演员
  </div>
  <ul class="celebrity-list clearfix">
      <li class="celebrity actor" data-act="celebrity-click" data-val="{celebrityid:29481}">
  <a href="/films/celebrity/29481" target="_blank" class="portrait">
    <img class="default-img" data-src="/home/picture/dadfcd14fbee019d05a3daf2a978340c122723.jpg@128w_170h_1e_1c" alt="">
  </a>
  <div class="info">
    <a href="/films/celebrity/29481" target="_blank" class="name">
      张译
    </a>
      <br /><span class="role">饰：杨锐</span>
  </div>
</li>

      <li class="celebrity actor" data-act="celebrity-click" data-val="{celebrityid:2151749}">
  <a href="/films/celebrity/2151749" target="_blank" class="portrait">
    <img class="default-img" data-src="/home/picture/b52aa7d2ccd46a5ff10c1dede232230b140046.jpg@128w_170h_1e_1c" alt="">
  </a>
  <div class="info">
    <a href="/films/celebrity/2151749" target="_blank" class="name">
      黄景瑜
    </a>
      <br /><span class="role">饰：顾顺</span>
  </div>
</li>

      <li class="celebrity actor" data-act="celebrity-click" data-val="{celebrityid:357068}">
  <a href="/films/celebrity/357068" target="_blank" class="portrait">
    <img class="default-img" data-src="/home/picture/b9e72fed100880e2866bc55562052ab351758.jpg@128w_170h_1e_1c" alt="">
  </a>
  <div class="info">
    <a href="/films/celebrity/357068" target="_blank" class="name">
      杜江
    </a>
      <br /><span class="role">饰：徐宏</span>
  </div>
</li>

      <li class="celebrity actor" data-act="celebrity-click" data-val="{celebrityid:28363}">
  <a href="/films/celebrity/28363" target="_blank" class="portrait">
    <img class="default-img" data-src="/home/picture/4c6a90236904c61187f5c30ca85d9b2933123.jpg@128w_170h_1e_1c" alt="">
  </a>
  <div class="info">
    <a href="/films/celebrity/28363" target="_blank" class="name">
      海清
    </a>
      <br /><span class="role">饰：夏楠</span>
  </div>
</li>

  </ul>
</div>

                </div>

    </div>
  </div> -->



  <!-- <div class="module">
    <div class="mod-title">
      <h3>图集</h3>
        <a class="more" href=#img data-act="all-photo-click">全部</a>
    </div>
    <div class="mod-content">
                    <div class="album clearfix" data-act="movie-img-click">
                    <div class="img1"><img class="default-img" data-src="/home/picture/8f82fa412f64976640fe723f148e1379528609.jpg@465w_258h_1e_1c" alt=""></div>
                    <div class="img2"><img class="default-img" data-src="/home/picture/7493f196d9c809166234bb9c027061ef618105.jpg@126w_126h_1e_1c" alt=""></div>
                    <div class="img3"><img class="default-img" data-src="/home/picture/9bda307f59820d65c4fd53b4daec28c9695920.jpg@126w_126h_1e_1c" alt=""></div>
                    <div class="img4"><img class="default-img" data-src="/home/picture/40c7cbc49d7516ef4a5c617d58e2b9d4610595.jpg@126w_126h_1e_1c" alt=""></div>
                    <div class="img5"><img class="default-img" data-src="/home/picture/9b55ba6ce15295925b56ea8366430058739951.jpg@126w_126h_1e_1c" alt=""></div>
              </div>

    </div>
  </div> -->

<div class="module">
    <div class="mod-title">
      <h3>影片主演</h3>
    </div>
    <div class="mod-content">
                    <span class="dra">{{$video->star}}</span>

    </div>
  </div>
  <div class="module">
    <div class="mod-title">
      <h3>热门短评</h3>
    </div>
    @if($score != null)
    @foreach($score as $k =>$v)
    <div class="mod-content">
                  <div class="comment-list-container" data-hot=10>

<ul>
    <li class="comment-container " data-val="{commentid:139153177}">
      <div class="portrait-container">
        <div class="portrait">
          <img src="/uploads/user/{{$v['photo']}}" alt="">
        </div>
        <!-- <i class="level-1-icon"></i> -->
      </div>
      <div class="main ">
        <div class="main-header clearfix">
          <div class="user">
            <span class="name">{{$v['name']}}</span>
            
              <!-- <span class='tag'>购</span> -->
          </div>
          <div class="time">
            <span title="2018-02-16 10:49:11">{{substr($v['create'],0,10)}}</span>
            <ul class="score-star clearfix" data-score="5">
            {!!score($v['u_score'])!!}
          </div>
          @if(session('id'))
          @if(strrpos($zan,$video->id.session('id').$v['id']))
          <div class="approve active" id="user" data-id="{{$v['id']}}">
            <i data-act="comment-approve-click" class="approve-icon"></i><span class="num">{{$v['zan']+1}}</span>
          </div>
          @else
          <div class="approve" id="user" data-id="{{$v['id']}}">
            <i data-act="comment-approve-click" class="approve-icon"></i><span class="num">{{$v['zan']}}</span>
          </div>
          @endif
          @endif
        </div>
        <div class="comment-content">{{$v['u_content']}}</div>
      </div>
    </li>
    
</ul>

            </div>
    </div>
  @endforeach
    @else
    <div class="no-comment">
                  <div class="no-comment-pic"></div>
                  <span>暂无最新短评</span>
                </div>
    @endif
  </div>
        </div>
        <div class="tab-celebrity tab-content" data-val="{tabtype:'celebrity'}">
          <div class="celebrity-container" >
                <div class="celebrity-group">
 <!--  <div class="celebrity-type">
>>>>>>> be38cc6651baac4bf4b4bc894bef58982365bc22
    导演
      <span class="num">（1）</span>
  </div>
  <ul class="celebrity-list clearfix">
      <li class="celebrity " data-act="celebrity-click" data-val="{celebrityid:28977}">
  <a href="/films/celebrity/28977" target="_blank" class="portrait">
    <img class="default-img" data-src="/home/picture/5164df8a84f61a24e299401ddc71cd2c33989.jpg@128w_170h_1e_1c" alt="">
  </a>
  <div class="info">
    <a href="/films/celebrity/28977" target="_blank" class="name">
      林超贤
    </a>
  </div>
</li>

  </ul>
</div>

                <div class="celebrity-group">
  <div class="celebrity-type">
    演员
      <span class="num">（11）</span>
  </div>
  <ul class="celebrity-list clearfix">
      <li class="celebrity actor" data-act="celebrity-click" data-val="{celebrityid:29481}">
  <a href="/films/celebrity/29481" target="_blank" class="portrait">
    <img class="default-img" data-src="/home/picture/dadfcd14fbee019d05a3daf2a978340c122723.jpg@128w_170h_1e_1c" alt="">
  </a>
  <div class="info">
    <a href="/films/celebrity/29481" target="_blank" class="name">
      张译
    </a>
      <br /><span class="role">饰：杨锐</span>
  </div>
</li>

      <li class="celebrity actor" data-act="celebrity-click" data-val="{celebrityid:2151749}">
  <a href="/films/celebrity/2151749" target="_blank" class="portrait">
    <img class="default-img" data-src="/home/picture/b52aa7d2ccd46a5ff10c1dede232230b140046.jpg@128w_170h_1e_1c" alt="">
  </a>
  <div class="info">
    <a href="/films/celebrity/2151749" target="_blank" class="name">
      黄景瑜
    </a>
      <br /><span class="role">饰：顾顺</span>
  </div>
</li>

      <li class="celebrity actor" data-act="celebrity-click" data-val="{celebrityid:357068}">
  <a href="/films/celebrity/357068" target="_blank" class="portrait">
    <img class="default-img" data-src="/home/picture/b9e72fed100880e2866bc55562052ab351758.jpg@128w_170h_1e_1c" alt="">
  </a>
  <div class="info">
    <a href="/films/celebrity/357068" target="_blank" class="name">
      杜江
    </a>
      <br /><span class="role">饰：徐宏</span>
  </div>
</li>

      <li class="celebrity actor" data-act="celebrity-click" data-val="{celebrityid:28363}">
  <a href="/films/celebrity/28363" target="_blank" class="portrait">
    <img class="default-img" data-src="/home/picture/4c6a90236904c61187f5c30ca85d9b2933123.jpg@128w_170h_1e_1c" alt="">
  </a>
  <div class="info">
    <a href="/films/celebrity/28363" target="_blank" class="name">
      海清
    </a>
      <br /><span class="role">饰：夏楠</span>
  </div>
</li>

      <li class="celebrity actor" data-act="celebrity-click" data-val="{celebrityid:29660}">
  <a href="/films/celebrity/29660" target="_blank" class="portrait">
    <img class="default-img" data-src="/home/picture/bc115e53a2e163ac11221fe8ddde98f271098.jpg@128w_170h_1e_1c" alt="">
  </a>
  <div class="info">
    <a href="/films/celebrity/29660" target="_blank" class="name">
      蒋璐霞
    </a>
      <br /><span class="role">饰：佟莉</span>
  </div>
</li>

      <li class="celebrity actor" data-act="celebrity-click" data-val="{celebrityid:360222}">
  <a href="/films/celebrity/360222" target="_blank" class="portrait">
    <img class="default-img" data-src="/home/picture/4b245d5d5ccba276d07c3729af41e26431155.jpg@128w_170h_1e_1c" alt="">
  </a>
  <div class="info">
    <a href="/films/celebrity/360222" target="_blank" class="name">
      尹昉
    </a>
      <br /><span class="role">饰：李懂</span>
  </div>
</li>

      <li class="celebrity actor" data-act="celebrity-click" data-val="{celebrityid:358337}">
  <a href="/films/celebrity/358337" target="_blank" class="portrait">
    <img class="default-img" data-src="/home/picture/dec01deddbe22a5e4a22d01c27cd2b1345341.jpg@128w_170h_1e_1c" alt="">
  </a>
  <div class="info">
    <a href="/films/celebrity/358337" target="_blank" class="name">
      王强
    </a>
      <br /><span class="role">饰：政委</span>
  </div>
</li>

      <li class="celebrity actor" data-act="celebrity-click" data-val="{celebrityid:2403906}">
  <a href="/films/celebrity/2403906" target="_blank" class="portrait">
    <img class="default-img" data-src="/home/picture/b35cbcaeda5537dddff459998b71697246974.jpg@128w_170h_1e_1c" alt="">
  </a>
  <div class="info">
    <a href="/films/celebrity/2403906" target="_blank" class="name">
      王雨甜
    </a>
      <br /><span class="role">饰：张天德</span>
  </div>
</li>

      <li class="celebrity actor" data-act="celebrity-click" data-val="{celebrityid:1157337}">
  <a href="/films/celebrity/1157337" target="_blank" class="portrait">
    <img class="default-img" data-src="/home/picture/6b879df0dd6818fca2f96d79706e875847631.jpg@128w_170h_1e_1c" alt="">
  </a>
  <div class="info">
    <a href="/films/celebrity/1157337" target="_blank" class="name">
      郭家豪
    </a>
      <br /><span class="role">饰：陆琛</span>
  </div>
</li>

      <li class="celebrity actor" data-act="celebrity-click" data-val="{celebrityid:2403907}">
  <a href="/films/celebrity/2403907" target="_blank" class="portrait">
    <img class="default-img" data-src="/home/picture/9f8cc55e98252832bac1e098ddbd935d39606.jpg@128w_170h_1e_1c" alt="">
  </a>
  <div class="info">
    <a href="/films/celebrity/2403907" target="_blank" class="name">
      麦亨利
    </a>
      <br /><span class="role">饰：兵庄羽</span>
  </div>
</li>

      <li class="celebrity actor" data-act="celebrity-click" data-val="{celebrityid:28901}">
  <a href="/films/celebrity/28901" target="_blank" class="portrait">
    <img class="default-img" data-src="/home/picture/c43af5e137d4f2bde72e635bfc16dbdc32830.jpg@128w_170h_1e_1c" alt="">
  </a>
  <div class="info">
    <a href="/films/celebrity/28901" target="_blank" class="name">
      张涵予
    </a>
      <br /><span class="role">饰：高云</span>
  </div>
</li>

  </ul>
</div>

                <div class="celebrity-group">
  <div class="celebrity-type">
    编剧
      <span class="num">（3）</span>
  </div>
  <ul class="celebrity-list clearfix">
      <li class="celebrity " data-act="celebrity-click" data-val="{celebrityid:593387}">
  <a href="/films/celebrity/593387" target="_blank" class="portrait">
    <img class="default-img" data-src="/home/picture/c0b7417820c20a05904dc33933968349111025.jpg@128w_170h_1e_1c" alt="">
  </a>
  <div class="info">
    <a href="/films/celebrity/593387" target="_blank" class="name">
      冯骥
    </a>
  </div>
</li>

      <li class="celebrity " data-act="celebrity-click" data-val="{celebrityid:1154867}">
  <a href="/films/celebrity/1154867" target="_blank" class="portrait">
    <img class="default-img" data-src="/home/picture/3a2061d771d98566d3e5fa5c08c5e0b33685.png@128w_170h_1e_1c" alt="">
  </a>
  <div class="info">
    <a href="/films/celebrity/1154867" target="_blank" class="name">
      陈珠珠
    </a>
  </div>
</li>

      <li class="celebrity " data-act="celebrity-click" data-val="{celebrityid:600491}">
  <a href="/films/celebrity/600491" target="_blank" class="portrait">
    <img class="default-img" data-src="/home/picture/3a2061d771d98566d3e5fa5c08c5e0b33685.png@128w_170h_1e_1c" alt="">
  </a>
  <div class="info">
    <a href="/films/celebrity/600491" target="_blank" class="name">
      林明杰
    </a>
  </div>
</li>

  </ul>
</div>

                <div class="celebrity-group">
  <div class="celebrity-type">
    制片人
      <span class="num">（3）</span>
  </div>
  <ul class="celebrity-list clearfix">
      <li class="celebrity " data-act="celebrity-click" data-val="{celebrityid:28469}">
  <a href="/films/celebrity/28469" target="_blank" class="portrait">
    <img class="default-img" data-src="/home/picture/27d788d78acd2f1235242ba877d1c636117534.png@128w_170h_1e_1c" alt="">
  </a>
  <div class="info">
    <a href="/films/celebrity/28469" target="_blank" class="name">
      于冬
    </a>
  </div>
</li>

      <li class="celebrity " data-act="celebrity-click" data-val="{celebrityid:1154668}">
  <a href="/films/celebrity/1154668" target="_blank" class="portrait">
    <img class="default-img" data-src="/home/picture/898997a0fe120283de540a156e58a0e541353.jpg@128w_170h_1e_1c" alt="">
  </a>
  <div class="info">
    <a href="/films/celebrity/1154668" target="_blank" class="name">
      陆振华
    </a>
  </div>
</li>

      <li class="celebrity " data-act="celebrity-click" data-val="{celebrityid:2402991}">
  <a href="/films/celebrity/2402991" target="_blank" class="portrait">
    <img class="default-img" data-src="/home/picture/5513866d33d72b85fbc6f354fa0dcbe448116.jpg@128w_170h_1e_1c" alt="">
  </a>
  <div class="info">
    <a href="/films/celebrity/2402991" target="_blank" class="name">
      唐静
    </a>
  </div>
</li>

  </ul>
</div>

                <div class="celebrity-group">
  <div class="celebrity-type">
    监制
      <span class="num">（1）</span>
  </div>
  <ul class="celebrity-list clearfix">
      <li class="celebrity " data-act="celebrity-click" data-val="{celebrityid:477631}">
  <a href="/films/celebrity/477631" target="_blank" class="portrait">
    <img class="default-img" data-src="/home/picture/71718ba35f8dd228a13f66540cfcb66755521.jpg@128w_170h_1e_1c" alt="">
  </a>
  <div class="info">
    <a href="/films/celebrity/477631" target="_blank" class="name">
      梁凤英
    </a>
  </div>
</li>

  </ul>
</div>

                <div class="celebrity-group">
  <div class="celebrity-type">
    宣传
      <span class="num">（1）</span>
  </div>
  <ul class="celebrity-list clearfix">
      <li class="celebrity " data-act="celebrity-click" data-val="{celebrityid:2818467}">
  <a href="/films/celebrity/2818467" target="_blank" class="portrait">
    <img class="default-img" data-src="/home/picture/3a2061d771d98566d3e5fa5c08c5e0b33685.png@128w_170h_1e_1c" alt="">
  </a>
  <div class="info">
    <a href="/films/celebrity/2818467" target="_blank" class="name">
      范春生
    </a>
  </div>
</li>

  </ul>
</div>

                <div class="celebrity-group">
  <div class="celebrity-type">
    发行
      <span class="num">（2）</span>
  </div>
  <ul class="celebrity-list clearfix">
      <li class="celebrity " data-act="celebrity-click" data-val="{celebrityid:2818288}">
  <a href="/films/celebrity/2818288" target="_blank" class="portrait">
    <img class="default-img" data-src="/home/picture/3a2061d771d98566d3e5fa5c08c5e0b33685.png@128w_170h_1e_1c" alt="">
  </a>
  <div class="info">
    <a href="/films/celebrity/2818288" target="_blank" class="name">
      乔治
    </a>
  </div>
</li>

      <li class="celebrity " data-act="celebrity-click" data-val="{celebrityid:2833814}">
  <a href="/films/celebrity/2833814" target="_blank" class="portrait">
    <img class="default-img" data-src="/home/picture/b2cddc683821028214b4c28da1a3a52b4316909.jpg@128w_170h_1e_1c" alt="">
  </a>
  <div class="info">
    <a href="/films/celebrity/2833814" target="_blank" class="name">
      艺溪
    </a>
  </div>
</li>

  </ul>
</div>

                <div class="celebrity-group">
  <div class="celebrity-type">
    演员统筹
      <span class="num">（1）</span>
  </div>
  <ul class="celebrity-list clearfix">
      <li class="celebrity " data-act="celebrity-click" data-val="{celebrityid:2833864}">
  <a href="/films/celebrity/2833864" target="_blank" class="portrait">
    <img class="default-img" data-src="/home/picture/04d3dffa4757ccdff38b96f550d034e6598369.jpg@128w_170h_1e_1c" alt="">
  </a>
  <div class="info">
    <a href="/films/celebrity/2833864" target="_blank" class="name">
      白川
    </a>
  </div>
</li>

  </ul>
</div>

          </div>
        </div>
        <div class="tab-award tab-content" data-val="{tabtype:'award'}">
        </div>
        <div class="tab-img tab-content" data-val="{tabtype:'img'}">
          <ul class="clearfix">
              <li>
                <img class="default-img" data-act="movie-img-click" data-src="/home/picture/8f82fa412f64976640fe723f148e1379528609.jpg@106w_106h_1e_1c" alt="">
              </li>
         -->  </ul>
        </div>
      </div>
      </div>
      </div>
    </div>
  </div>
  <div class="related">
  <div class="module">
    <div class="mod-title">
      <h3>相关资讯</h3>
    </div>
    <div class="mod-content">
              <dl class="news-list">
  
  @foreach($news as $k => $v)
  <dd class="news-item" data-act="new-click" data-val="{newsid:35226}">
    <div class="news-img">
      <a href="/news/one/{{$v['id']}}" target="_blank">
        <!-- <img class="news-img-default" src="/home/{{$v['poster']}}" /> -->
        <img class="news-img-detail" src="/uploads/news/{{$v['poster']}}" style="width:140px;height: 86px;" />
      </a>
    </div>
    <div class="news-main">
      <div class="news-title">
        <a href="/films/news/35226" target="_blank">{!!$v['title']!!}</a>
      </div>
      <div class="news-info">
        <span class="news-source">猫眼电影</span><!--
        --><span><i class="news-icon news-icon-views"></i>{{date('m-d',$v['pubdate'])}}</span><!--
        <!- <span><i class="news-icon news-icon-comments"></i>24</span> -->
      </div>
    </div>
  </dd>

@endforeach

</dl>


    </div>
  </div>
  <!-- <div class="module">
    <div class="mod-title">
      <h3>相关电影</h3>
    </div>
    <div class="mod-content">
              <div class="related-movies">
<dl class="movie-list">
  <dd>
    <div class="movie-item">
      <a href="/films/1048288" target="_blank" data-act="movie-click" data-val="{movieid:1048288}">
      <div class="movie-poster">
        <img class="poster-default" src="/home/picture/loading_2.e3d934bf.png" />
        <img data-src="/home/picture/" />
      </div>
      </a>
      <div class="movie-ver"></div>
    </div>
    <div class="channel-detail movie-item-title" title="英雄本色2018">
      <a href="/films/1048288" target="_blank" data-act="movies-click" data-val="{movieId:1048288}">英雄本色2018</a>
    </div>
<div class="channel-detail channel-detail-orange"><i class="integer">8.</i><i class="fraction">0</i></div>
  
 -->


    </div>
  </div>
  </div>
</div>
<script id="comment-form-container" type="text/template">
  <form id="comment-form" data-val="{movieid:1182552}">
    <div class="score-msg-container ">
        <div class="score"><span class="num"></span>分</div>
        <div class="score-message"></div>
        <div class="no-score">
          请点击星星评分
        </div>
    </div>
    <div class="score-star-contaienr">
      <ul class="score-star clearfix" data-score="" id="clearfix">
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
    <input type="hidden" name="score" id="num" />
    <input class="btn" type="submit" value="提交"  />
  </form>
  <div class="close">×</div>
</script>
    </div>
  </dd>
</dl>
</div>
</div>
</div>
</div>
</div>


@endsection
@section('js')
<script type="text/javascript">  
  $('#buyBtn').on('click',function(){location.href='/login';});
  function think(uid,vid){
   $.get("/film/think",{'uid':uid,'vid':vid},function(sd){
        if(sd){
          $('.wish-msg').text('已想看');
        }
      });
  }
  // var a = $('#user').data('id');
  // alert(a);
</script>

<script src="/home/js/common.dc33ab40.js"></script>
<script src="/home/js/movie-detail.b5d664ec.js"></script>
@endsection