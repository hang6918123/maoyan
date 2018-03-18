@extends('home.layouts.layout')


@section('title')
用户中心
@endsection

@section('css')
	<link rel="stylesheet" href="/home/css/common.4b838ec3.css"/>
	<link rel="stylesheet" href="/home/css/profile-profile.7b3221a5.css"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
<div class="container" id="app" class="page-profile/profile" >
	<div class="content">
		<div class="main">
			<div class="info-content clearfix">
				<div class="user-profile-nav">
					<h1>个人中心</h1>
					<a href="/user/myorder" class="orders active">我的订单</a>
					<a href="/user" class="profile">基本信息</a>
				</div>
			  
				<div class="orders-container">
                    <div class="profile-title">我的订单</div>
                        @foreach($data as $v)
                        <div class="order-box" data="{{$v['id']}}">
                          <div class="order-header">
                            <span class="order-date">{{$v['order_time']}}</span>
                            <span class="order-id">猫眼订单号:{{$v['number']}}</span>
                              <span class="del-order" data-orderid="1868792175" data="{{$v['id']}}"></span>
                          </div>

                          <div class="order-body">
                            <div class="poster">
                              <img src="/upload/videos/{{$v->video['photo']}}" style="width: 66px;height: 91px;">
                            </div>

                            <div class="order-content">
                              <div class="movie-name">《{{$v['vname']}}》</div>
                              <div class="cinema-name">{{$v['cinema']}}</div>
                              <div class="hall-ticket">
                                <span>
                                    {{$v['hall']}}
                                    @if(strlen($v['hall']) < 4)
                                    号厅
                                    @endif
                                </span>
                                  <span>
                                    @foreach(explode('#',$v['seat']) as $s)
                                    {{' '.explode('_',$s)[0].'排'.explode('_',$s)[1].'座 '}}
                                    @endforeach
                              </div>
                              <div class="show-time">{{$v['order_time']}}</div>
                            </div>

                            <div class="order-price">￥{{$v['price']}}</div>

                            <div class="order-status">
                            </div>

                            <div class="actions">
                              <div>
                                @if($v['state'])
                                待付款
                                @else
                                付款成功
                                @endif
                              </div>
                            </div>
                          </div>
                        </div>
                        @endforeach
                      <div class="orders-pager">
                        {!!$data->render()!!}
                      </div>
                    </div>

			</div>
		</div>

	</div>

</div>
@endsection

@section('js')
<script>
    $('.del-order').click(function(){
        var id = $(this).attr('data');
        if(confirm('确认要删除吗？')){
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/user/delorder',
                type: 'post',
                data: {'id':id},
                success: function(data){
                    if(data == 1){
                        $('.order-box[data='+id+']').remove();
                        alert('删除成功');
                    }
                },
                error: function(XMLHttpRequest, textStatus, errorThrown){
                    alert('删除失败');
                }

            });
        }
    });
</script>
@endsection