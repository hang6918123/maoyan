@extends('home/layouts.layout')
$section('css')
<link rel="stylesheet" href="/home/css/movie-list.ffb4de4a.css"/>
@show
@section('header')
   
<div class="header-placeholder"></div>

<div class="subnav">
  <ul class="navbar">
    <li>
      <a data-act="subnav-click" data-val="{subnavClick:1}"
          data-state-val="{subnavId:1}"
          class="active" href="javascript:void(0);"
      >正在热映</a>
    </li>
    <li>
      <a data-act="subnav-click" data-val="{subnavClick:2}"
          href="?showType=2"
      >即将上映</a>
    </li>
    <li>
      <a data-act="subnav-click" data-val="{subnavClick:3}"
          href="?showType=3"
      >经典影片</a>
    </li>
  </ul>
</div>


    <div class="container" id="app" class="page-movie/list" >


<div class="movies-channel">
  <div class="tags-panel">
    <ul class="tags-lines">
      <li class="tags-line" data-val="{tagTypeName:'cat'}">
        <div class="tags-title">类型 :</div>
        <ul class="tags">
          <li class="active" data-state-val="{ catTagName:'全部'}" >
            <a data-act="tag-click" data-val="{TagName:'全部'}"
                href="javascript:void(0);" style="cursor: default"
            >全部</a>
          </li>
          <li >
            <a data-act="tag-click" data-val="{TagName:'爱情'}"
                href="?catId=3"
            >爱情</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'喜剧'}"
                href="?catId=2"
            >喜剧</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'动画'}"
                href="?catId=4"
            >动画</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'剧情'}"
                href="?catId=1"
            >剧情</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'恐怖'}"
                href="?catId=6"
            >恐怖</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'惊悚'}"
                href="?catId=7"
            >惊悚</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'科幻'}"
                href="?catId=10"
            >科幻</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'动作'}"
                href="?catId=5"
            >动作</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'悬疑'}"
                href="?catId=8"
            >悬疑</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'犯罪'}"
                href="?catId=11"
            >犯罪</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'冒险'}"
                href="?catId=9"
            >冒险</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'战争'}"
                href="?catId=12"
            >战争</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'奇幻'}"
                href="?catId=14"
            >奇幻</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'运动'}"
                href="?catId=15"
            >运动</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'家庭'}"
                href="?catId=16"
            >家庭</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'古装'}"
                href="?catId=17"
            >古装</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'武侠'}"
                href="?catId=18"
            >武侠</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'西部'}"
                href="?catId=19"
            >西部</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'历史'}"
                href="?catId=20"
            >历史</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'传记'}"
                href="?catId=21"
            >传记</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'情色'}"
                href="?catId=22"
            >情色</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'歌舞'}"
                href="?catId=23"
            >歌舞</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'黑色电影'}"
                href="?catId=24"
            >黑色电影</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'短片'}"
                href="?catId=25"
            >短片</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'纪录片'}"
                href="?catId=13"
            >纪录片</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'其他'}"
                href="?catId=100"
            >其他</a>
          </li>
        </ul>
      </li>
      <li class="tags-line tags-line-border" data-val="{tagTypeName:'source'}">
        <div class="tags-title">区域 :</div>
        <ul class="tags">
          <li class="active" data-state-val="{ sourceTagName:'全部'}" >
            <a data-act="tag-click" data-val="{TagName:'全部'}"
                href="javascript:void(0);" style="cursor: default"
            >全部</a>
          </li>
          <li >
            <a data-act="tag-click" data-val="{TagName:'大陆'}"
                href="?sourceId=2"
            >大陆</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'美国'}"
                href="?sourceId=3"
            >美国</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'韩国'}"
                href="?sourceId=7"
            >韩国</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'日本'}"
                href="?sourceId=6"
            >日本</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'中国香港'}"
                href="?sourceId=10"
            >中国香港</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'中国台湾'}"
                href="?sourceId=13"
            >中国台湾</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'泰国'}"
                href="?sourceId=9"
            >泰国</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'印度'}"
                href="?sourceId=8"
            >印度</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'法国'}"
                href="?sourceId=4"
            >法国</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'英国'}"
                href="?sourceId=5"
            >英国</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'俄罗斯'}"
                href="?sourceId=14"
            >俄罗斯</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'意大利'}"
                href="?sourceId=16"
            >意大利</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'西班牙'}"
                href="?sourceId=17"
            >西班牙</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'德国'}"
                href="?sourceId=11"
            >德国</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'波兰'}"
                href="?sourceId=19"
            >波兰</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'澳大利亚'}"
                href="?sourceId=20"
            >澳大利亚</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'伊朗'}"
                href="?sourceId=21"
            >伊朗</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'其他'}"
                href="?sourceId=100"
            >其他</a>
          </li>
        </ul>
      </li>
      <li class="tags-line tags-line-border" data-val="{tagTypeName:'year'}">
        <div class="tags-title">年代 :</div>
        <ul class="tags">
          <li class="active" data-state-val="{ yearTagName:'全部'}" >
            <a data-act="tag-click" data-val="{TagName:'全部'}"
                href="javascript:void(0);" style="cursor: default"
            >全部</a>
          </li>
          <li >
            <a data-act="tag-click" data-val="{TagName:'2018以后'}"
                href="?yearId=14"
            >2018以后</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'2018'}"
                href="?yearId=13"
            >2018</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'2017'}"
                href="?yearId=12"
            >2017</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'2016'}"
                href="?yearId=11"
            >2016</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'2015'}"
                href="?yearId=10"
            >2015</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'2014'}"
                href="?yearId=9"
            >2014</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'2013'}"
                href="?yearId=8"
            >2013</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'2012'}"
                href="?yearId=7"
            >2012</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'2011'}"
                href="?yearId=6"
            >2011</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'2000-2010'}"
                href="?yearId=5"
            >2000-2010</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'90年代'}"
                href="?yearId=4"
            >90年代</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'80年代'}"
                href="?yearId=3"
            >80年代</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'70年代'}"
                href="?yearId=2"
            >70年代</a>
          <li >
            <a data-act="tag-click" data-val="{TagName:'更早'}"
                href="?yearId=1"
            >更早</a>
          </li>
        </ul>
      </li>
    </ul>
  </div>
  <div class="movies-panel">
    <div class="movies-sorter">
      <div class="cat-sorter">
        <ul>
          <li>
            <span class="sort-control-group" data-act='sort-click' data-val="{tagId: 1 }"
                  style="cursor: default"
            >
              <span class="sort-control sort-radio sort-radio-checked"></span>
              <span class="sort-control-label">按热门排序</span>
            </span>
          </li>
          <li>
            <span class="sort-control-group" data-act='sort-click' data-val="{tagId: 2 }"
                  data-href="?sortId=2"
                  onclick="location.href=this.getAttribute('data-href')"
            >
              <span class="sort-control sort-radio"></span>
              <span class="sort-control-label">按时间排序</span>
            </span>
          </li>
          <li>
            <span class="sort-control-group" data-act='sort-click' data-val="{tagId: 3 }"
                  data-href="?sortId=3"
                  onclick="location.href=this.getAttribute('data-href')"
            >
              <span class="sort-control sort-radio"></span>
              <span class="sort-control-label">按评价排序</span>
            </span>
          </li>
        </ul>
      </div>
      <div class="play-sorter">
        <span class="sort-control-group" data-act='isplay-click' data-val="{isplay:1}"
          data-href="?isPlay=1"
          onclick="location.href=this.getAttribute('data-href')">
          <span class="sort-control sort-checkbox"></span>
          <span class="sort-control-label">可播放</span>
        </span>
      </div>
    </div>
    <div class="movies-list">
    
    <dl class="movie-list">
  <dd>
    <div class="movie-item">
      <a href="/films/1182552" target="_blank" data-act="movie-click" data-val="{movieid:1182552}">
      <div class="movie-poster">
        <img class="poster-default" src="/home/picture/loading_2.e3d934bf_1.png" />
        <img data-src="/home/picture/82a01e8f773c273ba10b96b5acb06196381700_1.jpg@160w_220h_1e_1c" />
      </div>
      </a>
        <div class="channel-action channel-action-sale">
  <a>购票</a>
