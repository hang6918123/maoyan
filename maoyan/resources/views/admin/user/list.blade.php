@extends('admin.layouts.layout');

@section('main')
    <div class="mws-panel grid_8">
		<div class="mws-form-message error" style="display: none;"></div>
        @if(session()->has('success'))
        <div class="mws-form-message success">
            <font style="vertical-align: inherit;">
                {{session()->get('success')}}
            </font>
        </div>
        @endif
        <div class="mws-panel-header">
            <span><i class="icon-table"></i> 用户列表</span>
        </div>
        <div class="mws-panel-body no-padding">
            <table class="mws-datatable-fn mws-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>昵称</th>
                        <th>手机号</th>
                        <th>状态</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    @if($users)
                	@foreach($users as $user)
                    <tr style="text-align:center;" data="{{$user->id}}">
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->phone}}</td>
                        <td>
                        	<a href="javascript:;" class="btn state" data="{{$user->id}}" title="状态">
                        		@if($user->state)
                        		<i class="icon-minus-sign states" data="0"></i>
                        		@else
                        		<i class="icon-ok-sign states" data="1"></i>
                        		@endif
                        	</a>
                        </td>
            			<td class=" ">
                            <span class="btn-group">
                                @if($user->auth)
                                <a href="/admin/auth/edit/{{$user->id}}" class="btn" title="权限"><i class="icon-user"></i></a>
                                @endif
                                <a href="/admin/user/show/{{$user->id}}" class="btn" title="修改"><i class="icon-pencil"></i></a>
                                <a href="#" class="btn user_del" data="{{$user->id}}" title="删除"><i class="icon-trash"></i></a>
                                <a href="#" class="btn" data="{{$user->id}}" title="评价"><i class="icon-comment"></i></a>
                            </span>
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('buttom')
    <script src="/admin/jui/jquery-ui.custom.min.js"></script>
    <script src="/admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/admin/js/demo/demo.table.js"></script>
    <script src="/admin/js/user/userList.js"></script>
@endsection