@extends('admin.layouts.layout');

@section('title')

@endsection

@section('main')
<div class="mws-panel grid_5" style="left:18%;">
	@if(session()->has('error'))
        <div class="mws-form-message error">
            <font style="vertical-align: inherit;">
                {{session()->get('error')}}
            </font>
        </div>
    @endif
    @if(session()->has('success'))
        <div class="mws-form-message success">
            <font style="vertical-align: inherit;">
                {{session()->get('success')}}
            </font>
        </div>
        @endif
    <div class="mws-panel-header">
        <span>网站配置</span>
    </div>
    <div class="mws-panel-body no-padding">
        <form class="mws-form" action="/admin/webconf" id="art_form" method="post" enctype="multipart/form-data">
        	{{csrf_field()}}
            <div class="mws-form-inline">
                <div class="mws-form-row bordered">
                    <label class="mws-form-label">网站标题：</label>
                    <div class="mws-form-item">
                        <input type="text" class="large" name="title" value="{{$data->title}}">
                    </div>
                </div>
                <div class="mws-form-row bordered">
                    <label class="mws-form-label">网站logo：</label>
                    <div class="mws-form-item">
                        <img src="/home/images/{{$data['logo']}}" width="160px">
                        <input type="file" class="large" name="logo">
                        <input type="hidden" name="old_logo" value="{{$data['logo']}}">
                    </div>
                </div>
                <div class="mws-form-row bordered">
                    <label class="mws-form-label">网站描述：</label>
                    <div class="mws-form-item">
                        <input type="text" class="large" name="describe" value="{{$data['describe']}}">
                    </div>
                </div>
                <div class="mws-form-row bordered">
                    <label class="mws-form-label">网站关键词：</label>
                    <div class="mws-form-item">
                        <input type="text" class="large" name="keyword" value="{{$data['keyword']}}">
                    </div>
                </div>
                <div class="mws-form-row bordered">
                    <label class="mws-form-label">网站版权：</label>
                    <div class="mws-form-item">
                        <input type="text" class="large" name="copyright" value="{{$data['copyright']}}">
                    </div>
                </div>
                <div class="mws-form-row bordered">
                    <label class="mws-form-label">所属公司：</label>
                    <div class="mws-form-item">
                        <input type="text" class="large" name="company" value="{{$data['company']}}">
                    </div>
                </div>
            </div>
            <div class="mws-button-row">
                <input type="submit" value="确认修改" class="btn btn-danger" style="margin:0 auto;">
            </div>
        </form>
    </div>      
</div>
@endsection

@section('buttom')
<script src="/admin/js/webconf.js"></script>
@endsection