</div>

      <div class="movie-ver"><i class="imax3d"></i></div>
    </div>
    <div class="channel-detail movie-item-title" title="红海行动">
      <a href="/films/1182552" target="_blank" data-act="movies-click" data-val="{movieId:1182552}">红海行动</a>
    </div>
<div class="channel-detail channel-detail-orange"><i class="integer">9.</i><i class="fraction">5</i></div>
  
  <dd>
    <div class="movie-item">
      <a href="/films/344990" target="_blank" data-act="movie-click" data-val="{movieid:344990}">
      <div class="movie-poster">
        <img class="poster-default" src="/home/picture/loading_2.e3d934bf_1.png" />
        <img data-src="/home/picture/efb0a5e3989f45c4f3e22108bcc27ed71037307_1.jpg@160w_220h_1e_1c" />
      </div>
      </a>
        <div class="channel-action channel-action-sale">
  <a>购票</a>
</div>

      <div class="movie-ver"><i class="imax2d"></i></div>
    </div>
    <div class="channel-detail movie-item-title" title="唐人街探案2">
      <a href="/films/344990" target="_blank" data-act="movies-click" data-val="{movieId:344990}">唐人街探案2</a>
    </div>
<div class="channel-detail channel-detail-orange"><i class="integer">9.</i><i class="fraction">2</i></div>
  
  <dd>
    <div class="movie-item">
      <a href="/films/346272" target="_blank" data-act="movie-click" data-val="{movieid:346272}">
      <div class="movie-poster">
        <img class="poster-default" src="/home/picture/loading_2.e3d934bf_1.png" />
        <img data-src="/home/picture/ddbaa3f31cdbdfa6cd72721de63545021032555_1.jpg@160w_220h_1e_1c" />
      </div>
      </a>
        <div class="channel-action channel-action-sale">
  <a>购票</a>
