@extends('admin.layout')
<script language="javascript" src="/admin/js/YMDClass.js"></script>
<meta name="csrf-token" content="{{csrf_token()}}">
@section('main')
<div class="mws-panel grid_8">
                    <div class="mws-panel-header">
                         <span>{{$title}}</span>
                    </div>

                    <div class="mws-panel-body no-padding">
                         <form class="mws-form" id="art_form" action="/admin/video/{{$data['id']}}" method="POST" enctype="multipart/form-data">
                              {{csrf_field()}}
                              {{method_field('PUT')}}
                              <input type="hidden" name="years" class="small" value="{{$year[0]}}-{{$year[1]}}-{{$year[2]}}">
                              <input type="hidden" name="oldpho" value="{{$data['photo']}}">
                              <div class="mws-form-inline">
                                   <div class="mws-form-row">
                                        <label class="mws-form-label">影片名</label>
                                        <div class="mws-form-item">
                                             <input type="text" name="name" class="small" value="{{$data['name']}}">
                                        </div>
                                   </div>
                                   <div class="mws-form-row">
                                        <label class="mws-form-label">影片类型</label>
                                        <div class="mws-form-item clearfix">
                                             <ul class="mws-form-list inline">
                                                  @for($a=0;$a<count(vtype());$a++)
                                                  <li><input type="checkbox" name="type[]" value="{{vtype()[$a]}}"  
                                                  @foreach($type as $k=>$v) @if($v == vtype()[$a])  checked @endif @endforeach   ><label>{{vtype()[$a]}}</label></li>
                                                  @endfor
                                             </ul>
                                        </div>
                                   </div>
                                   <div class="mws-form-row">
                                        <label class="mws-form-label">上映地区</label>
                                        <div class="mws-form-item">
                                             <select class="small" name="region">
                                                  <option value="0">-------请选择-------</option>
                                                  @for($a=0;$a<count(vregion());$a++)
                                                  <option value="{{vregion()[$a]}}" @if( $data['region'] == vregion()[$a]) selected @endif)>{{vregion()[$a]}}</option>
                                                  @endfor
                                             </select>
                                        </div>
                                   </div>
                                   <div class="mws-form-row">
                                        <label class="mws-form-label">电影简介</label>
                                        <div class="mws-form-item">
                                             <textarea rows="" name="content" cols="" class="large">{{$data['content']}}</textarea>
                                        </div>
                                   </div>
                                   <div class="mws-form-row">
                                        <label class="mws-form-label">已选上映时间</label>
                                        <div class="mws-form-item">
                                             <select>
                                                  <option value="{{$year[0]}}" class="form-control" readonly>{{$year[0]}}年</option>
                                             </select>
                                             <select >
                                                  <option value="{{$year[1]}}" class="form-control" readonly>{{$year[1]}}月</option>
                                             </select>
                                             <select >
                                              <option value="{{$year[2]}}" class="form-control" readonly>{{$year[2]}}日</option>
                                             </select>
                                        </div>
                                   </div>
                                   <div class="mws-form-row">
                                        <label class="mws-form-label">上映时间</label>
                                        <div class="mws-form-item">
                                             <select name="year1" id="y"></select>
                                             <select name="month1" id="m"></select>
                                             <select name="day1" id="d"></select>               
                                        </div>
                                   </div>
                                   <div class="mws-form-row">
                                        <label class="mws-form-label">语言版本</label>
                                        <div class="mws-form-item">
                                             <select class="small" name="language">
                                                  <option value="0">-------请选择-------</option>
                                                  @for($a=0;$a<count(vlanguage());$a++)
                                                  <option value="{{vlanguage()[$a]}}" @if( $data['language'] == vlanguage()[$a]) selected @endif>{{vlanguage()[$a]}}</option>
                                                  @endfor
                                             </select>
                                        </div>
                                   </div>
                                   <div class="mws-form-row">
                                        <label class="mws-form-label">影片时长 (单位：秒)</label>
                                        <div class="mws-form-item">
                                             <input type="number" class="small" name="time" value="{{$data['time']}}">
                                        </div>
                                   </div>
                                   <div class="mws-form-row">
                                        <label class="mws-form-label">影片封面</label>
                                        <div class="mws-form-item">
                                             <div style="width:300px;">
                                             <input type="file"  id="file_upload" name="photo"  accept="image/*">
                                             </div>
                                        </div>
                                    </div>
                                    <div class="mws-form-row">
                                        <label class="mws-form-label">已有封面</label>
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
                                                  <li><input type="radio" name="state" value="0" @if($data['state']==0) checked @endif> <label>停止售票</label></li>
                                                  <li><input type="radio" name="state" value="1" @if($data['state']==1) checked @endif> <label>售票</label></li>
                                                  <li><input type="radio" name="state" value="2" @if($data['state']==2) checked @endif> <label>预售</label></li>
                                                  <li>
                                             </ul>
                                        </div>
                                   </div>
                              </div>
                              <div class="mws-button-row">
                                   <input type="submit" value="修改" class="btn btn-success">
                                   <input type="reset" value="重置" class="btn ">
                              </div>
                         </form>
                    </div>         
                </div>
                <div class="date-picker userexinfo-form-section"></div>
<img src="" id="img1" alt="">
@endsection
@section('js')

<script>
     // 年月日三级联动
     new YMDselect('year1','month1','day1');
     YMDselect.SetM(2)
</script>
@endsection
