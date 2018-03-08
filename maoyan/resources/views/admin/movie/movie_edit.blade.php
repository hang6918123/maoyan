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
                        <span><i class="icon-table"></i>影厅列表</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
                            <form action="{{ url('/admin/movie/vseek') }}" method="get">

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
                                        <input type="text" name="cinema_name" aria-controls="DataTables_Table_1">
                                    </label>
                                     {{ csrf_field() }}
                                    <input type="submit" value="搜索影院" class="btn btn-success">
                                
                                </div>


                                </form>
                                <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
                            <thead>
                                <tr role="row">
                                    <th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 80px;">影院ID</th>
                                    <th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 100px;">影院名称</th>
                                    
                                    <th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 60px;">影厅</th>

                                    <th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 100px;">普通厅正在播放电影</th>
                                    <th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 100px;">特殊厅正在播放电影</th>
                                    <th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 50px;">普通厅开始播放时间</th>
                                   
                                    <th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 50px;">特殊厅开始播放时间</th>
                                    <th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 40px;">操作</th>
                                </tr>
                            </thead>
                                

                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                          
                            @foreach($cinema as $k=>$v)
                        	    <tr class="odd" align="center">
                                    <td class=" sorting_1">{{ $input['id'] }}</td>
                                    <td class=" ">{{$input['name']}}</td>
                                    <td class=" "><a herf="#">{{  $v['movies_type'] }}</a></td>
                                    <td class=" "><a herf="#">{{ $v['movies_common'] }}<a></td>
                                    <td class=" ">{{$v['movies_special']}}</td>
                                    <td class=" ">{{$v['movies_common_time']}}</td>
                                    <td class=" ">{{$v['movies_special_time']}}</td>
                                    
                                    
                                    <td class=" ">
                                        <span class="btn-group">
                                            
                                            <a href="/admin/movie/edit/{{$v['id']}}" class="btn btn-small" onclick='return fun()'><i class="icon-finder"></i></a>
                                            
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
        
        if(confirm("你确定要删除吗?")){
            return true;
        }else{
            
            return false;
        }
    }
</script>