</div>

      <div class="movie-ver"><i class="imax2d"></i></div>
    </div>
    <div class="channel-detail movie-item-title" title="捉妖记2">
      <a href="/films/346272" target="_blank" data-act="movies-click" data-val="{movieId:346272}">捉妖记2</a>
    </div>
<div class="channel-detail channel-detail-orange"><i class="integer">8.</i><i class="fraction">1</i></div>
  
  <dd>
    <div class="movie-item">
      <a href="/films/338463" target="_blank" data-act="movie-click" data-val="{movieid:338463}">
      <div class="movie-poster">
        <img class="poster-default" src="/home/picture/loading_2.e3d934bf_1.png" />
        <img data-src="/home/picture/bfd371ed5c7290ca47a41e45e36dfe43963033_1.jpg@160w_220h_1e_1c" />
      </div>
      </a>
        <div class="channel-action channel-action-sale">
  <a>购票</a>
</div>

      <div class="movie-ver"><i class="m3d"></i></div>
    </div>
    <div class="channel-detail movie-item-title" title="西游记女儿国">
      <a href="/films/338463" target="_blank" data-act="movies-click" data-val="{movieId:338463}">西游记女儿国</a>
    </div>
<div class="channel-detail channel-detail-orange"><i class="integer">7.</i><i class="fraction">8</i></div>
  
  <dd>
    <div class="movie-item">
      <a href="/films/1211482" target="_blank" data-act="movie-click" data-val="{movieid:1211482}">
      <div class="movie-poster">
        <img class="poster-default" src="/home/picture/loading_2.e3d934bf_1.png" />
        <img data-src="/home/picture/cec506a630a212cb68dcb7d09bfcc723762226_1.jpg@160w_220h_1e_1c" />
      </div>
      </a>
        <div class="channel-action channel-action-sale">
  <a>购票</a>
</div>

      <div class="movie-ver"><i class="m3d"></i></div>
    </div>
    <div class="channel-detail movie-item-title" title="熊出没·变形记">
      <a href="/films/1211482" target="_blank" data-act="movies-click" data-val="{movieId:1211482}">熊出没·变形记</a>
    </div>
<div class="channel-detail channel-detail-orange"><i class="integer">9.</i><i class="fraction">1</i></div>
  
  <dd>
    <div class="movie-item">
      <a href="/films/1211538" target="_blank" data-act="movie-click" data-val="{movieid:1211538}">
      <div class="movie-poster">
        <img class="poster-default" src="/home/picture/loading_2.e3d934bf_1.png" />
        <img data-src="/home/picture/9eb0146207d8c06c401034e784ee6c191914880_1.jpg@160w_220h_1e_1c" />
      </div>
      </a>
        <div class="channel-action channel-action-sale">
  <a>购票</a>
