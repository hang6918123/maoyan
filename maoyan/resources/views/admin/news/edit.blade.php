@extends('admin.layouts.layout');

@section('title')

@endsection

@section('main')
<div class="mws-panel grid_8">
    @if(session()->has('error'))
        <div class="mws-form-message success">
            <font style="vertical-align: inherit;">
                {{session()->get('error')}}
            </font>
        </div>
    @endif
    <div class="mws-panel-header">
        <span><i class="icon-pencil"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 资讯修改</font></font></span>
    </div>
    <div class="mws-panel-body no-padding">
        <form class="mws-form" action="/admin/news/{{$data['id']}}" method="post" id="news_form" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="PUT">
            <div class="mws-form-inline">
                <div class="mws-form-row">
                    <label class="mws-form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">标题</font></font></label>
                    <div class="mws-form-item">
                        <input type="hidden" name="news_id" value="{{$data['id']}}">
                        <input type="text" class="large" name="title" value="{{$data['title']}}">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">描述</font></font></label>
                    <div class="mws-form-item">
                        <input type="text" class="large" name="descride" value="{{$data['descride']}}">
                    </div>
                </div>
                <div class="mws-form-row bordered">
                    <label class="mws-form-label">海报预览：</label>
                    <div class="mws-form-item">
                        <img src="/uploads/news/{{$data['poster']}}" alt="用户头像" width="160px" id="user_photo">
                        <input type="hidden" name="old_poster" value="{{$data['poster']}}">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">海报</font></font></label>
                    <div class="mws-form-item">
                        <input type="file" class="large" name="poster">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">内容</font></font></label>
                    <div class="mws-form-item">
                        <script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config.js"></script>
                        <script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.all.min.js"> </script>
                        <script type="text/javascript" charset="utf-8" src="/ueditor/lang/zh-cn/zh-cn.js"></script>


                        <script id="editor" type="text/plain" name="content" style="height:600px;">
                            {!!$data['content']!!}
                        </script>
                        <script type="text/javascript">

                            //实例化编辑器
                            //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
                            var ue = UE.getEditor('editor');
                        </script>
                        <style>
                            .edui-default{line-height: 28px;}
                            div.edui-combox-body,div.edui-button-body,div.edui-splitbutton-body
                            {overflow: hidden; height:20px;}
                            div.edui-box{overflow: hidden; height:22px;}
                        </style>
                    </div>
                </div>
                <div class="mws-button-row">
                    <input type="submit" value="确认修改" class="btn btn-danger">
                </div>
            </div>
        </form>
    </div>      
</div>
@endsection

@section('buttom')
<script src="/admin/js/news/newsEdit.js"></script>
@endsection