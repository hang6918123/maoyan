var name_res = /^(\w|[\u4e00-\u9fa5]){2,15}$/;
var phone_res = /^1[34578]\d{9}$/;
var pass_res = /^\w{6,16}$/;

$('.mws-form').submit(function(){

	var name = $('input[name=name]').val();
	if($.trim(name).length == 0){
		alert('昵称不能为空');
		return false;
	}

	if(name_res.test(name) == false){
		alert('昵称格式为2-15位，支持中英文、数字');
		return false;
	}

	var phone = $('input[name=phone]').val();
	if ($.trim(phone).length == 0) {
		alert('手机号不能为空');
		return false;
	}

	if(phone_res.test(phone)==false){
		alert('手机号格式不正确');
		return false;
	}

	var pass = $('input[name=password]').val();
	if ($.trim(pass).length == 0) {
		$('input[name=password]').removeAttr('name');
	} else {
		if(pass_res.test(pass)==false){
			alert('密码格式为6-16位，支持字母、数字、下划线');
			return false;
		}
	}

	

});

$(function () {
    $("input[name=photo]").change(function () {
        uploadImage();
    });
});

function uploadImage() {
	//  判断是否有选择上传文件
    var imgPath = $("input[name=photo]").val();
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

    var size = $("input[name=photo]")[0].files[0].size;
    if(size > (2 * 1024 * 1024)){
    	alert("文件大小不能超过2M");
    	return;
    }

    var formData = new FormData($('#art_form')[0]);
    var id = $('input[name=photo]').attr('data');
    $.ajax({
        type: "post",
        url: "/admin/user/edit/"+id,
        data: formData,
        contentType: false,
        processData: false,
        success: function(data) {
            $('#user_photo').attr('src','/uploads/user/'+data);
            $('input[name=old_photo]').val(data);
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            alert("上传失败，请检查网络后重试");
        }
    });
}