@extends('home/layout')
$section('css')
<link rel="stylesheet" href="/home/css/news-hotnews.a01df872.css"/>
@show
@section('header')
 <div class="subnav">
  <ul class="navbar">
    <li>
      <a data-act="subnav-click" data-val="{subnavClick:1}"
          data-state-val="{subnavId:1}"
          class="active" href="javascript:void(0);"
      >热点首页</a>
    </li>
    <li>
      <a data-act="subnav-click" data-val="{subnavClick:2}"
          href="?showTab=2"
      >新闻资讯</a>
    </li>
    <li>
      <a data-act="subnav-click" data-val="{subnavClick:3}"
          href="?showTab=3"
      >预告片</a>
    </li>
    <li>
      <a data-act="subnav-click" data-val="{subnavClick:4}"
          href="?showTab=4"
      >精彩图集</a>
    </li>
  </ul>
</div>


    <div class="container" id="app" class="page-news/hotNews" >
      <div class="hotIndex-container">
    <div class="index-news-container clearfix">
        <div class="popular-container">
    <h4 class="red">热门资讯</h4>
      <ul>
          <li class="top1-list">
            <div>
<div class="top-info-thumb">
                  <a href="/films/news/34639" target="_blank" data-act="news-click" data-val="{newsid:34639}">
                    <img src="/home/picture/c47fc6094f5588d6563c96a16303f56f476684.jpg@120w_72h_1e_1c" alt="">
                    <i class="ranking top-info-icon red-bg">1</i>
                  </a>
                </div>
                <p class="top1-news-content">
                  <a href="/films/news/34639" class="two-line" title="《红海行动》获副部级影评人力赞，张译路演现场与真蛟龙官兵互动" target="_blank" data-act="news-click" data-val="{newsid:34639}">
                    《红海行动》获副部级影评人力赞，张译路演现场与真蛟龙官兵互动
                  </a>
                </p>
            </div>
          </li>
          <li class="">
            <div>
                <div class="normal-link">
                  <i class="ranking red">2</i>
                  <p class="top10-news-content">
                    <a href="/films/news/34636" target="_blank" data-act="news-click" data-val="{newsid:34636}">《战狼2》傲视影史，《美人鱼》喜剧之王，国产片票房纪录长这样</a>
                  </p>
                </div>            </div>
          </li>
          <li class="">
            <div>
                <div class="normal-link">
                  <i class="ranking red">3</i>
                  <p class="top10-news-content">
                    <a href="/films/news/34642" target="_blank" data-act="news-click" data-val="{newsid:34642}">《熊出没·变形记》票房破5亿，有望打破系列电影票房纪录</a>
                  </p>
                </div>            </div>
          </li>
          <li class="">
            <div>
                <div class="normal-link">
                  <i class="ranking ">4</i>
                  <p class="top10-news-content">
                    <a href="/films/news/34635" target="_blank" data-act="news-click" data-val="{newsid:34635}">星爷感慨已没有角色可演？曾经的辉煌足够耀眼，数数他的经典角色</a>
                  </p>
                </div>            </div>
          </li>
          <li class="">
            <div>
                <div class="normal-link">
                  <i class="ranking ">5</i>
                  <p class="top10-news-content">
                    <a href="/films/news/34634" target="_blank" data-act="news-click" data-val="{newsid:34634}">《如影随心》曝最新剧照，陈晓雅痞帅气，杜鹃这气质简直无敌！</a>
                  </p>
                </div>            </div>
          </li>
          <li class="">
            <div>
                <div class="normal-link">
                  <i class="ranking ">6</i>
                  <p class="top10-news-content">
                    <a href="/films/news/34637" target="_blank" data-act="news-click" data-val="{newsid:34637}">《捉妖记2》上映9日票房突破19亿，全国亲子观影场引爆“胡巴热”</a>
                  </p>
                </div>            </div>
          </li>
          <li class="">
            <div>
                <div class="normal-link">
                  <i class="ranking ">7</i>
                  <p class="top10-news-content">
                    <a href="/films/news/34641" target="_blank" data-act="news-click" data-val="{newsid:34641}">我们的文化该如何输出？《唐探2》在国际舞台上讲好中国故事</a>
                  </p>
                </div>            </div>
          </li>
          <li class="">
            <div>
                <div class="normal-link">
                  <i class="ranking ">8</i>
                  <p class="top10-news-content">
                    <a href="/films/news/34638" target="_blank" data-act="news-click" data-val="{newsid:34638}">《妈妈咪鸭》周末大规模点映再起，网友：过年期间院线最佳</a>
                  </p>
                </div>            </div>
          </li>
          <li class="">
            <div>
                <div class="normal-link">
                  <i class="ranking ">9</i>
                  <p class="top10-news-content">
                    <a href="/films/news/34643" target="_blank" data-act="news-click" data-val="{newsid:34643}">《唐人街探案2》票房破26亿， 暂列国产电影第三追赶《美人鱼》</a>
                  </p>
                </div>            </div>
          </li>
          <li class="">
            <div>
                <div class="normal-link">
                  <i class="ranking ">10</i>
                  <p class="top10-news-content">
                    <a href="/films/news/34640" target="_blank" data-act="news-click" data-val="{newsid:34640}">陈意涵大婚闹乌龙，曝光喜帖系电影发布会邀请函</a>
                  </p>
                </div>            </div>
          </li>
      </ul>
  </div>

        <div class="latest-container">
      <h4 class="latest-header red">
    最新资讯
    <a href="?showTab=2" class="all-latest" data-act="all-news-click">
      全部
      <span class="arrow red-arrow"></span>
    </a>
  </h4>


    <div class="latest-content clearfix">
          <div class="latest-news-box">
            <a href="/films/news/34684" target="_blank" data-act="news-click" data-val="{newsid:34684}">
              <img src="/home/picture/4052b3882dbb947d4c1c9fd6eac55a3f593920.jpg@230w_129h_1e_1c" alt="">
            </a>
            <p class="latest-news-title">
              <a href="/films/news/34684" class="two-line" title="4个月前自缢去世，如今遗作柏林获奖，我们为什么要铭记胡波" target="_blank" data-act="news-click" data-val="{newsid:34684}">
                4个月前自缢去世，如今遗作柏林获奖，我们为什么要铭记胡波
              </a>
            </p>
            <div class="info-container">
              <span>猫眼电影</span>
              <span class="images-view-count view-count">1492</span>
            </div>
          </div>
          <div class="latest-news-box">
            <a href="/films/news/34683" target="_blank" data-act="news-click" data-val="{newsid:34683}">
              <img src="/home/picture/22c615c5700649500d494fd30064171893079.png@230w_129h_1e_1c" alt="">
            </a>
            <p class="latest-news-title">
              <a href="/films/news/34683" class="two-line" title="外媒援引猫眼数据指出，本土力量正在主导中国电影市场繁荣" target="_blank" data-act="news-click" data-val="{newsid:34683}">
                外媒援引猫眼数据指出，本土力量正在主导中国电影市场繁荣
              </a>
            </p>
            <div class="info-container">
              <span>猫眼电影</span>
              <span class="images-view-count view-count">2860</span>
            </div>
          </div>
          <div class="latest-news-box">
            <a href="/films/news/34682" target="_blank" data-act="news-click" data-val="{newsid:34682}">
              <img src="/home/picture/804fc8b4baf6ed8321ab8175d5834a7c186416.png@230w_129h_1e_1c" alt="">
            </a>
            <p class="latest-news-title">
              <a href="/films/news/34682" class="two-line" title="《冈仁波齐》之后，匠心力作《落绕》将公映" target="_blank" data-act="news-click" data-val="{newsid:34682}">
                《冈仁波齐》之后，匠心力作《落绕》将公映
              </a>
            </p>
            <div class="info-container">
              <span>猫眼电影</span>
              <span class="images-view-count view-count">2637</span>
            </div>
          </div>
          <div class="latest-news-box">
            <a href="/films/news/34681" target="_blank" data-act="news-click" data-val="{newsid:34681}">
              <img src="/home/picture/09c1ca3e05560403dc9c9170219a5bbc165029.png@230w_129h_1e_1c" alt="">
            </a>
            <p class="latest-news-title">
              <a href="/films/news/34681" class="two-line" title="《爱在记忆消逝前》观众齐点赞，老夫妻恩爱连环秀收获CP粉" target="_blank" data-act="news-click" data-val="{newsid:34681}">
                《爱在记忆消逝前》观众齐点赞，老夫妻恩爱连环秀收获CP粉
              </a>
            </p>
            <div class="info-container">
              <span>北京合瑞影业文化有限公司</span>
              <span class="images-view-count view-count">2291</span>
            </div>
          </div>
          <div class="latest-news-box">
            <a href="/films/news/34680" target="_blank" data-act="news-click" data-val="{newsid:34680}">
              <img src="/home/picture/1bb480b9f96aa0fad9e1112b357d6817249407.png@230w_129h_1e_1c" alt="">
            </a>
            <p class="latest-news-title">
              <a href="/films/news/34680" class="two-line" title="《三块广告牌》获明星抱团力挺，点映100%上座率0差评霸气开怼" target="_blank" data-act="news-click" data-val="{newsid:34680}">
                《三块广告牌》获明星抱团力挺，点映100%上座率0差评霸气开怼
              </a>
            </p>
            <div class="info-container">
              <span>美国二十世纪福斯电影公司</span>
              <span class="images-view-count view-count">1980</span>
            </div>
          </div>
          <div class="latest-news-box">
            <a href="/films/news/34679" target="_blank" data-act="news-click" data-val="{newsid:34679}">
              <img src="/home/picture/6978b8d509dd3d3cfbbdbc2dc5c1856a192835.jpg@230w_129h_1e_1c" alt="">
            </a>
            <p class="latest-news-title">
              <a href="/films/news/34679" class="two-line" title="一周收视：春节档大剧厮杀，《谈判官》强势夺冠" target="_blank" data-act="news-click" data-val="{newsid:34679}">
                一周收视：春节档大剧厮杀，《谈判官》强势夺冠
              </a>
            </p>
            <div class="info-container">
              <span>猫眼电视剧</span>
              <span class="images-view-count view-count">5104</span>
            </div>
          </div>
    </div>
  </div>

    </div>
    <div class="index-videos-container clearfix">
        <div class="popular-container">
    <h4 class="blue">热门预告片</h4>
      <ul>
          <li class="top-list">
            <div>
              <div class="top-info-thumb">
                <a href="http://imovie.ewang.com/films/1182552/preview?videoId=91726" target="_blank" data-act="video-click" data-val="{videoId:91726}">
                  <img src="/home/picture/e59b9cf71d9ab79d5eaadee2d3cd14fe32893.jpg@120w_68h_1e_1c" alt="">
                  <i class="ranking top-info-icon orange-bg">1</i>
                  <i class="play-icon"></i>
                </a>
              </div>
              <div class="top5-video-info">
                <p class="one-line">
                  <a href="http://imovie.ewang.com/films/1182552/preview?videoId=91726" target="_blank" data-act="video-click" data-val="{videoId:91726}">
                    《红海行动》“带你回家”版预告片
                  </a>
                </p>
                <div class="video-view">
                  <span class="video-play-count">1095.8万</span>
                </div>
              </div>
            </div>
          </li>
          <li class="top-list">
            <div>
              <div class="top-info-thumb">
                <a href="http://imovie.ewang.com/films/344990/preview?videoId=91561" target="_blank" data-act="video-click" data-val="{videoId:91561}">
                  <img src="/home/picture/b996ac85acb650cbc6856de2aa5aeb5448358.jpg@120w_68h_1e_1c" alt="">
                  <i class="ranking top-info-icon orange-bg">2</i>
                  <i class="play-icon"></i>
                </a>
              </div>
              <div class="top5-video-info">
                <p class="one-line">
                  <a href="http://imovie.ewang.com/films/344990/preview?videoId=91561" target="_blank" data-act="video-click" data-val="{videoId:91561}">
                    《唐人街探案2》终极版预告片 王宝强刘昊然肖央cos女护士
                  </a>
                </p>
                <div class="video-view">
                  <span class="video-play-count">845.7万</span>
                </div>
              </div>
            </div>
          </li>
          <li class="top-list">
            <div>
              <div class="top-info-thumb">
                <a href="http://imovie.ewang.com/films/346272/preview?videoId=91892" target="_blank" data-act="video-click" data-val="{videoId:91892}">
                  <img src="/home/picture/2574bea9361d0a4b7e500a99075d93c547892.jpg@120w_68h_1e_1c" alt="">
                  <i class="ranking top-info-icon orange-bg">3</i>
                  <i class="play-icon"></i>
                </a>
              </div>
              <div class="top5-video-info">
                <p class="one-line">
                  <a href="http://imovie.ewang.com/films/346272/preview?videoId=91892" target="_blank" data-act="video-click" data-val="{videoId:91892}">
                    《捉妖记2》爱情版预告片 多对CP齐秀恩爱撒狗粮
                  </a>
                </p>
                <div class="video-view">
                  <span class="video-play-count">300.5万</span>
                </div>
              </div>
            </div>
          </li>
          <li class="top-list">
            <div>
              <div class="top-info-thumb">
                <a href="http://imovie.ewang.com/films/1211482/preview?videoId=91814" target="_blank" data-act="video-click" data-val="{videoId:91814}">
                  <img src="/home/picture/d44f77e42959f477841488f36b1c7cd333597.jpg@120w_68h_1e_1c" alt="">
                  <i class="ranking top-info-icon grey-bg">4</i>
                  <i class="play-icon"></i>
                </a>
              </div>
              <div class="top5-video-info">
                <p class="one-line">
                  <a href="http://imovie.ewang.com/films/1211482/preview?videoId=91814" target="_blank" data-act="video-click" data-val="{videoId:91814}">
                    《熊出没·变形记》上映两天倒计时版预告片  “光头强本强”赵英俊等你来
                  </a>
                </p>
                <div class="video-view">
                  <span class="video-play-count">263.7万</span>
                </div>
              </div>
            </div>
          </li>
          <li class="top-list">
            <div>
              <div class="top-info-thumb">
                <a href="http://imovie.ewang.com/films/1211538/preview?videoId=91649" target="_blank" data-act="video-click" data-val="{videoId:91649}">
                  <img src="/home/picture/c1489a6dd1fe7966a8e1206fd7dddfe6380754.jpg@120w_68h_1e_1c" alt="">
                  <i class="ranking top-info-icon grey-bg">5</i>
                  <i class="play-icon"></i>
                </a>
              </div>
              <div class="top5-video-info">
                <p class="one-line">
                  <a href="http://imovie.ewang.com/films/1211538/preview?videoId=91649" target="_blank" data-act="video-click" data-val="{videoId:91649}">
                    《祖宗十九代》终极版预告片 范冰冰变岳云鹏太姥姥 和郭德纲洞房花烛
                  </a>
                </p>
                <div class="video-view">
                  <span class="video-play-count">381.2万</span>
                </div>
              </div>
            </div>
          </li>
      </ul>
  </div>

        <div class="latest-container">
      <h4 class="latest-header blue">
    预告片速递
    <a href="?showTab=3" class="all-latest" data-act="all-videos-click">
      全部
      <span class="arrow blue-arrow"></span>
    </a>
  </h4>


    <div class="latest-content clearfix">
            <div class="latest-video-box latest-video-big">
              <a href="http://imovie.ewang.com/films/1204720/preview?videoId=91952" target="_blank"  data-act="video-click" data-val="{videoId:91952}">
                <img data-src="/home/picture/9fc5d4fae4e32de7cb7168ee2386d89537130.jpg@480w_270h_1e_1c" alt="">

                <div class="latest-video-info">
                  <p class="one-line">
                    <span class="latest-video-title">《妈妈咪鸭》先导预告 定档3月9日品质比肩好莱坞</span>
                  </p>
                  <p>
                    <span class="video-play-count">1267</span>
                  </p>
                </div>
                <i class="play-icon"></i>
              </a>
            </div>
            <div class="latest-video-box ">
              <a href="http://imovie.ewang.com/films/1204720/preview?videoId=91951" target="_blank"  data-act="video-click" data-val="{videoId:91951}">
                <img data-src="/home/picture/a69c2a08672b973d64c547f8da7889f235420.jpg@230w_125h_1e_1c" alt="">

                <div class="latest-video-info">
                  <p class="one-line">
                    <span class="latest-video-title">《妈妈咪鸭》国际版预告 3月9日萌趣来袭</span>
                  </p>
                  <p>
                    <span class="video-play-count">334</span>
                  </p>
                </div>
                <i class="play-icon"></i>
              </a>
            </div>
            <div class="latest-video-box ">
              <a href="http://imovie.ewang.com/films/1203436/preview?videoId=91948" target="_blank"  data-act="video-click" data-val="{videoId:91948}">
                <img data-src="/home/picture/88e78c14cebd168862b2e5c38af2fda0763855.png@230w_125h_1e_1c" alt="">

                <div class="latest-video-info">
                  <p class="one-line">
                    <span class="latest-video-title">《金钱世界》终极版预告片 震撼演绎富人逻辑</span>
                  </p>
                  <p>
                    <span class="video-play-count">9834</span>
                  </p>
                </div>
                <i class="play-icon"></i>
              </a>
            </div>
            <div class="latest-video-box ">
              <a href="http://imovie.ewang.com/films/343762/preview?videoId=91945" target="_blank"  data-act="video-click" data-val="{videoId:91945}">
                <img data-src="/home/picture/2c4f797cafe6f97558d3c5635a081cf241592.jpg@230w_125h_1e_1c" alt="">

                <div class="latest-video-info">
                  <p class="one-line">
                    <span class="latest-video-title">《比得兔》终极版预告片 萌兔来袭！元宵节小心吸兔成瘾！</span>
                  </p>
                  <p>
                    <span class="video-play-count">69026</span>
                  </p>
                </div>
                <i class="play-icon"></i>
              </a>
            </div>
            <div class="latest-video-box ">
              <a href="http://imovie.ewang.com/films/78460/preview?videoId=91944" target="_blank"  data-act="video-click" data-val="{videoId:91944}">
                <img data-src="/home/picture/9942529c3f51cfb4a720a073b4968efb23159.jpg@230w_125h_1e_1c" alt="">

                <div class="latest-video-info">
                  <p class="one-line">
                    <span class="latest-video-title">《环太平洋：雷霆再起》IMAX版预告片 重装上阵！机甲战队对抗巨型怪兽</span>
                  </p>
                  <p>
                    <span class="video-play-count">19825</span>
                  </p>
                </div>
                <i class="play-icon"></i>
              </a>
            </div>
            <div class="latest-video-box ">
              <a href="http://imovie.ewang.com/films/1204720/preview?videoId=91943" target="_blank"  data-act="video-click" data-val="{videoId:91943}">
                <img data-src="/home/picture/d91c4ba7582dcceecbee55f135d6294113910.jpg@230w_125h_1e_1c" alt="">

                <div class="latest-video-info">
                  <p class="one-line">
                    <span class="latest-video-title">《妈妈咪鸭》方言版预告片 雁群秒变东北爷们儿</span>
                  </p>
                  <p>
                    <span class="video-play-count">59174</span>
                  </p>
                </div>
                <i class="play-icon"></i>
              </a>
            </div>
    </div>
  </div>

    </div>
    <div class="index-images-container">
        <div class="latest-container">
      <h4 class="latest-header yellow">
    最新图集
    <a href="?showTab=4" class="all-latest" data-act="all-images-click">
      全部
      <span class="arrow yellow-arrow"></span>
    </a>
  </h4>


    <div class="latest-content clearfix">
          <div class="latest-images-box">
            <div class="clearfix">
                  <a class="latest-images-thumb" href="/news/34648" target="_blank" data-act="images-click" data-val="{imagesid:34648}">
                    <img class="latest-images-big" data-src="/home/picture/4d892fc0c9dd5c25710a37e38ef6abc5520192.jpg@230w_172h_1e_1c" alt="">
                  </a>
                  <a class="latest-images-thumb" href="/news/34648" target="_blank" data-act="images-click" data-val="{imagesid:34648}">
                    <img data-src="/home/picture/9ea31453ac45895c7938283887fe1d33450560.jpg@120w_84h_1e_1c" alt="">
                  </a>
                  <a class="latest-images-thumb" href="/news/34648" target="_blank" data-act="images-click" data-val="{imagesid:34648}">
                    <img data-src="/home/picture/43e04727d2ce52d5b6022d1f64f58df8487424.jpg@120w_84h_1e_1c" alt="">
                  </a>
            </div>

              <a class="latest-images-more" href="/news/34648" target="_blank" data-act="images-click" data-val="{imagesid:34648}">
                4张图片
              </a>

            <div class="latest-images-info">
              <p class="latest-images-title one-line">
                <a href="/news/34648" target="_blank" data-act="images-click" data-val="{imagesid:34648}">
                  章龄之白纱长裙写真曝光，明眸皓齿仙气十足
                </a>
              </p>
              <span class="latest-images-view view-count">59</span>
            </div>
          </div>
          <div class="latest-images-box">
            <div class="clearfix">
                  <a class="latest-images-thumb" href="/news/34630" target="_blank" data-act="images-click" data-val="{imagesid:34630}">
                    <img class="latest-images-big" data-src="/home/picture/8340db2a269097b70ab0998e3626578794398.jpg@230w_172h_1e_1c" alt="">
                  </a>
                  <a class="latest-images-thumb" href="/news/34630" target="_blank" data-act="images-click" data-val="{imagesid:34630}">
                    <img data-src="/home/picture/e40f9b908a3e209d67f3368415f83fe2107491.jpg@120w_84h_1e_1c" alt="">
                  </a>
                  <a class="latest-images-thumb" href="/news/34630" target="_blank" data-act="images-click" data-val="{imagesid:34630}">
                    <img data-src="/home/picture/cdba15de754ab4f8a1af6dfc2b7d47b1140435.jpg@120w_84h_1e_1c" alt="">
                  </a>
            </div>

              <a class="latest-images-more" href="/news/34630" target="_blank" data-act="images-click" data-val="{imagesid:34630}">
                11张图片
              </a>

            <div class="latest-images-info">
              <p class="latest-images-title one-line">
                <a href="/news/34630" target="_blank" data-act="images-click" data-val="{imagesid:34630}">
                  陈晓王嘉同让杜鹃爱疯了 《如影随心》剧照曝光
                </a>
              </p>
              <span class="latest-images-view view-count">2125</span>
            </div>
          </div>
          <div class="latest-images-box">
            <div class="clearfix">
                  <a class="latest-images-thumb" href="/news/34545" target="_blank" data-act="images-click" data-val="{imagesid:34545}">
                    <img class="latest-images-big" data-src="/home/picture/d9cd2a5af0f709b2d674213ca000f684249573.jpg@230w_172h_1e_1c" alt="">
                  </a>
                  <a class="latest-images-thumb" href="/news/34545" target="_blank" data-act="images-click" data-val="{imagesid:34545}">
                    <img data-src="/home/picture/15b24173d7f49f6e3789db3f689674d3209359.jpg@120w_84h_1e_1c" alt="">
                  </a>
                  <a class="latest-images-thumb" href="/news/34545" target="_blank" data-act="images-click" data-val="{imagesid:34545}">
                    <img data-src="/home/picture/5d9a3eb3693ffb2952267bcfb8d64784225745.jpg@120w_84h_1e_1c" alt="">
                  </a>
            </div>

              <a class="latest-images-more" href="/news/34545" target="_blank" data-act="images-click" data-val="{imagesid:34545}">
                7张图片
              </a>

            <div class="latest-images-info">
              <p class="latest-images-title one-line">
                <a href="/news/34545" target="_blank" data-act="images-click" data-val="{imagesid:34545}">
                  组图：“结石姐”卫衣+破洞牛仔裤清爽简约  挥手臂挡阳光变害羞
                </a>
              </p>
              <span class="latest-images-view view-count">2541</span>
            </div>
          </div>
          <div class="latest-images-box">
            <div class="clearfix">
                  <a class="latest-images-thumb" href="/news/34544" target="_blank" data-act="images-click" data-val="{imagesid:34544}">
                    <img class="latest-images-big" data-src="/home/picture/72e91b3b48ab137b286cbffcead5e295247184.jpg@230w_172h_1e_1c" alt="">
                  </a>
                  <a class="latest-images-thumb" href="/news/34544" target="_blank" data-act="images-click" data-val="{imagesid:34544}">
                    <img data-src="/home/picture/8ab0c9aaeb8b095d5ca574428a8c5f2f268737.jpg@120w_84h_1e_1c" alt="">
                  </a>
                  <a class="latest-images-thumb" href="/news/34544" target="_blank" data-act="images-click" data-val="{imagesid:34544}">
                    <img data-src="/home/picture/1f98f69b82d8d256610a6f7f8bcaa283255400.jpg@120w_84h_1e_1c" alt="">
                  </a>
            </div>

              <a class="latest-images-more" href="/news/34544" target="_blank" data-act="images-click" data-val="{imagesid:34544}">
                6张图片
              </a>

            <div class="latest-images-info">
              <p class="latest-images-title one-line">
                <a href="/news/34544" target="_blank" data-act="images-click" data-val="{imagesid:34544}">
                  组图：吉赛尔·邦辰现身工地 戴安全帽大步流星气场足
                </a>
              </p>
              <span class="latest-images-view view-count">1960</span>
            </div>
          </div>
    </div>
  </div>

    </div>
  </div>

    </div>
 <script type="text/javascript">
  $('.navbar li a:contains(热点)').toggleClass('active');
</script>
@endsection