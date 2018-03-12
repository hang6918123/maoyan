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
        <span>用户岗位</span>
    </div>
    <div class="mws-panel-body no-padding">
        <form class="mws-form" action="/admin/user/store" method="post">
        	{{csrf_field()}}
            <div class="mws-form-inline">
                <div class="mws-form-row bordered">
                    <label class="mws-form-label"><font style="vertical-align: inherit;">设置岗位：</font></label>
                    <div class="mws-form-item clearfix">
                        <ul class="mws-form-list">
                            @if($powers)
                                @foreach($powers as $power)
                                <li>
                                    <input type="checkbox" class="powers" name="power[]" {{$userPower ? (in_array($power['id'],$userPower) ? 'checked' : '') : ''}} value="{{$power['id']}}" data="{{$id}}">
                                    <label>
                                        <font style="vertical-align: inherit;">{{$power['title']}}</font>
                                    </label>
                                </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mws-button-row">
                <span>"√" 勾选的岗位为此用户所属岗位</span>
            </div>
        </form>
    </div>      
</div>
@endsection

@section('buttom')
<script src="/admin/js/power/userPower.js"></script>
@endsection