@extends('admin/layout')
@section('css')
<link rel="stylesheet" type="text/css" href="/admin/css/page_page.css">
@endsection
@section('main')
<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span><i class="icon-table"></i>影片列表</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <form action="/admin/video/" method="get" >
                        <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid"><div id="DataTables_Table_1_length" class="dataTables_length"><label>单页显示<select size="1" name="Table_length" aria-controls="DataTables_Table_1"><option @if($length==10)
                                selected 
                            @endif value="10">10</option>
                            <option @if($length==20)
                                selected 
                            @endif value="20">20</option><option @if($length==50)
                                selected 
                            @endif value="50">50</option></select>条</label></div><div class="dataTables_filter" id="DataTables_Table_1_filter"><label>搜索: <input type="text" placeholder="{{$search}}" name="search" aria-controls="DataTables_Table_1"><input type="submit" value="设置条数并搜索" class="btn btn-success"></label></div><table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
                        </form>
                            <thead>
                                <tr role="row"><th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 60px;">影片ID</th><th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 100px;">影片名</th><th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 80px;">影片语言</th><th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 80px;">上映时间</th><th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 80px;">影片时长</th><th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 60px;">影片状态</th><th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 200px;">操作</th></tr>
                            </thead>
                                @foreach($data as $k=>$v)
                        <tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd" align="center">
                                    <td class="">{{$v['id']}}</td>
                                    <td class=" ">{{$v['name']}}</td>
                                    <td class=" ">{{$v['type']}}</td>
                                    <td class=" ">{{$v['years']}}</td>
                                    <td class=" ">{{$v['time']}}</td>
                                    <td class=" ">
                                        @if($v['state'] == 0)
                                            停止售票
                                        @elseif($v['state'] == 1)
                                            售票
                                        @elseif($v['state'] == 2)
                                            预售票
                                        @else
                                            状态错误
                                        @endif
                                    </td>
                                    <td class=" ">
                                        <a href="/admin/score/info/video/{{$v['id']}}" class="btn  btn-small" title="查看用户评价">
                                            <i  class="icon-feather"></i></a>
                                        <a href="/admin/video/{{$v['id']}}" class="btn  btn-small">
                                            <i title="查看详情" class="icon-file-openoffice"></i></a> 
                                            <a href="/admin/recycle/{{$v['id']}}" class="btn  btn-small" title="放入回收站" btn-small"><i class="icon-ban-circle"></i></a>
                                            <a title="修改信息" href="/admin/video/{{$v['id']}}/edit"  class="btn btn-small"><i class="icon-pencil"></i></a> 
                                        <span class="btn-group">
                                            <form action="/admin/video/{{$v['id']}}" method="post" id="subform">
                                                {{csrf_field()}}
                                                {{method_field('DELETE')}}
                                                <input type="hidden" name="id" value="{{$v['id']}}">
                                               <button href="javascript:;" title="删除电影" onclick="return confirm('确定删除');document.getElementById('subform').submit();" class="btn btn-small"><i class="icon-trash"></i></button>
                                                
                                            </form>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>

                                @endforeach
                        </table><div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate">
                            <div id="page_page">
                            {!! $data->render() !!}
                            </div>
                        </div>

                    </div>
                    </div>
                </div>
@endsection