</div>

      <div class="movie-ver"></div>
    </div>
    <div class="channel-detail movie-item-title" title="祖宗十九代">
      <a href="/films/1211538" target="_blank" data-act="movies-click" data-val="{movieId:1211538}">祖宗十九代</a>
    </div>
<div class="channel-detail channel-detail-orange"><i class="integer">7.</i><i class="fraction">7</i></div>
  
  <dd>
    <div class="movie-item">
      <a href="/films/341138" target="_blank" data-act="movie-click" data-val="{movieid:341138}">
      <div class="movie-poster">
        <img class="poster-default" src="/home/picture/loading_2.e3d934bf_1.png" />
        <img data-src="/home/picture/65ee71e7b58be81f612f2d28907d5ef01223359_1.jpg@160w_220h_1e_1c" />
      </div>
      </a>
        
      <div class="movie-ver"><i class="imax3d"></i></div>
    </div>
    <div class="channel-detail movie-item-title" title="黑豹">
      <a href="/films/341138" target="_blank" data-act="movies-click" data-val="{movieId:341138}">黑豹</a>
    </div>
<div class="channel-detail channel-detail-orange">暂无评分</div>
  
  <dd>
    <div class="movie-item">
      <a href="/films/247083" target="_blank" data-act="movie-click" data-val="{movieid:247083}">
      <div class="movie-poster">
        <img class="poster-default" src="/home/picture/loading_2.e3d934bf_1.png" />
        <img data-src="/home/picture/bb5cb9db65983c0e69bcc9ddec0f24e2187801_1.jpg@160w_220h_1e_1c" />
      </div>
      </a>
        
      <div class="movie-ver"></div>
    </div>
    <div class="channel-detail movie-item-title" title="闺蜜2">
      <a href="/films/247083" target="_blank" data-act="movies-click" data-val="{movieId:247083}">闺蜜2</a>
    </div>
<div class="channel-detail channel-detail-orange">暂无评分</div>
  
  <dd>
    <div class="movie-item">
      <a href="/films/1204720" target="_blank" data-act="movie-click" data-val="{movieid:1204720}">
      <div class="movie-poster">
        <img class="poster-default" src="/home/picture/loading_2.e3d934bf_1.png" />
        <img data-src="/home/picture/ac672dbf7dd3045a1bb3a4b54bfa64672172928.jpg@160w_220h_1e_1c" />
      </div>
      </a>
        
      <div class="movie-ver"></div>
    </div>
    <div class="channel-detail movie-item-title" title="妈妈咪鸭">
      <a href="/films/1204720" target="_blank" data-act="movies-click" data-val="{movieId:1204720}">妈妈咪鸭</a>
    </div>
<div class="channel-detail channel-detail-orange"><i class="integer">9.</i><i class="fraction">1</i></div>
  
  <dd>
    <div class="movie-item">
      <a href="/films/343762" target="_blank" data-act="movie-click" data-val="{movieid:343762}">
      <div class="movie-poster">
        <img class="poster-default" src="/home/picture/loading_2.e3d934bf_1.png" />
        <img data-src="/home/picture/b0df0a3f7e07571c1193819c5a4f88ee827964_1.jpg@160w_220h_1e_1c" />
      </div>
      </a>
        
      <div class="movie-ver"></div>
    </div>
    <div class="channel-detail movie-item-title" title="比得兔">
      <a href="/films/343762" target="_blank" data-act="movies-click" data-val="{movieId:343762}">比得兔</a>
    </div>
<div class="channel-detail channel-detail-orange"><i class="integer">9.</i><i class="fraction">5</i></div>
  
  <dd>
    <div class="movie-item">
      <a href="/films/667783" target="_blank" data-act="movie-click" data-val="{movieid:667783}">
      <div class="movie-poster">
        <img class="poster-default" src="/home/picture/loading_2.e3d934bf_1.png" />
        <img data-src="/home/picture/961642c88370bbabe018f5672dc24a581826950.jpg@160w_220h_1e_1c" />
      </div>
      </a>
        <div class="channel-action channel-action-sale">
  <a>购票</a>
</div>

      <div class="movie-ver"></div>
    </div>
    <div class="channel-detail movie-item-title" title="爱在记忆消逝前">
      <a href="/films/667783" target="_blank" data-act="movies-click" data-val="{movieId:667783}">爱在记忆消逝前</a>
    </div>
