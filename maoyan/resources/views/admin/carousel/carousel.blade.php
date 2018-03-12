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
               @if( session('mss'))
                    <div class="mws-form-message success">
                                  
                                    <ul>
                                       <li>{{ session('mss') }}</li>
                                        
                                    </ul>
                   </div>
                   @endif
<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span>添加轮播图</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                    	<form class="mws-form" action="/admin/carousel/stara" method="POST" enctype="multipart/form-data">
                                   
                    		<div class="mws-form-inline">
                          			{{ csrf_field() }}
                                <div class="mws-form-row">
                          				<label class="mws-form-label">请选择要添加的轮播1</label>
                          				<div class="mws-form-item">
                          					<input type="file" class="small" name='phone[]'>
                          				</div>
                          			</div>
                                <div class="mws-form-row">
                                  <label class="mws-form-label">请选择要添加的轮播2</label>
                                  <div class="mws-form-item">
                                    <input type="file" class="small" name='phone[]'>
                                  </div>
                                </div>  
                    			       <div class="mws-form-row">
                                  <label class="mws-form-label">请选择要添加的轮播3</label>
                                  <div class="mws-form-item">
                                    <input type="file" class="small" name='phone[]'>
                                  </div>
                                </div>
                    			       <div class="mws-form-row">
                                  <label class="mws-form-label">请选择要添加的轮播4</label>
                                  <div class="mws-form-item">
                                    <input type="file" class="small" name='phone[]'>
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