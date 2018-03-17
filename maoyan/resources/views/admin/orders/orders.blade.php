@extends('admin/layouts/layout')
@section('css')
<link rel="stylesheet" type="text/css" href="/admin/css/page_page.css">
@endsection
@section('main')
<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span><i class="icon-table"></i>影片列表</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <form action="/admin/orders" method="get" >
                        <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid"><div id="DataTables_Table_1_length" class="dataTables_length"><label>单页显示<select size="1" name="Table_length" aria-controls="DataTables_Table_1"><option @if($length==10)
                                selected 
                            @endif value="10">10</option>
                            <option @if($length==20)
                                selected 
                            @endif value="20">20</option><option @if($length==50)
                                selected 
                            @endif value="50">50</option></select>条</label></div>

                        <div class="dataTables_filter" id="DataTables_Table_1_filter"><label><label>搜索条件<select size="1" name="where" aria-controls="DataTables_Table_1">
                            <option @if($where == 'name') cheked @endif value="name">用户名</option>
                            <option @if($where == 'phone') cheked @endif value="phone">手机号</option></select></label>

                            搜索内容: <input type="text" placeholder="{{$search}}" name="search" aria-controls="DataTables_Table_1"><input type="submit" value="设置条数并搜索" class="btn btn-success"></label></div><table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
                        </form>
                            <thead>
                                <tr role="row"><th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 60px;">订单ID</th><th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 100px;">用户名</th><th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 80px;">用户手机号</th><th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 80px;">订单时间时间</th><th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 80px;">订单号</th><th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 60px;">订单状态</th><th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 200px;">操作</th></tr>
                            </thead>
                                @foreach($data as $k=>$v)
                        <tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd" align="center">
                                    <td class="">{{$v['id']}}</td>
                                    <td class=" ">{{$v['name']}}</td>
                                    <td class=" ">{{$v['phone']}}</td>
                                    <td class=" ">{{$v['time']}}</td>
                                    <td class=" ">{{$v['number']}}</td>
                                    <td class=" ">@if($v['state'] == 0) 交易成功 @elseif($v['state'] == 1) 交易关闭 @elseif($v['state'] == 2) 待付款 @endif </td>
                                    <td class=" ">
                                        <a href="/admin/orders/info/{{$v['uid']}}" class="btn  btn-small">
                                            <i title="查看详情" class="icon-file-openoffice"></i></a> 
                                            @if($v['state'] == 2) 
                                               <form action="/admin/orders/off/{{$v['id']}}" method="post" id="subform" style="display:inline">
                                                {{csrf_field()}}
                                               <button href="javascript:;"  title="关闭订单" onclick="return confirm('确定关闭订单');document.getElementById('subform').submit();" class="btn btn-small"><i class="icon-remove-sign"></i></button>
                                                
                                            </form>
                                            @endif
                                    </td>
                                </tr>
                            </tbody>

                                @endforeach
                        </table><div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate">
                            <div id="page_page">
                            <!-- {!! $data->render() !!} -->
                            </div>
                        </div>

                    </div>
                    </div>
                </div>
@endsection