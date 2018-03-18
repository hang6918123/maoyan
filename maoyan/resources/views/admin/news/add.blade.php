@extends('admin.layouts.layout');

@section('title')

@endsection

@section('main')
<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span><i class="icon-pencil"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 资讯发布</font></font></span>
    </div>
    <div class="mws-panel-body no-padding">
        <form class="mws-form" action="javascript:;" method="post" id="news_form">
            {{csrf_field()}}
            <div class="mws-form-inline">
                <div class="mws-form-row">
                    <label class="mws-form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">标题</font></font></label>
                    <div class="mws-form-item">
                        <input type="text" class="large" name="title">
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


                        <script id="editor" type="text/plain" name="content" style="height:600px;"></script>
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
                    <input type="submit" value="确认发布" class="btn btn-danger">
                </div>
            </div>
        </form>
    </div>      
</div>
@endsection

@section('buttom')
<script>
	function getContent() {
        var arr = [];
        arr.push("使用editor.getContent()方法可以获得编辑器的内容");
        arr.push("内容为：");
        arr.push(UE.getEditor('editor').getContent());
        alert(arr.join("\n"));
    }
	$('#news_form').submit(function(){
		getContent();
		return false;
	});
</script>
@endsection