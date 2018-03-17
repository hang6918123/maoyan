@extends('admin.layouts.layout');

@section('title')

@endsection

@section('main')
<div class="mws-panel grid_4" id="auth_show" style="left:20%;margin-top:60px;">
    @if(session()->has('error'))
        <div class="mws-form-message success">
            <font style="vertical-align: inherit;">
                {{session()->get('error')}}
            </font>
        </div>
    @endif
    <div class="mws-panel-header">
        <span>岗位权限</span>
    </div>
    <div class="mws-panel-body no-padding">
        <form class="mws-form">
            <div class="mws-form-inline">
                
                <div class="mws-form-row bordered">
                    <button type="button" class="btn btn-danger" id="station_del" style="float:right;margin-right:20px;">删除</button>
                    <button type="button" class="btn btn-primary" id="station_add" style="float:right;margin-right:40px;">添加</button>
                    <div class="mws-form-item" style="margin-left:0px;width:300px;">
                        <select class="large" name="station">
                            <option value="">岗位</option>
                            @foreach($datas as $data)
                            <option value="{{$data['id']}}">{{$data['title']}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mws-form-row bordered">
                    <button type="button" class="btn btn-danger"  id="power_del" style="float:right;margin-right:20px;">删除</button>
                    <button type="button" class="btn btn-primary" id="power_add" style="float:right;margin-right:40px;">添加</button>
                    <div class="mws-form-item" style="margin-left:0px;width:300px;">
                        <select class="large" name="power">
                            <option value="">权限</option>
                        </select>
                        
                    </div>
                </div>
            </div>
        </form>
    </div>      
</div>
<!-- 添加具体权限表单 -->
<div class="mws-panel grid_4" id="power_show" style="left:20%;margin-top:60px;display: none;">
    <div class="mws-panel-header">
        <span>岗位添加</span>
    </div>
    <div class="mws-panel-body no-padding">
        <form class="mws-form" action="javascript:;">
            <div class="mws-form-inline">
                <div class="mws-form-row bordered">
                    <label class="mws-form-label">权限名称：</label>
                    <div class="mws-form-item">
                        <input type="text" class="large" id="power_title" name="title">
                    </div>
                </div>
                <div class="mws-form-row bordered">
                    <label class="mws-form-label">权限路由：</label>
                    <div class="mws-form-item">
                        <input type="text" class="large" name="route">
                    </div>
                </div>
            </div>
            <div class="mws-button-row">
                <input type="button" value="确认" id="power" class="btn btn-danger">
                <input type="button" value="取消" class="btn " id="power_out">
            </div>
        </form>
    </div>      
</div>
<!-- 添加岗位表单 -->
<div class="mws-panel grid_4" id="station_show" style="left:20%;margin-top:60px;display: none;">
    <div class="mws-panel-header">
        <span>岗位添加</span>
    </div>
    <div class="mws-panel-body no-padding">
        <form class="mws-form" action="javascript:;">
            <div class="mws-form-inline">
                <div class="mws-form-row bordered">
                    <label class="mws-form-label">岗位名称：</label>
                    <div class="mws-form-item">
                        <input type="text" class="large" id="station_title" name="title">
                        <input type="hidden" name="pid" value="">
                    </div>
                </div>
            </div>
            <div class="mws-button-row">
                <input type="button" value="确认" id="station" class="btn btn-danger">
                <input type="button" value="取消" class="btn " id="station_out">
            </div>
        </form>
    </div>      
</div>
@endsection

@section('buttom')
<script src="/admin/js/power/index.js"></script>
@endsection