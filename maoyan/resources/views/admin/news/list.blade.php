@extends('admin.layouts.layout');
资讯列表
@section('title')

@section('css')
	<link rel="stylesheet" href="/bootstrap-3.3.7-dist/css/bootstrap.css">
	<style>
		.pagination{
			margin:aotu;
		}
	</style>
@endsection

@endsection

@section('main')
<div class="mws-form-message error" style="display: none;"></div>
@if(session()->has('success'))
	<div class="mws-form-message success">
	    <font style="vertical-align: inherit;">
	        {{session()->get('success')}}
	    </font>
	</div>
@endif
<form action="/admin/news" method="get" class="form-inline" style="width:300px;float:right;margin-top:20px;text-align: right;">
	<input type="text" class="form-control" name="search" value="{{$search}}">
	<input type="submit" class="btn btn-primary" value="搜索">
</form>

<h1 style="width:300px">资讯列表</h1>
<table style="text-align: center;" class="table table-striped table-bordered table-hover">
	<tr>
		<td><h3>ID</h3></td>
		<td><h3>标题</h3></td>
		<td><h3>海报</h3></td>
		<td><h3>阅读量</h3></td>
		<td><h3>发布时间</h3></td>
		<td><h3>操作</h3></td>
	</tr>
	@foreach($news as $v)
	<tr data="{{$v['id']}}">
		<td>{{$v['id']}}</td>
		<td width=300 style="text-overflow:ellipsis;">{{$v['title']}}</td>
		<td><img src="/uploads/news/{{$v['poster']}}" width="100px"></td>
		<td>{{$v['reading']}}</td>
		<td>{{date('m-d',$v['pubdate'])}}</td>
		<td>
			<a href="/admin/news/{{$v['id']}}/edit"><i class="glyphicon glyphicon-cog"></i></a>&#160;&#160;
			<a href="javascript:;" class="news_del" data="{{$v['id']}}"><i class="glyphicon glyphicon-trash"></i></a>
		</td>
	</tr>
	@endforeach
</table>
{!!$news->render()!!}
@endsection

@section('buttom')
<script>
	//删除资讯
	$('.news_del').click(function(){
	    if(confirm('是否确认删除')){
	        var id = $(this).attr('data')
	        $.ajax({
	            headers: {
	                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	            }, 
	            url: "/admin/news/"+id,
	            type: "post",
	            data: {"_method":"delete"},
	            dataType: "json",
	            success: function(data){
	                $('tr[data='+data.id+']').remove();
	                alert(data.str);
	            },
	            error: function(XMLHttpRequest, textStatus, errorThrown){
	                $('.error').css('display','block');
	                $('.error').html('<font style="vertical-align: inherit;">删除失败</font>');
	            }
	        });
	    }
	});
</script>
@endsection