<div class="channel-detail channel-detail-orange"><i class="integer">9.</i><i class="fraction">0</i></div>
  
  <dd>
    <div class="movie-item">
      <a href="/films/343136" target="_blank" data-act="movie-click" data-val="{movieid:343136}">
      <div class="movie-poster">
        <img class="poster-default" src="/home/picture/loading_2.e3d934bf_1.png" />
        <img data-src="/home/picture/f042762fa4a975501b69d4f6af6520341035964_1.jpg@160w_220h_1e_1c" />
      </div>
      </a>
        
      <div class="movie-ver"></div>
    </div>
    <div class="channel-detail movie-item-title" title="小萝莉的猴神大叔">
      <a href="/films/343136" target="_blank" data-act="movies-click" data-val="{movieId:343136}">小萝莉的猴神大叔</a>
    </div>
<div class="channel-detail channel-detail-orange">暂无评分</div>
  
  <dd>
    <div class="movie-item">
      <a href="/films/78460" target="_blank" data-act="movie-click" data-val="{movieid:78460}">
      <div class="movie-poster">
        <img class="poster-default" src="/home/picture/loading_2.e3d934bf_1.png" />
        <img data-src="/home/picture/d2fe1f431a605054370a51cde7d62e3a327120.jpg@160w_220h_1e_1c" />
      </div>
      </a>
        
      <div class="movie-ver"><i class="imax3d"></i></div>
    </div>
    <div class="channel-detail movie-item-title" title="环太平洋：雷霆再起">
      <a href="/films/78460" target="_blank" data-act="movies-click" data-val="{movieId:78460}">环太平洋：雷霆再起</a>
    </div>
<div class="channel-detail channel-detail-orange">暂无评分</div>
  
  <dd>
    <div class="movie-item">
      <a href="/films/257739" target="_blank" data-act="movie-click" data-val="{movieid:257739}">
      <div class="movie-poster">
        <img class="poster-default" src="/home/picture/loading_2.e3d934bf_1.png" />
        <img data-src="/home/picture/a08e257b4d2d4aaed7ddb96fe2fc64211676721.jpg@160w_220h_1e_1c" />
      </div>
      </a>
        
      <div class="movie-ver"><i class="imax3d"></i></div>
    </div>
    <div class="channel-detail movie-item-title" title="古墓丽影：源起之战">
      <a href="/films/257739" target="_blank" data-act="movies-click" data-val="{movieId:257739}">古墓丽影：源起之战</a>
    </div>
<div class="channel-detail channel-detail-orange">暂无评分</div>
  
  <dd>
    <div class="movie-item">
      <a href="/films/344929" target="_blank" data-act="movie-click" data-val="{movieid:344929}">
      <div class="movie-poster">
        <img class="poster-default" src="/home/picture/loading_2.e3d934bf_1.png" />
        <img data-src="/home/picture/770b38cff221ad8545bf7bd3eba9912b1601613.jpg@160w_220h_1e_1c" />
      </div>
      </a>
        <div class="channel-action channel-action-sale">
  <a>购票</a>
</div>

      <div class="movie-ver"></div>
    </div>
    <div class="channel-detail movie-item-title" title="前任3：再见前任">
      <a href="/films/344929" target="_blank" data-act="movies-click" data-val="{movieId:344929}">前任3：再见前任</a>
    </div>
<div class="channel-detail channel-detail-orange"><i class="integer">9.</i><i class="fraction">2</i></div>
  
  <dd>
    <div class="movie-item">
      <a href="/films/342754" target="_blank" data-act="movie-click" data-val="{movieid:342754}">
      <div class="movie-poster">
        <img class="poster-default" src="/home/picture/loading_2.e3d934bf_1.png" />
        <img data-src="/home/picture/20e79043b6c5c11992e033bd182fae8b1032014_1.jpg@160w_220h_1e_1c" />
      </div>
      </a>
        
      <div class="movie-ver"></div>
    </div>
    <div class="channel-detail movie-item-title" title="三块广告牌">
      <a href="/films/342754" target="_blank" data-act="movies-click" data-val="{movieId:342754}">三块广告牌</a>
    </div>
