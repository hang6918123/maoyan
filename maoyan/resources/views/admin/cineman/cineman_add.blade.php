@extends('admin/layouts/layout')

              
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
                    	<span>添加影院</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                    	<form class="mws-form" action="/admin/cineman/stara" method="post">
                                   {{ csrf_field() }}
                    		<div class="mws-form-inline">
                          			<div class="mws-form-row">
                          				<label class="mws-form-label">影院名称</label>
                          				<div class="mws-form-item">
                          					<input type="text" class="small" name='cineman_name'>
                          				</div>
                          			</div>
                                  
                                <div class="mws-form-row">
                                  <label class="mws-form-label">普通厅数量</label>
                                  <div class="mws-form-item">
                                    <input type="number" class="small" name='cineman_number'>
                                  </div>
                                </div>

                                
                                 <div class="mws-form-row"> 
                                  <label class="mws-form-label">是否有特殊厅</label>
                                  <div class="mws-form-item">
                                            <ul class="mws-form-list inline">
                                                <li><input name="cineman_gender" value="1" type="radio" onclick="show()"> <label>有特殊厅</label></li>
                                                <li><input name="cineman_gender" value="0" checked="" type="radio" onclick="hidden()"> <label>没有特殊厅</label></li>
                                            </ul>
                                              
                                  </div>
                                </div>
                                   <div class="mws-form-row" id='Tingg'>
                                      <label class="mws-form-label">选择特殊厅</label>
                                      <div class="mws-form-item clearfix">
                                        <ul class="mws-form-list inline">
                                          <li><input type="checkbox" name='checkbox[]' value='IMAX厅'> <label>IMAX厅</label></li>
                                          <li><input type="checkbox" name='checkbox[]' value='中国巨幕厅'> <label>中国巨幕厅</label></li>
                                          <li><input type="checkbox" name='checkbox[]' value='杜比全景声厅'> <label>杜比全景声厅</label></li>
                                          <li><input type="checkbox" name='checkbox[]' value='杜比影院'> <label>杜比影院</label></li>
                                          <li><input type="checkbox" name='checkbox[]' value='RealD厅'> <label>RealD厅</label></li>
                                          <li><input type="checkbox" name='checkbox[]' value='RealD 6FL厅'> <label>RealD 6FL厅</label></li>
                                          <li><input type="checkbox" name='checkbox[]' value='LUXE巨幕厅'> <label>LUXE巨幕厅</label></li>
                                          <li><input type="checkbox" name='checkbox[]' value='四DX厅'> <label>4DX厅</label>
                                          </li>
                                          <li><input type="checkbox" name='checkbox[]' value='DTS:X 临境音厅'> <label>DTS:X 临境音厅</label></li>
                                          <li><input type="checkbox" name='checkbox[]' value='儿童厅'> <label>儿童厅</label></li>
                                          <li><input type="checkbox" name='checkbox[]' value='四K厅'> <label>4K厅</label></li>
                                          <li><input type="checkbox" name='checkbox[]' value='四D厅'> <label>4D厅</label></li>
                                          <li><input type="checkbox" name='checkbox[]' value='巨幕厅'> <label>巨幕厅</label></li>
                                          </ul>
                                        </div>
                                    </div>
                                    <script>
                                      function show(){
                                      
                                        $("#tingg").attr("display","");
                                      
                                      }
                                      function hidden(){
                                        $("#tingg").attr("display","none");
                                      
                                      
                                      }
                                    </script>
                                   
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
                                             <input type="text" class="small" name='cineman_address'>
                                        </div>
                                   </div>
                    			         <div class="mws-form-row">
                                        <label class="mws-form-label">影院联系方式</label>
                                        <div class="mws-form-item">
                                             <input type="text" class="small" name='cineman_phone'>
                                        </div>
                                   </div>
                    			
                    			
                    			
                    		</div>
                    		<div class="mws-button-row">
                    			<input type="submit" value="添加" class="btn btn-success">
                    			<input type="reset" value="重置" class="btn btn-primary">
                    		</div>
                    	</form>
                    </div>    	
                </div>
@endsection