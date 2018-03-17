@extends('home/layouts.layout')
$section('css')
<link rel="stylesheet" href="/home/css/cinemas-list.81574a4d.css"/>
@show
@section('header')
   

<div class="container" id="app" class="page-cinemas/list" >
  <div class="tags-panel">
    <ul class="tags-lines">
    
      

      
        <li class="tags-line" data-type="brand">
          <div class="tags-title">品牌:</div>
          <ul class="tags">
            <li class="active">
              <a data-act="tag-click" data-val="{TagName:'全部', city_id:1}" data-id="-1" href="?brandId=-1" data-bid="b_x9tdpsnb">全部</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'保利国际影城', city_id:1}" data-id="24472" href="?brandId=24472" data-bid="b_x9tdpsnb">保利国际影城</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'大地影院', city_id:1}" data-id="384262" href="?brandId=384262" data-bid="b_x9tdpsnb">大地影院</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'耀莱成龙国际影城', city_id:1}" data-id="30227" href="?brandId=30227" data-bid="b_x9tdpsnb">耀莱成龙国际影城</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'万达影城', city_id:1}" data-id="102642" href="?brandId=102642" data-bid="b_x9tdpsnb">万达影城</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'博纳国际影城', city_id:1}" data-id="24595" href="?brandId=24595" data-bid="b_x9tdpsnb">博纳国际影城</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'金逸影城', city_id:1}" data-id="1079568" href="?brandId=1079568" data-bid="b_x9tdpsnb">金逸影城</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'中影国际影城', city_id:1}" data-id="23745" href="?brandId=23745" data-bid="b_x9tdpsnb">中影国际影城</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'星美国际影城', city_id:1}" data-id="30032" href="?brandId=30032" data-bid="b_x9tdpsnb">星美国际影城</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'CGV影城', city_id:1}" data-id="2020418" href="?brandId=2020418" data-bid="b_x9tdpsnb">CGV影城</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'橙天嘉禾影城', city_id:1}" data-id="24745" href="?brandId=24745" data-bid="b_x9tdpsnb">橙天嘉禾影城</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'新华国际影城', city_id:1}" data-id="29894" href="?brandId=29894" data-bid="b_x9tdpsnb">新华国际影城</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'百老汇影城', city_id:1}" data-id="24377" href="?brandId=24377" data-bid="b_x9tdpsnb">百老汇影城</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'UME国际影城', city_id:1}" data-id="24071" href="?brandId=24071" data-bid="b_x9tdpsnb">UME国际影城</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'幸福蓝海国际影城', city_id:1}" data-id="30053" href="?brandId=30053" data-bid="b_x9tdpsnb">幸福蓝海国际影城</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'首都电影院', city_id:1}" data-id="1162239" href="?brandId=1162239" data-bid="b_x9tdpsnb">首都电影院</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'华谊兄弟影院', city_id:1}" data-id="275830" href="?brandId=275830" data-bid="b_x9tdpsnb">华谊兄弟影院</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'卢米埃影城', city_id:1}" data-id="292030" href="?brandId=292030" data-bid="b_x9tdpsnb">卢米埃影城</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'沃美影城', city_id:1}" data-id="29462" href="?brandId=29462" data-bid="b_x9tdpsnb">沃美影城</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'美嘉欢乐影城', city_id:1}" data-id="27617" href="?brandId=27617" data-bid="b_x9tdpsnb">美嘉欢乐影城</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'嘉华国际影城', city_id:1}" data-id="26413" href="?brandId=26413" data-bid="b_x9tdpsnb">嘉华国际影城</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'17.5影城', city_id:1}" data-id="23854" href="?brandId=23854" data-bid="b_x9tdpsnb">17.5影城</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'太平洋电影城', city_id:1}" data-id="28975" href="?brandId=28975" data-bid="b_x9tdpsnb">太平洋电影城</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'SFC上影影城', city_id:1}" data-id="2880988" href="?brandId=2880988" data-bid="b_x9tdpsnb">SFC上影影城</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'世茂国际影城', city_id:1}" data-id="28741" href="?brandId=28741" data-bid="b_x9tdpsnb">世茂国际影城</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'嘉美国际影城', city_id:1}" data-id="352923" href="?brandId=352923" data-bid="b_x9tdpsnb">嘉美国际影城</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'东都影城', city_id:1}" data-id="133085" href="?brandId=133085" data-bid="b_x9tdpsnb">东都影城</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'鲁信影城', city_id:1}" data-id="27424" href="?brandId=27424" data-bid="b_x9tdpsnb">鲁信影城</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'华影国际影城', city_id:1}" data-id="271399" href="?brandId=271399" data-bid="b_x9tdpsnb">华影国际影城</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'搜秀影城', city_id:1}" data-id="28916" href="?brandId=28916" data-bid="b_x9tdpsnb">搜秀影城</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'横店电影城', city_id:1}" data-id="26045" href="?brandId=26045" data-bid="b_x9tdpsnb">横店电影城</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'阳光影城', city_id:1}" data-id="30206" href="?brandId=30206" data-bid="b_x9tdpsnb">阳光影城</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'其他', city_id:1}" data-id="0" href="?brandId=0" data-bid="b_x9tdpsnb">其他</a>
            </li>
          </ul>
        </li>
        <li class="tags-line tags-line-border" data-type="district">
          <div class="tags-title">行政区:</div>
          <ul class="tags">
            <li class="active">
              <a data-act="tag-click" data-val="{TagName:'全部', city_id:1}" data-id="-1" href="?districtId=-1" data-bid="b_arz3865r">全部</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'地铁附近', city_id:1}" data-id="-2" href="?districtId=-2" data-bid="b_arz3865r">地铁附近</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'朝阳区', city_id:1}" data-id="14" href="?districtId=14" data-bid="b_arz3865r">朝阳区</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'海淀区', city_id:1}" data-id="17" href="?districtId=17" data-bid="b_arz3865r">海淀区</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'丰台区', city_id:1}" data-id="20" href="?districtId=20" data-bid="b_arz3865r">丰台区</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'大兴区', city_id:1}" data-id="4752" href="?districtId=4752" data-bid="b_arz3865r">大兴区</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'东城区', city_id:1}" data-id="15" href="?districtId=15" data-bid="b_arz3865r">东城区</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'西城区', city_id:1}" data-id="16" href="?districtId=16" data-bid="b_arz3865r">西城区</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'通州区', city_id:1}" data-id="4751" href="?districtId=4751" data-bid="b_arz3865r">通州区</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'房山区', city_id:1}" data-id="710" href="?districtId=710" data-bid="b_arz3865r">房山区</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'昌平区', city_id:1}" data-id="4750" href="?districtId=4750" data-bid="b_arz3865r">昌平区</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'顺义区', city_id:1}" data-id="708" href="?districtId=708" data-bid="b_arz3865r">顺义区</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'怀柔区', city_id:1}" data-id="711" href="?districtId=711" data-bid="b_arz3865r">怀柔区</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'门头沟', city_id:1}" data-id="709" href="?districtId=709" data-bid="b_arz3865r">门头沟</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'石景山区', city_id:1}" data-id="172" href="?districtId=172" data-bid="b_arz3865r">石景山区</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'密云区', city_id:1}" data-id="2074" href="?districtId=2074" data-bid="b_arz3865r">密云区</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'平谷区', city_id:1}" data-id="2073" href="?districtId=2073" data-bid="b_arz3865r">平谷区</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'延庆区', city_id:1}" data-id="2075" href="?districtId=2075" data-bid="b_arz3865r">延庆区</a>
            </li>
          </ul>
        </li>
        <li class="tags-line tags-line-border" data-type="hallType">
          <div class="tags-title">特殊厅:</div>
          <ul class="tags">
            <li class="active">
              <a data-act="tag-click" data-val="{TagName:'全部', city_id:1}" data-id="-1" href="?hallType=-1" data-bid="b_bmcmwqi9">全部</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'IMAX厅', city_id:1}" data-id="2" href="?hallType=2" data-bid="b_bmcmwqi9">IMAX厅</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'中国巨幕厅', city_id:1}" data-id="3" href="?hallType=3" data-bid="b_bmcmwqi9">中国巨幕厅</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'杜比全景声厅', city_id:1}" data-id="9" href="?hallType=9" data-bid="b_bmcmwqi9">杜比全景声厅</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'杜比影院', city_id:1}" data-id="22" href="?hallType=22" data-bid="b_bmcmwqi9">杜比影院</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'RealD厅', city_id:1}" data-id="10" href="?hallType=10" data-bid="b_bmcmwqi9">RealD厅</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'RealD 6FL厅', city_id:1}" data-id="11" href="?hallType=11" data-bid="b_bmcmwqi9">RealD 6FL厅</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'LUXE巨幕厅', city_id:1}" data-id="5" href="?hallType=5" data-bid="b_bmcmwqi9">LUXE巨幕厅</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'4DX厅', city_id:1}" data-id="4" href="?hallType=4" data-bid="b_bmcmwqi9">4DX厅</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'DTS:X 临境音厅', city_id:1}" data-id="25" href="?hallType=25" data-bid="b_bmcmwqi9">DTS:X 临境音厅</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'儿童厅', city_id:1}" data-id="24" href="?hallType=24" data-bid="b_bmcmwqi9">儿童厅</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'4K厅', city_id:1}" data-id="8" href="?hallType=8" data-bid="b_bmcmwqi9">4K厅</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'4D厅', city_id:1}" data-id="7" href="?hallType=7" data-bid="b_bmcmwqi9">4D厅</a>
            </li>
            <li class="">
              <a data-act="tag-click" data-val="{TagName:'巨幕厅', city_id:1}" data-id="6" href="?hallType=6" data-bid="b_bmcmwqi9">巨幕厅</a>
            </li>
          </ul>
        </li>
    </ul>
  </div>

  <div class="cinemas-list">
    <h2 class="cinemas-list-header">影院列表</h2>
    
      <div class="cinema-cell">
        <div class="cinema-info">
          <a href="/cinema/15280?poi=99389254" class="cinema-name" data-act="cinema-name-click" data-bid="b_4tkpau4m" data-val="{city_id: 1, cinema_id: 15280}">青春光线电影院</a>
          <p class="cinema-address">地址：东城区滨河路乙1号雍和航星园74-76号楼</p>
        </div>

        <div class="buy-btn">
          <a href="/cinema/15280?poi=99389254" data-act="buy-btn-click" data-val="{city_id: 1, cinema_id: 15280}" data-bid="b_4tkpau4m">选座购票</a>
        </div>
        
        <div class="price">
            <span class="rmb red">￥</span>
            <span class="price-num red"><span class="stonefont">&#xf0d8;&#xf19d;</span></span>
            <span>起</span>
        </div>
      </div>
      <div class="cinema-cell">
        <div class="cinema-info">
          <a href="/cinema/17280?poi=156648558" class="cinema-name" data-act="cinema-name-click" data-bid="b_4tkpau4m" data-val="{city_id: 1, cinema_id: 17280}">泛影城(京港城店)</a>
          <p class="cinema-address">地址：丰台区光彩路京港城生活广场6楼（京深海鲜市场对面）</p>
        </div>

        <div class="buy-btn">
          <a href="/cinema/17280?poi=156648558" data-act="buy-btn-click" data-val="{city_id: 1, cinema_id: 17280}" data-bid="b_4tkpau4m">选座购票</a>
        </div>
        
        <div class="price">
            <span class="rmb red">￥</span>
            <span class="price-num red"><span class="stonefont">&#xf88e;&#xf88e;</span></span>
            <span>起</span>
        </div>
      </div>
      <div class="cinema-cell">
        <div class="cinema-info">
          <a href="/cinema/23901?poi=160306126" class="cinema-name" data-act="cinema-name-click" data-bid="b_4tkpau4m" data-val="{city_id: 1, cinema_id: 23901}">百誉朗克影城</a>
          <p class="cinema-address">地址：朝阳区林萃西里16号楼华创生活广场F1层</p>
        </div>

        <div class="buy-btn">
          <a href="/cinema/23901?poi=160306126" data-act="buy-btn-click" data-val="{city_id: 1, cinema_id: 23901}" data-bid="b_4tkpau4m">选座购票</a>
        </div>
        
        <div class="price">
            <span class="rmb red">￥</span>
            <span class="price-num red"><span class="stonefont">&#xf88e;&#xf716;</span></span>
            <span>起</span>
        </div>
      </div>
      <div class="cinema-cell">
        <div class="cinema-info">
          <a href="/cinema/182?poi=3260641" class="cinema-name" data-act="cinema-name-click" data-bid="b_4tkpau4m" data-val="{city_id: 1, cinema_id: 182}">门头沟影剧院</a>
          <p class="cinema-address">地址：门头沟区新桥大街12号</p>
        </div>

        <div class="buy-btn">
          <a href="/cinema/182?poi=3260641" data-act="buy-btn-click" data-val="{city_id: 1, cinema_id: 182}" data-bid="b_4tkpau4m">选座购票</a>
        </div>
        
        <div class="price">
            <span class="rmb red">￥</span>
            <span class="price-num red"><span class="stonefont">&#xf88e;&#xf88e;</span></span>
            <span>起</span>
        </div>
      </div>
      <div class="cinema-cell">
        <div class="cinema-info">
          <a href="/cinema/263?poi=89010" class="cinema-name" data-act="cinema-name-click" data-bid="b_4tkpau4m" data-val="{city_id: 1, cinema_id: 263}">大观楼电影院</a>
          <p class="cinema-address">地址：西城区前门大街大栅栏街36号</p>
        </div>

        <div class="buy-btn">
          <a href="/cinema/263?poi=89010" data-act="buy-btn-click" data-val="{city_id: 1, cinema_id: 263}" data-bid="b_4tkpau4m">选座购票</a>
        </div>
        
        <div class="price">
            <span class="rmb red">￥</span>
            <span class="price-num red"><span class="stonefont">&#xf88e;&#xf0d8;</span></span>
            <span>起</span>
        </div>
      </div>
      <div class="cinema-cell">
        <div class="cinema-info">
          <a href="/cinema/13618?poi=52294367" class="cinema-name" data-act="cinema-name-click" data-bid="b_4tkpau4m" data-val="{city_id: 1, cinema_id: 13618}">SFC上影影城(房山绿地店)</a>
          <p class="cinema-address">地址：房山区黄辛庄路口绿地缤纷城3层</p>
        </div>

        <div class="buy-btn">
          <a href="/cinema/13618?poi=52294367" data-act="buy-btn-click" data-val="{city_id: 1, cinema_id: 13618}" data-bid="b_4tkpau4m">选座购票</a>
        </div>
        
        <div class="price">
            <span class="rmb red">￥</span>
            <span class="price-num red"><span class="stonefont">&#xf88e;&#xf0d8;</span></span>
            <span>起</span>
        </div>
      </div>
      <div class="cinema-cell">
        <div class="cinema-info">
          <a href="/cinema/145?poi=1436368" class="cinema-name" data-act="cinema-name-click" data-bid="b_4tkpau4m" data-val="{city_id: 1, cinema_id: 145}">良乡影剧院</a>
          <p class="cinema-address">地址：房山区良乡拱辰大街31号</p>
        </div>

        <div class="buy-btn">
          <a href="/cinema/145?poi=1436368" data-act="buy-btn-click" data-val="{city_id: 1, cinema_id: 145}" data-bid="b_4tkpau4m">选座购票</a>
        </div>
        
        <div class="price">
            <span class="rmb red">￥</span>
            <span class="price-num red"><span class="stonefont">&#xee55;&#xf88e;</span></span>
            <span>起</span>
        </div>
      </div>
      <div class="cinema-cell">
        <div class="cinema-info">
          <a href="/cinema/94?poi=1076062" class="cinema-name" data-act="cinema-name-click" data-bid="b_4tkpau4m" data-val="{city_id: 1, cinema_id: 94}">百老汇电影中心(万国城店)</a>
          <p class="cinema-address">地址：东城区香河园路1号当代MOMA北区T4座（近东直门公交枢纽）</p>
        </div>

        <div class="buy-btn">
          <a href="/cinema/94?poi=1076062" data-act="buy-btn-click" data-val="{city_id: 1, cinema_id: 94}" data-bid="b_4tkpau4m">选座购票</a>
        </div>
        
        <div class="price">
            <span class="rmb red">￥</span>
            <span class="price-num red"><span class="stonefont">&#xf0d8;&#xf0d8;</span></span>
            <span>起</span>
        </div>
      </div>
      <div class="cinema-cell">
        <div class="cinema-info">
          <a href="/cinema/6227?poi=2371476" class="cinema-name" data-act="cinema-name-click" data-bid="b_4tkpau4m" data-val="{city_id: 1, cinema_id: 6227}">百尚影城</a>
          <p class="cinema-address">地址：通州区马驹桥镇百尚生活广场3楼</p>
        </div>

        <div class="buy-btn">
          <a href="/cinema/6227?poi=2371476" data-act="buy-btn-click" data-val="{city_id: 1, cinema_id: 6227}" data-bid="b_4tkpau4m">选座购票</a>
        </div>
        
        <div class="price">
            <span class="rmb red">￥</span>
            <span class="price-num red"><span class="stonefont">&#xf88e;&#xf19d;</span></span>
            <span>起</span>
        </div>
      </div>
      <div class="cinema-cell">
        <div class="cinema-info">
          <a href="/cinema/15859?poi=94444126" class="cinema-name" data-act="cinema-name-click" data-bid="b_4tkpau4m" data-val="{city_id: 1, cinema_id: 15859}">DMG国际影城(悦秀店)</a>
          <p class="cinema-address">地址：丰台区开阳路8号悦秀城6层</p>
        </div>

        <div class="buy-btn">
          <a href="/cinema/15859?poi=94444126" data-act="buy-btn-click" data-val="{city_id: 1, cinema_id: 15859}" data-bid="b_4tkpau4m">选座购票</a>
        </div>
        
        <div class="price">
            <span class="rmb red">￥</span>
            <span class="price-num red"><span class="stonefont">&#xee55;&#xf0d8;</span></span>
            <span>起</span>
        </div>
      </div>
      <div class="cinema-cell">
        <div class="cinema-info">
          <a href="/cinema/23?poi=3281398" class="cinema-name" data-act="cinema-name-click" data-bid="b_4tkpau4m" data-val="{city_id: 1, cinema_id: 23}">百丽宫影城(国贸店)</a>
          <p class="cinema-address">地址：朝阳区建国门外大街1号国贸商城北区B1层B120</p>
        </div>

        <div class="buy-btn">
          <a href="/cinema/23?poi=3281398" data-act="buy-btn-click" data-val="{city_id: 1, cinema_id: 23}" data-bid="b_4tkpau4m">选座购票</a>
        </div>
        
        <div class="price">
            <span class="rmb red">￥</span>
            <span class="price-num red"><span class="stonefont">&#xf0d8;&#xf0d8;</span></span>
            <span>起</span>
        </div>
      </div>
      <div class="cinema-cell">
        <div class="cinema-info">
          <a href="/cinema/5736?poi=332108" class="cinema-name" data-act="cinema-name-click" data-bid="b_4tkpau4m" data-val="{city_id: 1, cinema_id: 5736}">卢米埃影城(芳草地店)</a>
          <p class="cinema-address">地址：朝阳区东大桥路9号侨福芳草地购物中心LG2-26（尚都SOHO对面）</p>
        </div>

        <div class="buy-btn">
          <a href="/cinema/5736?poi=332108" data-act="buy-btn-click" data-val="{city_id: 1, cinema_id: 5736}" data-bid="b_4tkpau4m">选座购票</a>
        </div>
        
        <div class="price">
            <span class="rmb red">￥</span>
            <span class="price-num red"><span class="stonefont">&#xf32c;&#xf716;</span></span>
            <span>起</span>
        </div>
      </div>

  </div>

  <div class="cinema-pager">
    
  
  <ul class="list-pager">



  
      <li class="active">
    <a class="page_1"
      href="javascript:void(0);" style="cursor: default"
  >1</a>