<div class="channel-detail channel-detail-orange">暂无评分</div>
  
  <dd>
    <div class="movie-item">
      <a href="/films/1212982" target="_blank" data-act="movie-click" data-val="{movieid:1212982}">
      <div class="movie-poster">
        <img class="poster-default" src="/home/picture/loading_2.e3d934bf_1.png" />
        <img data-src="/home/picture/b830d45b42995ab6ddb44750fda13bbe2433047.jpg@160w_220h_1e_1c" />
      </div>
      </a>
        <div class="channel-action channel-action-sale">
  <a>购票</a>
</div>

      <div class="movie-ver"></div>
    </div>
    <div class="channel-detail movie-item-title" title="人怕出名猪怕壮">
      <a href="/films/1212982" target="_blank" data-act="movies-click" data-val="{movieId:1212982}">人怕出名猪怕壮</a>
    </div>
<div class="channel-detail channel-detail-orange"><i class="integer">8.</i><i class="fraction">5</i></div>
  
  <dd>
    <div class="movie-item">
      <a href="/films/1203436" target="_blank" data-act="movie-click" data-val="{movieid:1203436}">
      <div class="movie-poster">
        <img class="poster-default" src="/home/picture/loading_2.e3d934bf_1.png" />
        <img data-src="/home/picture/f36f161968a579c1d3ba961d6c8367743999240_1.jpg@160w_220h_1e_1c" />
      </div>
      </a>
        
      <div class="movie-ver"></div>
    </div>
    <div class="channel-detail movie-item-title" title="金钱世界">
      <a href="/films/1203436" target="_blank" data-act="movies-click" data-val="{movieId:1203436}">金钱世界</a>
    </div>
<div class="channel-detail channel-detail-orange">暂无评分</div>
  
  <dd>
    <div class="movie-item">
      <a href="/films/1170264" target="_blank" data-act="movie-click" data-val="{movieid:1170264}">
      <div class="movie-poster">
        <img class="poster-default" src="/home/picture/loading_2.e3d934bf_1.png" />
        <img data-src="/home/picture/fe0d4da87d70ba2b91e10ac98e0bf5ef1365131.png@160w_220h_1e_1c" />
      </div>
      </a>
        <div class="channel-action channel-action-sale">
  <a>购票</a>
</div>

      <div class="movie-ver"><i class="imax2d"></i></div>
    </div>
    <div class="channel-detail movie-item-title" title="芳华">
      <a href="/films/1170264" target="_blank" data-act="movies-click" data-val="{movieId:1170264}">芳华</a>
    </div>
<div class="channel-detail channel-detail-orange"><i class="integer">9.</i><i class="fraction">1</i></div>
  
  <dd>
    <div class="movie-item">
      <a href="/films/71946" target="_blank" data-act="movie-click" data-val="{movieid:71946}">
      <div class="movie-poster">
        <img class="poster-default" src="/home/picture/loading_2.e3d934bf_1.png" />
        <img data-src="/home/picture/75352182978ae891abb55727f51c28b6305181.jpg@160w_220h_1e_1c" />
      </div>
      </a>
        <div class="channel-action channel-action-sale">
  <a>购票</a>
</div>

      <div class="movie-ver"></div>
    </div>
    <div class="channel-detail movie-item-title" title="无问西东">
      <a href="/films/71946" target="_blank" data-act="movies-click" data-val="{movieId:71946}">无问西东</a>
    </div>
<div class="channel-detail channel-detail-orange"><i class="integer">8.</i><i class="fraction">6</i></div>
  
  <dd>
    <div class="movie-item">
      <a href="/films/345013" target="_blank" data-act="movie-click" data-val="{movieid:345013}">
      <div class="movie-poster">
        <img class="poster-default" src="/home/picture/loading_2.e3d934bf_1.png" />
        <img data-src="/home/picture/c30231f4048d5ebad1c1dd15bc9a1991159737.jpg@160w_220h_1e_1c" />
      </div>
      </a>
        
      <div class="movie-ver"></div>
    </div>
    <div class="channel-detail movie-item-title" title="战神纪">
      <a href="/films/345013" target="_blank" data-act="movies-click" data-val="{movieId:345013}">战神纪</a>
    </div>
