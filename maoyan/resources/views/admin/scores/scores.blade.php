@extends('admin.layouts.layout');
@section('css')
<link rel="stylesheet" type="text/css" href="/admin/css/page_page.css">
@endsection
@section('main')
<div class="mws-panel grid_8">
     <div class="mws-panel-header">
          <span>{{$title}}</span>
     </div>
     @if($name != null)
     <div class="mws-panel-body no-padding">
          <form class="mws-form">
               <div class="mws-form-inline">
                    <div class="mws-form-row">
                         <label class="mws-form-label">影片名</label>
                         <div class="mws-form-item">
                              <input type="text" name="name" class="small" value="{{$name['name']}}" class="form-control"  readonly>
                         </div>
                    </div>
               </div>
               <div class="mws-button-row">
               </div>
          </form>
     </div>
     </div>

 @if($data !=null)
 <div class="mws-panel grid_8">
     <div class="mws-panel-header">
          <span>{{$score}}</span>
     </div>
     
   
               @foreach($data as $k => $v)
     <div class="mws-panel-body no-padding">
          <form class="mws-form" method="post" action="/admin/score/dele/{{$v['id']}}">
               {{csrf_field()}}
               <div class="mws-form-inline">
                    <div class="mws-form-row">
                         <label class="mws-form-label">#{{$k+1}}楼用户名</label>
                         <div class="mws-form-item">
                              <input type="text" name="name" class="small" value="{{$v['uname']}}" class="form-control"  readonly>
                         </div>
                    </div>
               </div>
               <div class="mws-form-inline">
                    <div class="mws-form-row">
                         <label class="mws-form-label">影片评分</label>
                         <div class="mws-form-item">
                              <input type="text" name="name" class="small" value="{{$v['score']}}" class="form-control"  readonly>
                         </div>
                    </div>
               </div>
               <div class="mws-form-inline">
                    <div class="mws-form-row">
                         <label class="mws-form-label">评价获赞</label>
                         <div class="mws-form-item">
                              <input type="text" name="name" class="small" value="{{$v['zan']}}" class="form-control"  readonly>
                         </div>
                    </div>
               </div>
               <div class="mws-form-inline">
                    <div class="mws-form-row">
                         <label class="mws-form-label">评价时间</label>
                         <div class="mws-form-item">
                              <input type="text" name="name" class="small" value="{{$v['created_at']}}" class="form-control"  readonly>
                         </div>
                    </div>
               </div>
               <div class="mws-form-inline">
                    <div class="mws-form-row">
                         <label class="mws-form-label">评价内容</label>
                         <div class="mws-form-item">
                               <textarea rows="" name="content" cols="" class="large small" readonly>{{$v['content']}}</textarea>
                         </div>
                    </div>
               </div>
               <div class="mws-button-row">
                    <input type="submit" value="删除评价" class="btn btn-danger">
               </div>
          </form>
     </div>        
               @endforeach
                 <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid"><div id="DataTables_Table_1_length" class="dataTables_length">
     <div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate">
                            <div style="margin-right:1px; ">  
                            <div id="page_page" >
                            {!! $data->render() !!}
                            </div>
                         </div>
                       </div>
 </div>
</div>
</div>
 @endif
     @else
     <div class="mws-panel-body no-padding">
          <form class="mws-form">
               <div class="mws-form-inline">
                    <div class="mws-form-row">
                         <label class="mws-form-label">用户名</label>
                         <div class="mws-form-item">
                              <input type="text" name="name" class="small" value="{{$data[0]['uname'] or ''}}" class="form-control"  readonly>
                         </div>
                    </div>
               </div>
               <div class="mws-button-row">
               </div>
          </form>
     </div>  
     </div>  
     <div class="mws-panel grid_8">
     <div class="mws-panel-header">
          <span>{{$score}}</span>
     </div>
     
   
               @foreach($data as $k => $v)
     <div class="mws-panel-body no-padding">
          <form class="mws-form" method="post" action="/admin/score/dele/{{$v['id']}}">
               {{csrf_field()}}
               <div class="mws-form-inline">
                    <div class="mws-form-row">
                         <label class="mws-form-label">评论过的电影</label>
                         <div class="mws-form-item">
                              <input type="text" name="name" class="small" value="{{$v['vname']}}" class="form-control"  readonly>
                         </div>
                    </div>
               </div>
               <div class="mws-form-inline">
                    <div class="mws-form-row">
                         <label class="mws-form-label">影片评分</label>
                         <div class="mws-form-item">
                              <input type="text" name="name" class="small" value="{{$v['score']}}" class="form-control"  readonly>
                         </div>
                    </div>
               </div>
               <div class="mws-form-inline">
                    <div class="mws-form-row">
                         <label class="mws-form-label">评价获赞</label>
                         <div class="mws-form-item">
                              <input type="text" name="name" class="small" value="{{$v['zan']}}" class="form-control"  readonly>
                         </div>
                    </div>
               </div>
               <div class="mws-form-inline">
                    <div class="mws-form-row">
                         <label class="mws-form-label">评价时间</label>
                         <div class="mws-form-item">
                              <input type="text" name="name" class="small" value="{{$v['created_at']}}" class="form-control"  readonly>
                         </div>
                    </div>
               </div>
               <div class="mws-form-inline">
                    <div class="mws-form-row">
                         <label class="mws-form-label">评价内容</label>
                         <div class="mws-form-item">
                               <textarea rows="" name="content" cols="" class="large small" readonly>{{$v['content']}}</textarea>
                         </div>
                    </div>
               </div>
               <div class="mws-button-row">
                    <input type="submit" value="删除评价" class="btn btn-danger">
               </div>
          </form>
     </div>        
               @endforeach
                 <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid"><div id="DataTables_Table_1_length" class="dataTables_length">
     <div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate">
                            <div style="margin-right:1px; ">  
                            <div id="page_page" >
                            {!! $data->render() !!}
                            </div>
                         </div>
                       </div>
 </div>
</div>
</div>
     @endif
 
@endsection
