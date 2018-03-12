@extends('home.layout')

@section('title')
用户中心
@endsection

@section('css')
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="/home/css/common.4b838ec3.css"/>
	<link rel="stylesheet" href="/home/css/profile-profile.7b3221a5.css"/>
@endsection

@section('content')
<div class="container" id="app" class="page-profile/profile" >
	<div class="content">
		<div class="main">
			<div class="info-content clearfix">
				<div class="user-profile-nav">
					<h1>个人中心</h1>
					<a href="/profile/orders" class="orders ">我的订单</a>
					<a href="/profile" class="profile active">基本信息</a>
				</div>
			  
				<div class="profile-container">
					<div class="profile-title">
						  基本信息
					</div>
					<div class="avatar-container">
						<div class="avatar-content" height=474px>
							<img class="J-setted-avatar" src="/uploads/user/{{session()->get('photo')}}">
							<div class="J-upload-avatar-w upload-avatar-image">
								<input type="button" class="J-upload-avatar upload-btn" value="更换头像">
								<form id="art_form" action="javascript:;" method="post" enctype="multipart/form-data">
									{{csrf_field()}}
									<input type="file" id="fileUpload"  name="fileUpload"/>
								</form>
							</div>
							<div class="tips">支持JPG,JPEG,PNG格式,且文件需小于1M</div>
						</div>
					</div>
						<form id="J-userexinfo-form" class="userexinfo-form" action="javascript:;">
							<div class="userexinfo-form-section">
							<p>昵称：</p>
							<span>
								<input type="text" name="nickName" id="userexinfo-form-nickname" class="ui-checkbox" placeholder="2-15个字，支持中英文、数字" value="{{session()->get('name')}}">
							</span>
							</div>
							<input type="submit" class="form-save-btn" value="保存">
						</form>
				</div>

			</div>
		</div>

	</div>

</div>
@endsection

@section('js')
<script>
	$(function () {
        $("#fileUpload").change(function () {
            uploadImage();
        })
    })

    function uploadImage() {
		//  判断是否有选择上传文件
        var imgPath = $("#fileUpload").val();
        if (imgPath == "") {
            alert("请选择上传图片！");
            return;
        }
        //判断上传文件的后缀名
        var strExtension = imgPath.substr(imgPath.lastIndexOf('.') + 1);
        if (strExtension != 'jpg' && strExtension != 'gif'
            && strExtension != 'png') {
            alert("请选择图片文件");
            return;
        }

        var size = $("#fileUpload")[0].files[0].size;
        if(size > (2 * 1024 * 1024)){
        	alert("文件大小不能超过2M");
        	return;
        }

        var formData = new FormData($('#art_form')[0]);
        $.ajax({
            type: "POST",
            url: "/user/upload",
            data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
                $('.J-setted-avatar').attr('src','/uploads/user/'+data);
                $('.user_photo').attr('src','/uploads/user/'+data);
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                alert("上传失败，请检查网络后重试");
            }
        });
    }

    var name_res = /^(\w|[\u4e00-\u9fa5]){2,15}$/;
    $('.form-save-btn').click(function(){
    	var nickName = $('#userexinfo-form-nickname').val();
    	if($.trim(nickName).length == 0){
    		alert('昵称不能为空');
    		return;
    	}

    	if(name_res.test(nickName) == false){
    		alert('昵称格式为2-15位，支持中英文、数字');
    		return;
    	}

    	$.ajax({
    		headers: {
            	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        	},
    		type: "post",
    		url: "/user/name",
    		data: {'name': nickName},
    		dataType: 'html',
    		success: function(data) {
    			alert(data);
    		},
    		error: function(XMLHttpRequest, textStatus, errorThrown) {
                alert("修改失败");
            }
    	});
    })
</script>
@endsection