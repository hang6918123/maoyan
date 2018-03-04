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
                    	<form class="mws-form" action="/admin/cineman/add" method="post">
                                   {{ csrf_field() }}
                    		<div class="mws-form-inline">
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">影院名称</label>
                    				<div class="mws-form-item">
                    					<input type="text" class="small" name='cineman_name'>
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
  
                                        <!-- <label class="mws-form-label">影院地址</label>
                                        <div class="mws-form-item " style="width:200px;">
                                             <select class="large">
                                                  <option>--省--</option>
                                                  <option>6D厅</option>
                                                  <option>儿童厅</option>
                                                  <option>中国巨幕厅</option>
                                                  <option>巨幕厅</option>
                                                  <option>杜比全景声厅</option>
                                             </select>
                                        </div>
                                        <div class="mws-form-item " style="width:200px;">
                                             <select class="large">
                                                  <option>--市--</option>
                                                  <option>6D厅</option>
                                                  <option>儿童厅</option>
                                                  <option>中国巨幕厅</option>
                                                  <option>巨幕厅</option>
                                                  <option>杜比全景声厅</option>
                                             </select>
                                        </div>
                                        <div class="mws-form-item " style="width:200px;">
                                             <select class="large">
                                                  <option>--县--</option>
                                                  <option>6D厅</option>
                                                  <option>儿童厅</option>
                                                  <option>中国巨幕厅</option>
                                                  <option>巨幕厅</option>
                                                  <option>杜比全景声厅</option>
                                             </select>
                                        </div> -->
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