<div class="channel-detail channel-detail-orange">暂无评分</div>
  
  <dd>
    <div class="movie-item">
      <a href="/films/1208748" target="_blank" data-act="movie-click" data-val="{movieid:1208748}">
      <div class="movie-poster">
        <img class="poster-default" src="/home/picture/loading_2.e3d934bf_1.png" />
        <img data-src="/home/picture/0187900152d8667605609926065f14e2325061.jpg@160w_220h_1e_1c" />
      </div>
      </a>
        <div class="channel-action channel-action-sale">
  <a>购票</a>
</div>

      <div class="movie-ver"></div>
    </div>
    <div class="channel-detail movie-item-title" title="小马宝莉大电影">
      <a href="/films/1208748" target="_blank" data-act="movies-click" data-val="{movieId:1208748}">小马宝莉大电影</a>
    </div>
<div class="channel-detail channel-detail-orange"><i class="integer">8.</i><i class="fraction">8</i></div>
  
  <dd>
    <div class="movie-item">
      <a href="/films/257714" target="_blank" data-act="movie-click" data-val="{movieid:257714}">
      <div class="movie-poster">
        <img class="poster-default" src="/home/picture/loading_2.e3d934bf_1.png" />
        <img data-src="/home/picture/a47d461c3e5acda6f99fafe8edea6ecc1309176.jpg@160w_220h_1e_1c" />
      </div>
      </a>
        
      <div class="movie-ver"></div>
    </div>
    <div class="channel-detail movie-item-title" title="新哥斯拉">
      <a href="/films/257714" target="_blank" data-act="movies-click" data-val="{movieId:257714}">新哥斯拉</a>
    </div>
<div class="channel-detail channel-detail-orange">暂无评分</div>
  
  <dd>
    <div class="movie-item">
      <a href="/films/672130" target="_blank" data-act="movie-click" data-val="{movieid:672130}">
      <div class="movie-poster">
        <img class="poster-default" src="/home/picture/loading_2.e3d934bf_1.png" />
        <img data-src="/home/picture/862563dfea65ac947a149ce466f7f1771014432.jpg@160w_220h_1e_1c" />
      </div>
      </a>
        <div class="channel-action channel-action-sale">
  <a>购票</a>
</div>

      <div class="movie-ver"></div>
    </div>
    <div class="channel-detail movie-item-title" title="奇迹男孩">
      <a href="/films/672130" target="_blank" data-act="movies-click" data-val="{movieId:672130}">奇迹男孩</a>
    </div>
<div class="channel-detail channel-detail-orange"><i class="integer">9.</i><i class="fraction">3</i></div>
  
  <dd>
    <div class="movie-item">
      <a href="/films/338493" target="_blank" data-act="movie-click" data-val="{movieid:338493}">
      <div class="movie-poster">
        <img class="poster-default" src="/home/picture/loading_2.e3d934bf_1.png" />
        <img data-src="/home/picture/84badad102e99ab4043226a0f7a5dda319112992.jpg@160w_220h_1e_1c" />
      </div>
      </a>
        <div class="channel-action channel-action-sale">
  <a>购票</a>
</div>

      <div class="movie-ver"><i class="m3d"></i></div>
    </div>
    <div class="channel-detail movie-item-title" title="南极之恋">
      <a href="/films/338493" target="_blank" data-act="movies-click" data-val="{movieId:338493}">南极之恋</a>
    </div>
<div class="channel-detail channel-detail-orange"><i class="integer">9.</i><i class="fraction">0</i></div>
  
  <dd>
    <div class="movie-item">
      <a href="/films/1204714" target="_blank" data-act="movie-click" data-val="{movieid:1204714}">
      <div class="movie-poster">
        <img class="poster-default" src="/home/picture/loading_2.e3d934bf_1.png" />
        <img data-src="/home/picture/5363c7cdaa05cf8148c1797b32654416823326.jpg@160w_220h_1e_1c" />
      </div>
      </a>
        <div class="channel-action channel-action-sale">
  <a>购票</a>
</div>

      <div class="movie-ver"></div>
    </div>
    <div class="channel-detail movie-item-title" title="忌日快乐">
      <a href="/films/1204714" target="_blank" data-act="movies-click" data-val="{movieId:1204714}">忌日快乐</a>
    </div>
