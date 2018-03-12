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
                      <span><i class="icon-pictures"></i>选择要操作的轮播</span>
                    </div>
                    <div class="mws-panel-body">
                    <ul class="thumbnails mws-gallery">
                      @foreach($carousel as $k=>$v)
                      <li>
                              <span class="thumbnail"><img src="{{$v['carousel_path']}}" alt="{{$v['carousel_name']}}"></span>
                                <span class="mws-gallery-overlay">
                                    
                                    <a href="/admin/carousel/update/{{$v['id']}}" class="mws-gallery-btn"><i class="icon-pencil"></i></a>
                                    <a href="/admin/carousel/delete/{{$v['id']}}" class="mws-gallery-btn"><i class="icon-trash"></i></a>
                                </span>
                      </li>
                      @endforeach                         
                    </ul>
                    </div>
        </div>
@endsection
@section('buttom')

   

@endsection