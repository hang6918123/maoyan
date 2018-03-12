@extends('admin/layouts/layout')
<link rel="stylesheet" type="text/css" href="/admin/css/page_page.css">
@section('main')
@if (count($errors) > 0)
                        <div class="mws-form-message error">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    @if( session('mes'))
                    <div class="mws-form-message success">
                                  
                                    <ul>
                                       <li>{{ session('mes') }}</li>
                                        
                                    </ul>
                   </div>
                   @endif
<div class="mws-panel grid_8">
                    <div class="mws-panel-header">
                        <span><i class="icon-table"></i>影院列表</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
                            <form action="{{ url('admin/cineman') }}" method="get">

                            <div id="DataTables_Tabsle_1_length" class="dataTables_length">
                                <label>单页显示
                                    <select size="1" name="cineman_count" aria-controls="DataTables_Table_1">
                                        <option value="5" selected="selected">5</option>
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="50">50</option>
                                    </select>条
                                </label>
                                </div>
                                <div class="dataTables_filter" id="DataTables_Table_1_filter">
                                    <label>搜索影院: 
                                        <input type="text" name="cineman_seek" aria-controls="DataTables_Table_1">
                                    </label>
                                     {{ csrf_field() }}
                                    <input type="submit" value="搜索影院" class="btn btn-success">
                                
                                </div>
                                </form>
                                <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
                            <thead>
                                <tr role="row">
                                    <th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 20px;">影院ID</th>
                                    <th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 100px;">影院名称</th>
                                    <th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 20px;">普通厅</th>
                                    <th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 40px;">特殊厅</th>

                                    <th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 200px;">影院地址</th>
                                    <th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 100px;">影院电话</th>
                                   
                                    <th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 60px;">影院状态</th>
                                    <th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 40px;">操作</th>
                                </tr>
                            </thead>
                                

                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                           
                            @foreach($cinema as $k=>$v)
                        	    <tr class="odd" align="center">
                                    <td class=" sorting_1">{{ $v['id'] }}</td>
                                    <td class=" ">{{$v['cinema_name']}}</td>
                                    <td class=" "><a herf="#">{{  explode(",",$v['cinema_movie'])[0] }}</a></td>
                                    <td class=" "><a herf="#">{{
                                    substr($v['cinema_movie'],strpos($v['cinema_movie'],',')+1) }}<a></td>
                                    <td class=" ">{{$v['address']}}</td>
                                    <td class=" ">{{$v['phone']}}</td>
                                    
                                    <td class=" ">{{$v['status']?'正常营业':'维护中'}}</td>
                                    <td class=" ">
                                        <span class="btn-group">
                                            
                                            <a href="/admin/cineman/up/{{$v['id']}}" class="btn btn-small"><i class="icon-reply-to-all"></i></a>
                                            <a href="/admin/cineman/de/{{$v['id']}}" class="btn btn-small" onclick='return fun()'><i class="icon-finder"></i></a>
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <!-- <div class="dataTables_info" id="DataTables_Table_1_info">Showing 1 to 10 of 57 entries
                        </div>

                        
                        <div id="page_page">
                            {!! $cinema->render() !!}
                        </div> -->
                        <div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate">
                            <div id="page_page">
                            {!! $cinema->render() !!}
                            </div>
                        </div>

                    </div>
                    </div>
                   </div>
                  </div>
               </div>
@endsection
<script>
   function fun(){
        
        if(confirm("你确定要永久删除吗?")){
            return true;
        }else{
            
            return false;
        }
    }
</script>