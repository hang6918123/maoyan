@extends('admin.layouts.layout')
<script language="javascript" src="/admin/js/YMDClass.js"></script>
<meta name="csrf-token" content="{{csrf_token()}}">
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
                         <form class="mws-form" id="art_form" action="/admin/orders/off/{{$data->id}}" method="POST" enctype="multipart/form-data">
                              {{csrf_field()}}
                              
                              <div class="mws-form-inline">
                                   <div class="mws-form-row">
                                        <label class="mws-form-label">用户名</label>
                                        <div class="mws-form-item">
                                             <input type="text" name="name" class="small" value="{{$user->name}}" class="form-control"  readonly>
                                        </div>
                                   </div>
                                   <div class="mws-form-row">
                                        <label class="mws-form-label">影片名</label>
                                        <div class="mws-form-item">
                                             <input type="text" name="name" class="small" value="{{$data->vname}}" class="form-control"  readonly>
                                        </div>
                                   </div>
                                   <div class="mws-form-row">
                                        <label class="mws-form-label">订单编号</label>
                                        <div class="mws-form-item">
                                             <input type="text" name="name" class="small" value="{{$data->number}}" class="form-control"  readonly>
                                        </div>
                                   </div>
                                   <div class="mws-form-row">
                                        <label class="mws-form-label">订单时间</label>
                                        <div class="mws-form-item">
                                             <input type="text" name="name" class="small" value="{{$data->order_time}}" class="form-control"  readonly>
                                        </div>
                                   </div>
                                   <div class="mws-form-row">
                                        <label class="mws-form-label">影院</label>
                                        <div class="mws-form-item">
                                             <input type="text" name="name" class="small" value="{{$data->cinema}}" class="form-control"  readonly>
                                        </div>
                                   </div>
                                   <div class="mws-form-row">
                                        <label class="mws-form-label">座位号</label>
                                        <div class="mws-form-item">
                                             <input type="text" name="name" class="small" value="{{$data->seat}}" class="form-control"  readonly>
                                        </div>
                                   </div>
                                   <div class="mws-form-row">
                                        <label class="mws-form-label">总价格</label>
                                        <div class="mws-form-item">
                                             <input type="text" name="name" class="small" value="{{$data->price}}" class="form-control"  readonly>
                                        </div>
                                   </div>
                                   <div class="mws-form-row">
                                        <label class="mws-form-label">订单状态</label>
                                        <div class="mws-form-item clearfix">
                                             <ul class="mws-form-list inline">
                                                  <li>
                                                       @if($data->state==0)
                                                            <input type="radio" name="state" value="0"  checked  ><label>交易成功</label>
                                                       @elseif($data->state==1)
                                                       <input type="radio" name="state" value="1" checked> <label>交易关闭</label>
                                                       @elseif($data->state==2)
                                                       <input type="radio" name="state" value="2" checked> <label>待付款</label>
                                                       @endif
                                                  </li>
                                                  
                                             </ul>
                                        </div>
                                   </div>
                              </div>
                              <div class="mws-button-row">
                                   @if($data->state==2)
                                   <input type="submit" value="关闭订单" class="btn btn-success">
                                   @endif
                              </div>
                         </form>
                    </div>         
                </div>
                <div class="date-picker userexinfo-form-section"></div>
<img src="" id="img1" alt="">
@endsection
