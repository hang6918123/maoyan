@extends('admin.layouts.layout');

@section('title')

@endsection

@section('main')
<div class="mws-panel grid_4" style="left:20%;">
	@if(session()->has('error'))
        <div class="mws-form-message success">
            <font style="vertical-align: inherit;">
                {{session()->get('error')}}
            </font>
        </div>
    @endif
    <div class="mws-panel-header">
        <span>用户添加</span>
    </div>
    <div class="mws-panel-body no-padding">
        <form class="mws-form" action="/admin/user/doedit/{{$user->id}}" id="art_form" method="post" enctype="multipart/form-data">
        	{{csrf_field()}}
            <div class="mws-form-inline">
                <div class="mws-form-row bordered">
                    <label class="mws-form-label">用户昵称：</label>
                    <div class="mws-form-item">
                        <input type="text" class="large" name="name" placeholder="必填，请输入2-15位中英文、数字组成的昵称" value="{{$user->name}}">
                    </div>
                </div>
                <div class="mws-form-row bordered">
                    <label class="mws-form-label">手 机 号：</label>
                    <div class="mws-form-item">
                        <input type="text" class="large" name="phone" placeholder="必填，请输入11位手机号" value="{{$user->phone}}">
                    </div>
                </div>
                <div class="mws-form-row bordered">
                    <label class="mws-form-label">用户密码：</label>
                    <div class="mws-form-item">
                        <input type="password" class="large" name="password">
                    </div>
                </div>
                <div class="mws-form-row bordered">
                	<label class="mws-form-label">用户类型：</label>
                    <div class="mws-form-item">
                        <select class="large" name="auth">
                            <option value="0" {{$user->auth ? '' : 'checked:checked'}}>普通用户</option>
                            <option value="1" {{$user->auth ? 'checked:checked' : ''}}>管理员</option>
                        </select>
                    </div>
                </div>
                <div class="mws-form-row bordered">
                    <label class="mws-form-label">用户状态：</label>
                    <div class="mws-form-item">
                        <select class="large" name="state">
                            <option value="0" {{$user->state ? '' : 'checked:checked'}}>正常</option>
                            <option value="1" {{$user->state ? 'checked:checked' : ''}}>禁用</option>
                        </select>
                    </div>
                </div>
                <div class="mws-form-row bordered">
                    <label class="mws-form-label">头像预览：</label>
                    <div class="mws-form-item">
                        <img src="/uploads/user/{{$user->photo}}" alt="用户头像" width="160px" id="user_photo">
                        <input type="hidden" name="old_photo" value="{{$user->photo}}">
                    </div>
                </div>
                <div class="mws-form-row bordered">
                    <label class="mws-form-label">用户头像：</label>
                    <div class="mws-form-item">
                        <input type="file" class="large" name="photo" data="{{$user->id}}">
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
<script src="/admin/js/user/userEdit.js"></script>
@endsection