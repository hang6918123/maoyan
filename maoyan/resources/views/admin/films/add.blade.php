@extends('admin/layouts.layout')
@section('css')
<script language="javascript" src="/admin/js/YMDClass.js"></script>
<meta name="csrf-token" content="{{csrf_token()}}">
@endsection
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
@if(session('serror'))
     <div class="mws-form-message error">
            <ul>
               <li>{{session('serror')}}</li>
            </ul>
     </div>
@endif
@if(session('success'))
   <div class="mws-form-message success">
       <ol>
           <li>{{session('success')}}</li>
       </ol>
   </div>
@endif
<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span>{{$title}}</span>
                    </div>

                    <div class="mws-panel-body no-padding">
                    	<form class="mws-form" id="art_form" action="/admin/video" method="POST" enctype="multipart/form-data">
                              {{csrf_field()}}
                    		<div class="mws-form-inline">
                    			<div class="mws-form-row">
                                        <label class="mws-form-label">影片名</label>
                                        <div class="mws-form-item">
                                             <input type="text" name="name" class="small" value="{{old('name')}}">
                                        </div>
                                   </div>
                                   <div class="mws-form-row">
                    				<label class="mws-form-label">影片主演</label>
                    				<div class="mws-form-item">
                    					<input type="text" name="star" class="small" value="{{old('star')}}">
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">影片类型</label>
                    				<div class="mws-form-item clearfix">
                                             <ul class="mws-form-list inline">
                                                  @for($a=0;$a<count(vtype());$a++)
                    						<li><input type="checkbox" name="type[]"  value="{{vtype()[$a]}}"><label>{{vtype()[$a]}}</label></li>
                                                  @endfor
                    					</ul>
                    				</div>
                    			</div>
                                   <div class="mws-form-row">
                                        <label class="mws-form-label">影片单价 (单位：元)</label>
                                        <div class="mws-form-item clearfix">
                                             <ul class="mws-form-list inline">
                                                  <input type="number" class="small" name="money" value="{{old('money')}}">
                                             </ul>
                                        </div>
                                   </div>
                    			<div class="mws-form-row">
                                        <label class="mws-form-label">上映地区</label>
                                        <div class="mws-form-item">
                                             <select class="small" name="region">
                                                  <option value="0">-------请选择-------</option>
                                                  @for($a=0;$a<count(vregion());$a++)
                                                  <option value="{{vregion()[$a]}}" @if( old('region') == vregion()[$a]) selected @endif)>{{vregion()[$a]}}</option>
                                                  @endfor
                                             </select>
                                        </div>
                                   </div>
                                   <div class="mws-form-row">
                                        <label class="mws-form-label">电影简介</label>
                                        <div class="mws-form-item">
                                             <textarea rows="" name="content" cols="" class="large">{{old('content')}}</textarea>
                                        </div>
                                   </div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">上映时间</label>
                    				<div class="mws-form-item">
                                             <select name="year1" >
                                                  @if(old('year1')) 
                                                       <option value="{{old('year1')}}" selected >{{old('year1')}}</option>
                                                  @endif
                                             </select>
                                             <select name="month1"></select>
                                             <select name="day1"></select>               
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                                        <label class="mws-form-label">语言版本</label>
                                        <div class="mws-form-item">
                                             <select class="small" name="language">
                                                  <option value="0">-------请选择-------</option>
                                                  @for($a=0;$a<count(vlanguage());$a++)
                                                  <option value="{{vlanguage()[$a]}}" @if( old('language') == vlanguage()[$a]) selected @endif>{{vlanguage()[$a]}}</option>
                                                  @endfor
                                             </select>
                                        </div>
                                   </div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">影片时长 (单位：秒)</label>
                    				<div class="mws-form-item">
                    					<input type="number" class="small" name="time" value="{{old('time')}}">
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
                                        <label class="mws-form-label">影片状态</label>
                                        <div class="mws-form-item clearfix">
                                             <ul class="mws-form-list inline">
                                                  <li><input type="radio" name="state" value="0"> <label>停止售票</label></li>
                                                  <li><input type="radio" name="state" value="1" checked> <label>售票</label></li>
                                                  <li><input type="radio" name="state" value="2"> <label>预售</label></li>
                                                  <li>
                                             </ul>
                                        </div>
                                   </div>
                    		</div>
                    		<div class="mws-button-row">
                    			<input type="submit" value="添加" class="btn btn-success">
                    			<input type="reset" value="重置" class="btn ">
                    		</div>
                    	</form>
                    </div>    	
                </div>
                <div class="date-picker userexinfo-form-section"></div>
@endsection
@section('buttom')

<script>
     // 年月日三级联动
     new YMDselect('year1','month1','day1');
     //ajax文件上传
</script>
@endsection
