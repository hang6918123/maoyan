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
        <form class="mws-form" action="/admin/user/store" method="post">
        	{{csrf_field()}}
            <div class="mws-form-inline">
                <div class="mws-form-row bordered">
                    <label class="mws-form-label">用户昵称：</label>
                    <div class="mws-form-item">
                        <input type="text" class="large" name="name" placeholder="必填，请输入2-15位中英文、数字组成的昵称">
                    </div>
                </div>
                <div class="mws-form-row bordered">
                    <label class="mws-form-label">手 机 号：</label>
                    <div class="mws-form-item">
                        <input type="text" class="large" name="phone" placeholder="必填，请输入11位手机号">
                    </div>
                </div>
                <div class="mws-form-row bordered">
                    <label class="mws-form-label">用户密码：</label>
                    <div class="mws-form-item">
                        <input type="password" class="large" name="password" placeholder="必填，请输入6-16位字母数字下划线组成的密码">
                    </div>
                </div>
                <div class="mws-form-row bordered">
                	<label class="mws-form-label">用户类型：</label>
                    <div class="mws-form-item">
                        <select class="large" name="auth">
                            <option value="0">普通用户</option>
                            <option value="1">管理员</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="mws-button-row">
                <input type="submit" value="确认" class="btn btn-danger">
                <input type="reset" value="重置" class="btn ">
            </div>
        </form>
    </div>      
</div>
@endsection

@section('buttom')
<script src="/admin/js/user/userAdd.js"></script>
@endsection