<div class="channel-detail channel-detail-orange"><i class="integer">8.</i><i class="fraction">4</i></div>
  
  <dd>
    <div class="movie-item">
      <a href="/films/246714" target="_blank" data-act="movie-click" data-val="{movieid:246714}">
      <div class="movie-poster">
        <img class="poster-default" src="/home/picture/loading_2.e3d934bf_1.png" />
        <img data-src="/home/picture/18121bb13bd8b36243a871d075bcc80c1015601.jpg@160w_220h_1e_1c" />
      </div>
      </a>
        <div class="channel-action channel-action-sale">
  <a>购票</a>
</div>

      <div class="movie-ver"><i class="imax2d"></i></div>
    </div>
    <div class="channel-detail movie-item-title" title="马戏之王">
      <a href="/films/246714" target="_blank" data-act="movies-click" data-val="{movieId:246714}">马戏之王</a>
    </div>
<div class="channel-detail channel-detail-orange"><i class="integer">9.</i><i class="fraction">0</i></div>
  
  <dd>
    <div class="movie-item">
      <a href="/films/1212533" target="_blank" data-act="movie-click" data-val="{movieid:1212533}">
      <div class="movie-poster">
        <img class="poster-default" src="/home/picture/loading_2.e3d934bf_1.png" />
        <img data-src="/home/picture/50a802c7a930546e2e9b970c6f761a09227754.jpg@160w_220h_1e_1c" />
      </div>
      </a>
        <div class="channel-action channel-action-sale">
  <a>购票</a>
</div>

      <div class="movie-ver"><i class="m3d"></i></div>
    </div>
    <div class="channel-detail movie-item-title" title="金龟子">
      <a href="/films/1212533" target="_blank" data-act="movies-click" data-val="{movieId:1212533}">金龟子</a>
    </div>
<div class="channel-detail channel-detail-orange"><i class="integer">8.</i><i class="fraction">6</i></div>
  
  <dd>
    <div class="movie-item">
      <a href="/home//films/344950" target="_blank" data-act="movie-click" data-val="{movieid:344950}">
      <div class="movie-poster">
        <img class="poster-default" src="/home/picture/loading_2.e3d934bf_1.png" />
        <img data-src="/home/picture/9fc19a146931e911be8ec1fd45ad6348231372.jpg@160w_220h_1e_1c" />
      </div>
      </a>
        
      <div class="movie-ver"></div>
    </div>
    <div class="channel-detail movie-item-title" title="21克拉">
      <a href="/films/344950" target="_blank" data-act="movies-click" data-val="{movieId:344950}">21克拉</a>
    </div>
<div class="channel-detail channel-detail-orange">暂无评分</div>
  
  <dd>
    <div class="movie-item">
      <a href="/films/248170" target="_blank" data-act="movie-click" data-val="{movieid:248170}">
      <div class="movie-poster">
        <img class="poster-default" src="/home/picture/loading_2.e3d934bf_1.png" />
        <img data-src="/home/picture/c550b2cf6579a364d562e91dfb590beb86338.jpg@160w_220h_1e_1c" />
      </div>
      </a>
        
      <div class="movie-ver"><i class="imax3d"></i></div>
    </div>
    <div class="channel-detail movie-item-title" title="复仇者联盟3：无限战争">
      <a href="/films/248170" target="_blank" data-act="movies-click" data-val="{movieId:248170}">复仇者联盟3：无限战争</a>
    </div>
<div class="channel-detail channel-detail-orange">暂无评分</div>
  
</dl>


    </div>
    <div class="movies-pager">
      
  
  <ul class="list-pager">



  
      <li class="active">
    <a class="page_1"
      href="javascript:void(0);" style="cursor: default"
  >1</a>

</li>
  <li >
    <a class="page_2"
      href="?offset=30"
  >2</a>

</li>
  <li >
    <a class="page_3"
      href="?offset=60"
  >3</a>

</li>
  <li >
    <a class="page_4"
      href="?offset=90"
  >4</a>

</li>
  <li >
    <a class="page_5"
      href="?offset=120"
  >5</a>

</li>

    <li class="sep">...</li>
      <li >
    <a class="page_27464"
      href="?offset=823890"
  >27464</a>

</li>

  

<li>  <a class="page_2"
      href="?offset=30"
  >下一页</a>
</li>
</ul>


    </div>
  </div>
</div>

    </div>
  <script type="text/javascript">
  $('.navbar li a:contains(电影)').toggleClass('active');
</script>
@endsection