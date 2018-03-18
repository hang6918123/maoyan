var name_res = /^(\w|[\u4e00-\u9fa5]){2,15}$/;
var phone_res = /^1[34578]\d{9}$/;
var pass_res = /^\w{6,16}$/;
var name_sub = false;
var phone_sub = false;
var pass_sub = false;

$('input[name=name]').on('change',function(){
	var name = $(this).val();
	if($.trim(name).length == 0){
		alert('昵称不能为空');
		name_sub = false;
		return false;
	}

	if(name_res.test(name) == false){
		alert('昵称格式为2-15位，支持中英文、数字');
		name_sub = false;
		return false;
	}
	name_sub = true;
});

$('input[name=phone]').on('change',function(){
	var phone = $(this).val();
	if ($.trim(phone).length == 0) {
		alert('手机号不能为空');
		phone_sub = false;
		return false;
	}

	if(phone_res.test(phone)==false){
		alert('手机号格式不正确');
		phone_sub = false;
		return false;
	}
	phone_sub = true;
});

$('input[name=password]').on('change',function(){
	var pass = $(this).val();
	if ($.trim(pass).length == 0) {
		alert('密码不能为空');
		pass_sub = false;
		return false;
	}

	if(pass_res.test(pass)==false){
		alert('密码格式为6-16位，支持字母、数字、下划线');
		pass_sub = false;
		return false;
	}
	pass_sub = true;
});

$('.mws-form').submit(function(){
	if(!name_sub || !phone_sub || !pass_sub){
		return false;
	}
});