@extends('admin.layout')
@section('css')
<script language="javascript" src="/admin/js/YMDClass.js"></script>
<meta name="csrf-token" content="{{csrf_token()}}">
@endsection
@section('main')
<div class="mws-panel grid_8">
                    <div class="mws-panel-header">
                         <span>{{$title}}</span>
                    </div>

                    <div class="mws-panel-body no-padding">
                         <form class="mws-form" id="art_form" action="/admin/video/{{$data['id']}}" method="POST" enctype="multipart/form-data">
                            
                              
                              <div class="mws-form-inline">
                                   <div class="mws-form-row">
                                        <label class="mws-form-label">影片名</label>
                                        <div class="mws-form-item">
                                             <input type="text" name="name" class="small" value="{{$data['name']}}" class="form-control"  readonly>
                                        </div>
                                   </div>
                                   <div class="mws-form-row">
                                        <label class="mws-form-label">影片类型</label>
                                        <div class="mws-form-item clearfix">
                                              <ul class="mws-form-list inline">
                                                  @for($a=0;$a<count(vtype());$a++)
                                                    
                                                  @foreach($type as $k=>$v) @if($v == vtype()[$a]) <li><input type="checkbox" name="type[]" value="{{vtype()[$a]}}" checked  ><label>{{vtype()[$a]}}</label></li> @endif @endforeach  
                                                  @endfor
                                             </ul>
                                        </div>
                                   </div>
                                   <div class="mws-form-row">
                                        <label class="mws-form-label">上映地区</label>
                                        <div class="mws-form-item">
                                             <select class="small" name="region">
                                                  @for($a=0;$a<count(vregion());$a++)
                                                   @if( $data['region'] == vregion()[$a]) <option value="{{vregion()[$a]}}" selected )>{{vregion()[$a]}}</option>
                                                 @endif @endfor
                                             </select>
                                        </div>
                                   </div>
                                    <div class="mws-form-row">
                                        <label class="mws-form-label">电影简介</label>
                                        <div class="mws-form-item">
                                             <textarea rows="" readonly value="{{$data['content']}}" cols="" class="small form-control">{{$data['content']}}</textarea>
                                        </div>
                                   </div>
                                   
                                   <div class="mws-form-row">
                                        <label class="mws-form-label">上映时间</label>
                                        <div class="mws-form-item">
                                             <select name="year1" > 
                                                       <option value="{{$year[0]}}" class="form-control" readonly>{{$year[0]}}年</option>
                                             </select>
                                             <select name="month1">
                                                  
                                                       <option value="{{$year[1]}}" class="form-control" readonly>{{$year[1]}}月</option>
                                                  
                                             </select>
                                             <select name="day1">
                                                      <option value="{{$year[2]}}" class="form-control" readonly>{{$year[2]}}</option>

                                             </select>               
                                        </div>
                                   </div>
                                   <div class="mws-form-row">
                                        <label class="mws-form-label">语言版本</label>
                                        <div class="mws-form-item">
                                             <select class="small" name="language">
                                                  <option value="" class="form-control" readonly>{{$data['language']}}</option>
                                             </select>
                                        </div>
                                   </div>
                                   <div class="mws-form-row">
                                        <label class="mws-form-label">影片时长 (单位：秒)</label>
                                        <div class="mws-form-item">
                                             <input class="form-control" type="text" readonly value="{{$data['time']}}">
                                        </div>
                                   </div>
                                    <div class="mws-form-row">
                                        <label class="mws-form-label">影片封面</label>
                                        <div class="mws-form-item clearfix">
                                             <ul class="mws-form-list inline">
                                                  <img src="/upload/videos/{{$data['photo']}}" alt="" width="200">
                                             </ul>
                                        </div>
                                   </div>
                                   <div class="mws-form-row">
                                        <label class="mws-form-label">影片状态</label>
                                        <div class="mws-form-item clearfix">
                                             <ul class="mws-form-list inline">
                                                  <li>
                                                       @if($data['state']==1)
                                                            <input type="radio" name="state" value="0"  checked  ><label>停止售票</label>
                                                       @elseif($data['state']==1)
                                                       <input type="radio" name="state" value="1" checked> <label>售票</label>
                                                       @elseif($data['state']==2)
                                                       <input type="radio" name="state" value="2" checked> <label>预售</label>
                                                       @endif
                                                  </li>
                                                  
                                             </ul>
                                        </div>
                                   </div>
                              </div>
                              <div class="mws-button-row">
                              </div>
                         </form>
                    </div>         
                </div>
                <div class="date-picker userexinfo-form-section"></div>
<img src="" id="img1" alt="">
@endsection
