@extends('home/layouts.layout')
$section('css')
<link rel="stylesheet" href="/home/css/movie-list.ffb4de4a.css"/>
<link rel="stylesheet" href="/home/css/common.4b838ec3_1.css"/>
<link rel="stylesheet" href="/home/css/movie-list.ffb4de4a.css"/>
  <script src="/home/js/stat.583e6097_1.js"></script>
  <script src="/home/js/jquery-3.3.1.min.js"></script>
@show
@section('content')


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
      <li class="tags-line" id="cat" data-val="{tagTypeName:'cat'}">
        <div class="tags-title">类型 :</div>
        <ul class="tags">
          <li @if($catId == null)
                class="active"
                @endif data-state-val="{ catTagName:'全部'}" >
            <a data-act="tag-click" data-val="{TagName:'全部'}"
                @if($catId != null)
                href="/films?{{ pth($get,0,'catId')}}"
                @endif style="cursor: default"
            >全部</a>
          </li>
            @foreach(vtype() as $k=>$v)
          <li @if($catId == $v)
                class="active"
                @endif >
            <a data-act="tag-click" data-val="{TagName:'{{$v}}'}"
                href="/films?{{ pth($get,($k+1),'catId')}}"
            >{{$v}}</a>
         @endforeach
         </ul>
          </li>
        </ul>
      </li>
      <li class="tags-line tags-line-border" id="source" data-val="{tagTypeName:'source'}">
        <div class="tags-title">区域 :</div>
        <ul class="tags">
          <li @if($scoureId == null)
                class="active"
                @endif data-state-val="{ sourceTagName:'全部'}" >
            <a data-act="tag-click" data-val="{TagName:'全部'}"
                @if($scoureId != null)
                href="/films?{{ pth($get,0,'sourceId')}}"
                @endif
                 style="cursor: default"
            >全部</a>
          </li>
          @foreach(vregion() as $k => $v)
          <li @if($scoureId == $v)
                class="active"
                @endif >
            <a data-act="tag-click" data-val="{TagName:'{{$v}}'}"
                href="/films?{{ pth($get,($k+1),'sourceId')}}"
                @if(vregion()[2] == $v)
                class="active"
                @endif
            >{{$v}}</a>
            @endforeach
          </li>
        </ul>
      </li>
      <li class="tags-line tags-line-border" id="year"  data-val="{tagTypeName:'year'}">
        <div class="tags-title">年代 :</div>
        <ul class="tags">
          <li @if($yearId == null)
                class="active"
                @endif data-state-val="{ yearTagName:'全部'}" >
            <a data-act="tag-click" data-val="{TagName:'全部'}"
                @if($yearId != null)
                href="/films?{{ pth($get,0,'yearId')}}"
                @endif  style="cursor: default"
            >全部</a>
          </li>
          @foreach(year() as $k => $v)
          <li @if($yearId == $v)
                class="active"
                @endif>
            <a data-act="tag-click"
                href="/films?{{ pth($get,($k+1),'yearId')}}"
            >{{$v}}</a>
            @endforeach
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
            <span class="sort-control-group" data-act='sort-click' data-val="{tagId: 1 }" @if($sortId != null)
                data-href="/films?{{ pth($get,0,'sortId')}}" onclick="location.href=this.getAttribute('data-href')"
                @endif >
                                
              <span class="sort-control sort-radio 
               @if($sortId == null)
              sort-radio-checked
               @endif
              " ></span>
              <span class="sort-control-label">按热门排序</span>
            </span>
          </li>
          <li>
            <span class="sort-control-group  
           "  data-act='sort-click' data-val="{tagId: 2 }"
                  data-href="/films?{{ pth($get,1,'sortId')}}"
                  onclick="location.href=this.getAttribute('data-href')"
            >
              <span class="sort-control sort-radio @if($sortId == 1)
              sort-radio-checked
               @endif"></span>
              <span class="sort-control-label">按时间排序</span>
            </span>
          </li>
          <li>
            <span class="sort-control-group 
             
            " data-act='sort-click' data-val="{tagId: 3 }"
                  data-href="/films?{{ pth($get,2,'sortId')}}"
                  onclick="location.href=this.getAttribute('data-href')"
            >
              <span class="sort-control sort-radio @if($sortId == 2)
              sort-radio-checked
               @endif"></span>
              <span class="sort-control-label">按评价排序</span>
            </span>
          </li>
        </ul>
      </div>
      <div class="play-sorter">
        <span class="sort-control-group" data-act='isplay-click' data-val="{isplay:1}"
          data-href="/films?isPlay=1"
          onclick="location.href=this.getAttribute('data-href')">
          <span class="sort-control sort-checkbox"></span>
          <span class="sort-control-label">可播放</span>
        </span>
      </div>
    </div>
    <div class="movies-list">
    
    <dl class="movie-list">
  @foreach($data as $k => $v)
  <dd>
    <div class="movie-item">
      <a href="/films/{{$v['id']}}" target="_blank" data-act="movie-click" data-val="{movieid:1182552}">
      <div class="movie-poster">
        <img class="poster-default" src="/home/picture/loading_2.e3d934bf_1.png" />
        <img data-src="/upload/videos/{{$v['photo']}}" style="width:100%;height:100%;" />
      </div>
      </a>
        <div class="channel-action channel-action-sale">
  <a>{{state($v['state'])}}</a>
</div>

      <div class="movie-ver">
        @if(strrchr(vlanguage()[$k],'3'))
        <i class="imax3d"></i>
        @endif
      </div>
    </div>
    <div class="channel-detail movie-item-title" title="{{$v['name']}}">
      <a href="/films/1182552" target="_blank" data-act="movies-click" data-val="{movieId:1182552}">{{$v['name']}}</a>
    </div>
    {!!score($v['score'])!!}
  
@endforeach
  
</dl>


    </div>
    <div class="movies-pager">
      
  
  <ul class="list-pager">



  
     

  
{!! $data->render() !!}

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
@section('js')
    <script src="/home/js/common.1faad3f9_1.js"></script>
    <script src="/home/js/movie-list.195190ba.js"></script>
   <script type="text/javascript">
  $('.navbar li a:contains(电影)').toggleClass('active');
  // var path = location.search;
  // var p = path.length;
  // var cat = path.lastIndexOf('catId=');
  // var c = 'catId=';
  // var scoureId = path.lastIndexOf('scoureId=');
  // var s = 'scoureId=';
  // var yearId = path.lastIndexOf('yearId=');
  // var y = 'yearId=';
  // console.log(cat);
  //  var num = $('#cat a').size();
  //  if(cat > 0){
  //     for(var a = 1; a<num;a++){
  //     var href = '';
  //     href = $('#cat a:eq('+a+')').attr('href');
  //     var ne = path.replace('/(catId=)[0-99]*/',href);
  //     $('#cat a:eq('+a+')').attr('href',ne);
  //   }
  //  }else if(cat == 0){
  //      for(var b = 1; b<num;b++){
  //     var href = '';
  //     href = $('#cat a:eq('+b+')').attr('href');
  //     $('#cat a:eq('+b+')').attr('href','?'+href);
  //     herf = '';
  //   }
  //  }
</script>
<script type="text/javascript">
$('.pagination .active').removeClass('active').css({'width':'32.21930px','height':'30px','background':'#ef4238'});;
$('.pagination .disabled').css({'width':'32.21930px','height':'30px','font-size':'1px'});

</script>
@endsection
@section('js')
<script type="text/javascript" src="/home/js/common.dc33ab40.js"></script>

@endsection