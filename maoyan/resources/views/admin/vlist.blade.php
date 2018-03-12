@extends('admin/layouts/layout')

@section('main')
<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span><i class="icon-table"></i>影片列表</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid"><div id="DataTables_Table_1_length" class="dataTables_length"><label>单页显示<select size="1" name="DataTables_Table_1_length" aria-controls="DataTables_Table_1"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select>条</label></div><div class="dataTables_filter" id="DataTables_Table_1_filter"><label>搜索: <input type="text" name="search" aria-controls="DataTables_Table_1"></label></div><table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
                            <thead>
                                <tr role="row">
                                    <th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 60px;">影片ID</th>
                                    <th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 100px;">影片名</th>
                                    <th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 80px;">上映时间</th>
                                    <th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 80px;">语言版本</th>
                                    <th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 80px;">影片时长</th>
                                    <th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 60px;">影片状态</th>
                                    <th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 200px;">操作</th>
                                </tr>
                            </thead>
                            
                        <tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd" align="center">
                                    <td class=" sorting_1">Gecko</td>
                                    <td class=" ">Firefox 1.0</td>
                                    <td class=" ">Win 98+ / OSX.2+</td>
                                    <td class=" ">1.7</td>
                                    <td class=" ">A</td>
                                    <td class=" ">A</td>
                                    <td class=" ">
                                        <span class="btn-group">
                                            <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                                            <a href="/admin/video/info" class="btn btn-small"><i class="icon-pencil"></i></a>
                                            <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table><div class="dataTables_info" id="DataTables_Table_1_info">Showing 1 to 10 of 57 entries</div><div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate"><a tabindex="0" class="first paginate_button paginate_button_disabled" id="DataTables_Table_1_first">First</a><a tabindex="0" class="previous paginate_button paginate_button_disabled" id="DataTables_Table_1_previous">Previous</a><span><a tabindex="0" class="paginate_active">1</a><a tabindex="0" class="paginate_button">2</a><a tabindex="0" class="paginate_button">3</a><a tabindex="0" class="paginate_button">4</a><a tabindex="0" class="paginate_button">5</a></span><a tabindex="0" class="next paginate_button" id="DataTables_Table_1_next">Next</a><a tabindex="0" class="last paginate_button" id="DataTables_Table_1_last">Last</a></div></div>
                    </div>
                </div>
@endsection