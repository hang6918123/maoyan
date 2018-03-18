@extends('admin/layouts/layout')

              
@section('main')
               @if( session('mes'))
                <div class="mws-form-message error">
                              
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
                        <form class="form-inline" action='/admin/movie/seek' method='get'>
                        <label class="sr-only" for="inputHelpBlock">查找影厅:</label>
                        
                      <input type="text" placeholder="请输入要搜索的id/电影院名称" style="width:200px" name='movie_name'>
                          <input type="submit" class="btn  btn-success" value='搜索'>
                        </form>
                      </div><br><br><br>
<div class="mws-panel grid_8">
                    <div class="mws-panel-header">
                      <span>
                      {{isset($movies['cinema_name']) ? $movies['cinema_name'] : '影厅电影上架页'}}
                      </span>
                    </div>

                    <div class="mws-panel-body no-padding">
                      <form class="mws-form" action="/admin/movie/add" method="post">
                            
                            <div class="mws-form-row">
                              <div class="mws-form-cols">
                               
                               <input type="hidden" value="{{$movies['id'] or ''}}" name="cinema_id">

                                @for($i=1; $i<= $common; $i++)
                                    @if(isset($common))
                                    <div class="mws-form-col-1-6">
                                        <label class="mws-form-label">厅{{$i}}电影上架</label>
                                        <div class="mws-form-item">
                                            <input type="text" name="{{$i}}[]">
                                        </div>
                                    </div>
                                    <div class="mws-form-col-1-6">
                                        <label class="mws-form-label">厅{{$i}}电影开播时间</label>
                                        <div class="mws-form-item">
                                            <input type="text" name="{{$i}}time[]">
                                        </div>
                                    </div>
                                    @endif
                                @endfor
                             
                                
                                 @if(isset($special))
                                  @for($i=0;$i<count($special)-1;$i++)
                                  
                                    <div class="mws-form-col-1-8">
                                        <label class="mws-form-label">{{$special[$i]}}电影上架</label>
                                        <div class="mws-form-item">
                                            <input type="text" name="{{$special[$i]}}[]">
                                        </div>
                                    </div>
                                    <div class="mws-form-col-1-8">
                                        <label class="mws-form-label">{{$special[$i]}}电影开播时间</label>
                                        <div class="mws-form-item">
                                            <input type="text" name="{{$special[$i]}}time[]">
                                        </div>
                                    </div>  
                                  @endfor    
                                    @endif
                                    </div>
                               
                                    </div>

                                </div>
                            
                            {{ csrf_field() }}
                            
                        <div class="mws-button-row">
                          <input type="submit" value="提交" class="btn btn-danger">
                          <input type="reset" value="重置" class="btn ">
                        </div>
                        </form>
                    </div>
                </div>
@endsection