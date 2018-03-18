@extends('admin/layouts/layout')

              
@section('main')
               @if( session('mes'))
                <div class="mws-form-message error">
                              
                                <ul>
                                   <li>{{ session('mes') }}</li>
                                    
                                </ul>
               </div>
               @endif
                
                @if (count($errors) > 0)
                    <div class="mws-form-message error">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif 
               		
                    	
                    	<div style="margin:0 auto;width:500px">
                    		<form class="form-inline" action='/admin/cineman/seek' method='get'>
                    		<label class="sr-only" for="inputHelpBlock">搜索影院:</label>
                    		
                    	<input type="text" placeholder="请输入要搜索的id/电影院名称" style="width:200px" name='cineman_name'>
                    			<input type="submit" class="btn  btn-success" value='搜索'>
                    		</form>
                    	</div><br><br><br>
<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span>修改影院
                    
                    </span>

                    </div>
                    

                    <div class="mws-panel-body no-padding">
                    	
                    	<form class="mws-form" action="/admin/cineman/alter" method="post">
                                   {{ csrf_field() }}
      
                    		<div class="mws-form-inline">

                    			
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">影院名称</label>
                    				<div class="mws-form-item">
                    					<input type="text" class="small" name='cineman_name' value="{{$cinema['cinema_name']}}">
                    				</div>
                    			</div>
                                   
                                <div class="mws-form-row">
                                  <label class="mws-form-label">普通厅数量</label>
                                  <div class="mws-form-item">
                                    <input type="number" class="small" name='cineman_number' value="{{ intval(explode(',',$cinema['cinema_movie'])[0]) }}">
                                  </div>
                                </div>
                                
                                <div class="mws-form-row">
                                  <label class="mws-form-label">影院最低价影片</label>
                                  <div class="mws-form-item">
                                    <input type="number" class="small" name='cineman_money' value="{{ $cinema['cinema_money'] }}">
                                  </div>
                                </div>
                                
                                 <div class="mws-form-row"> 
                                  <label class="mws-form-label">是否有特殊厅</label>
                                  <div class="mws-form-item">
                                            <ul class="mws-form-list inline" id="tigg">
                                            @if( strlen(substr($cinema['cinema_movie'],strpos($cinema['cinema_movie'],',')+1)) )
                                                <li><input name="cineman_genderr" value="1" type="radio" checked id="Tinga"> <label>有特殊厅</label></li>
                                                <li><input name="cineman_genderr" value="0"  type="radio" id="Tingg"> <label>没有特殊厅</label></li>
                                            @else
                                                 <li><input name="cineman_genderr" value="1" type="radio" id="Tinga"> <label>有特殊厅</label></li>
                                                <li><input name="cineman_genderr" value="0"  type="radio" checked id="Tingg"> <label>没有特殊厅</label></li>
                                            @endif
                                            </ul>
                                              
                                  </div>
                                </div>
                                   <div class="mws-form-row" id='Tinggg'>
                                      <label class="mws-form-label">选择特殊厅</label>
                                      <div class="mws-form-item clearfix">
                                        <ul class="mws-form-list inline">
                                            @for($i=0;$i<count(movie());$i++)
    
                                          <li><input type="checkbox" name='checkbox[]' value='{{movie()[$i]}}' @foreach($movies as $k=>$v)@if($v == movie()[$i]) checked @endif @endforeach> <label>{{movie()[$i]}}</label></li>
                                          @endfor
                                          </ul>
                                        </div>
                                    </div>
                                   
                                   <div class="mws-form-row">
                                       影院地址:
                                        @include('admin/cj/index')
                                       
                                     <div class="mws-form-item ">
                                     <select id="Province" runat="server" name="cineman_province" style="width: 90px" ></select>
                                         <select id="Country" runat="server" name="cineman_country" style="width: 90px"></select>
                                         <select id="Town" runat="server" name="cineman_town" style="width: 90px"></select>
                                     </div>
                                      <script language="javascript">
                                        setup();
                                       </script>
  
                                        
                                   </div>
                                   <div class="mws-form-row">
                                        <label class="mws-form-label">影院详细地址</label>
                                        <div class="mws-form-item">
                                             <input type="text" class="small" name='cineman_address' value="{{$cinema['address']}}">
                                        </div>
                                   </div>
                    			<div class="mws-form-row">
                                        <label class="mws-form-label">影院联系方式</label>
                                        <div class="mws-form-item">
                                             <input type="text" class="small" name='cineman_phone' value="{{$cinema['phone']}}">
                                        </div>
                                </div>
                    			
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">影院状态</label>
                    				<div class="mws-form-item">
                                    	<ul class="mws-form-list">
                                        	<li><input type="radio" name="cineman_gender" value="1"{{$cinema['status']?'checked':''}}> <label>开启</label></li>
                                        	<li><input type="radio" name="cineman_gender" value="0"{{$cinema['status']?'':'checked'}}> <label>关闭</label></li>
                                       </ul>
                                        
                    				</div>
                    			</div>
                    			
                    		</div>
                    		<input  type='hidden' name="cineman_id" value="{{$cinema['id']}}" >
                    		<div class="mws-button-row">
                    			<input type="submit" value="修改" class="btn btn-success">
                    			<input type="reset" value="重置" class="btn btn-primary">
                    		</div>

                    	</form>
                    </div>    	
                </div>
@endsection
@section('buttom')


<script type="text/javascript">
    $(document).ready(function(){
      $("#tigg>li['checked']").trigger('click');
  

  });

  

    $("#Tingg").click(function(){
    $("#Tinggg").hide();
    });

    $("#Tinga").click(function(){
    $("#Tinggg").show();
  });

    
</script>
   

@endsection