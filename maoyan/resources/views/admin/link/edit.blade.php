@extends('admin.layouts.layout');

@section('title')

@endsection

@section('main')
<div class="mws-panel grid_8">
    @if(session()->has('error'))
        <div class="mws-form-message success">
            <font style="vertical-align: inherit;">
                {{session()->get('error')}}
            </font>
        </div>
    @endif
    <div class="mws-panel-header">
        <span><i class="icon-pencil"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 链接修改</font></font></span>
    </div>
    <div class="mws-panel-body no-padding">
        <form class="mws-form" action="/admin/link/{{$data['id']}}" method="post" id="news_form" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="PUT">
            <div class="mws-form-inline">
                <div class="mws-form-row">
                    <label class="mws-form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">名称</font></font></label>
                    <div class="mws-form-item">
                        <input type="hidden" name="news_id" value="{{$data['id']}}">
                        <input type="text" class="large" name="name" value="{{$data['name']}}">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">地址</font></font></label>
                    <div class="mws-form-item">
                        <input type="text" class="large" name="url" value="{{$data['url']}}">
                    </div>
                </div>
                <div class="mws-button-row">
                    <input type="submit" value="确认修改" class="btn btn-danger">
                </div>
            </div>
        </form>
    </div>      
</div>
@endsection

@section('buttom')
<script src="/admin/js/link/linkEdit.js"></script>
@endsection