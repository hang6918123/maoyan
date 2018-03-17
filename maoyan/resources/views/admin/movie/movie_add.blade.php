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
                <br>
                <br>
                <br>
                      <div style="margin:0 auto;width:500px">
                        <form class="form-inline" action='/admin/movie/seek' method='get'>
                        <label class="sr-only" for="inputHelpBlock">查找影厅:</label>
                        
                      <input type="text" placeholder="请输入要搜索的id/电影院名称" style="width:200px" name='movie_name'>
                          <input type="submit" class="btn  btn-success" value='搜索'>
                        </form>
                      </div>
@endsection