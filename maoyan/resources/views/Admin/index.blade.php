@extends('admin.layouts.layout');

@section('title')

@endsection

@section('main')
<div class="mws-panel grid_3" style="left:30%;">
	<div class="mws-panel-header">
    	<span><i class="icon-book"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 网站摘要</font></font></span>
    </div>
    <div class="mws-panel-body no-padding">
        <ul class="mws-summary clearfix">
            <li>
                <span class="key"><i class="icon-users"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员数量</font></font></span>
                <font style="vertical-align: inherit;"><span class="val"><span class="text-nowrap"><font style="vertical-align: inherit;">{{$data['user']}}人</font></span></span></font><span class="val">
                    <span class="text-nowrap"><font style="vertical-align: inherit;"></font></span>
                </span>
            </li>
            <li>
                <span class="key"><i class="icon-official"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">管理者</font></font></span>
                <font style="vertical-align: inherit;"><span class="val"><span class="text-nowrap"><font style="vertical-align: inherit;">{{$data['admin']}}人</font></span></span></font><span class="val">
                    <span class="text-nowrap"><font style="vertical-align: inherit;"></font></span>
                </span>
            </li>
            <li>
                <span class="key"><i class="icon-shopping-cart"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">本周订单</font></font></span>
                <font style="vertical-align: inherit;"><span class="val"><span class="text-nowrap"><font style="vertical-align: inherit;">{{$data['order']}}单</font></span></span></font><span class="val">
                    <span class="text-nowrap"><font style="vertical-align: inherit;"></font></span>
                </span>
            </li>
            <li>
                <span class="key"><i class="icon-home-2"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">影院数量</font></font></span>
                <font style="vertical-align: inherit;"><span class="val"><span class="text-nowrap"><font style="vertical-align: inherit;">{{$data['cinemas']}}家</font></span></span></font><span class="val">
                    <span class="text-nowrap"><font style="vertical-align: inherit;"></font></span>
                </span>
            </li>
            <li>
                <span class="key"><i class="icon-movie"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">影片数量</font></font></span>
                <font style="vertical-align: inherit;"><span class="val"><span class="text-nowrap"><font style="vertical-align: inherit;">{{$data['videos']}}部</font></span></span></font><span class="val">
                    <span class="text-nowrap"><font style="vertical-align: inherit;"></font></span>
                </span>
            </li>
            <li>
                <span class="key"><i class="icon-windows"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">操作系统</font></font></span>
                <font style="vertical-align: inherit;"><span class="val"><span class="text-nowrap"><font style="vertical-align: inherit;">{{PHP_OS}}</font></span></span></font><span class="val">
                    <span class="text-nowrap"><font style="vertical-align: inherit;"></font></span>
                </span>
            </li>
        </ul>
    </div>
</div>
@endsection

@section('buttom')
@endsection