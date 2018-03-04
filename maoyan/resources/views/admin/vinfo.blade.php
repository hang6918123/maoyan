@extends('admin.layouts.layout')
@section('main')
<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span>影片详情</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                    	<form class="mws-form" action="form_layouts.html">
                    		<div class="mws-form-inline">
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">影片名</label>
                    				<div class="mws-form-item">
                    					<input type="text" class="small">
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">影片类型</label>
                    				<div class="mws-form-item clearfix">
                    					<ul class="mws-form-list inline">
                    						<li><input type="radio"> <label>爱情</label></li>
                    						<li><input type="radio"> <label>Radio 1</label></li>
                    						<li><input type="radio"> <label>Radio 1</label></li>
                    						<li><input type="radio"> <label>Radio 1</label></li>
                    					</ul>
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">上映地区</label>
                    				<div class="mws-form-item">
                    					<input type="text" class="small">
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">上映时间</label>
                    				<div class="mws-form-item">
                    					<input type="text" class="small">
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">语言版本</label>
                    				<div class="mws-form-item">
                    					<input type="text" class="small">
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">影片时长</label>
                    				<div class="mws-form-item">
                    					<input type="text" class="small">
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">影片状态</label>
                    				<div class="mws-form-item">
                    					<input type="text" class="small">
                    				</div>
                    			</div>
                    		</div>
                    		<div class="mws-button-row">
                    			<input type="submit" value="编辑" class="btn btn-danger">
                    			<input type="reset" value="重置" class="btn ">
                    		</div>
                    	</form>
                    </div>    	
                </div>
@endsection