</li>
  <li >
    <a class="page_2"
      href="?offset=12"
  >2</a>

</li>
  <li >
    <a class="page_3"
      href="?offset=24"
  >3</a>

</li>
  <li >
    <a class="page_4"
      href="?offset=36"
  >4</a>

</li>
  <li >
    <a class="page_5"
      href="?offset=48"
  >5</a>

</li>

    <li class="sep">...</li>
      <li >
    <a class="page_18"
      href="?offset=204"
  >18</a>

</li>

  

<li>  <a class="page_2"
      href="?offset=12"
  >下一页</a>
</li>
</ul>


  </div>

  <script id="comment-form-container" type="text/template">
  <form id="comment-form" data-val="{movieid:}">
    <div class="score-msg-container ">
        <div class="score"><span class="num"></span>分</div>
        <div class="score-message"></div>
        <div class="no-score">
          请点击星星评分
        </div>
    </div>
    <div class="score-star-contaienr">
      <ul class="score-star clearfix" data-score="">
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
    <input type="hidden" name="score" />
    <input class="btn" type="submit" value="提交" data-act="comment-submit-click" />
  </form>
  <div class="close">×</div>
</script>
    </div>
<script type="text/javascript">
  $('.navbar li a:contains(影院)').toggleClass('active');
</script>
@endsection