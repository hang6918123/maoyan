<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="keywords" content="美团,登录,注册,美团登录,美团注册">
    <title>登录 | 猫眼电影</title>
    <link rel="stylesheet" href="/home/css/login.css">
    <link rel="icon" href="/home/images/maoyan.ico" type="image/x-icon"/> 
</head>

<body class="pg-unitive-login theme--maoyan">
	<header class="header cf">
		<a class="site-logo" href="http://www.zhouyujituan.com">猫眼电影</a>
	</header>
	@if (count($errors) > 0)
		<div class="common-tip sysmsgw">
		    <span class="tip-status tip-status--error"></span>
		    {{$errors->first()}}
		</div>
	@endif
    <div class="site-body-wrapper">
		<div class="site-body cf">
			<div class="promotion-banner">
				<img src="/home/images/login_content.png" width="480" height="370" alt="猫眼电影"/>
			</div>
			<div class="login-section">
				<form id="J-mobile-form" action="/login/judge" method="POST" class="form form--stack J-wwwtracker-form">
					{{csrf_field()}}
					<div class="validate-info" style="visibility:hidden"></div>
					<span class="login-type" data-mtevent="login.mobile.switch">
						<a id="J-mobile-link" href="javascript:;">
							手机动态码登录
							<i></i>
						</a>
						账号登录
					</span>
					<div class="J-info form-field form-field--icon">
						<i class="icon icon-phone"></i>
						<input type="text" id="login-mobile" class="f-text" name="mobile" value="{{old('mobile')}}" placeholder="手机号" />
					</div>
		
					<div class="form-field form-field--icon">
						<i class="icon icon-password"></i>
						<input type="text" name="verifyCode" id="login-verify-code" class="f-text" autocomplete="off" value="" placeholder="动态码" />
						<div class="form-field form-field--verify-mobile" style="top:19px;">
							<input type="button" class="btn-normal btn-mini" id="J-verify-btn" value="获取手机动态码" />
						</div>
						<i class="form-uuid" style="display:none">c9a809db161d4f9689a3.1519785899.1.0.0</i>
					</div>

					<div class="form-field form-field--info">
						<span class="verify-tip" id="J-verify-tip"></span>
					</div>

					<div class="form-field form-field--auto-login cf">
						<a href="javascript:;" class="forget-password">忘记密码？</a>
						<input type="checkbox" value="1"  name="auto_login" id="mobile-autologin" class="f-check " />
						<label class="normal" for="mobile-autologin">7天内自动登录</label>
					</div>
					<div class="form-field form-field--ops">
						<input type="submit" class="btn" name="commit" value="登录" />
					</div>
        
				</form>
			</div>

		</div>
	</div>

	<footer class="footer">
		<div class="copyright">
			<p>
				&copy;<span>2018</span>
				<a href="http://meituan.com/">美团网团购</a>
				meituan.com
				<a href="http://www.miibeian.gov.cn/" target="_blank">京ICP证070791号</a>
				京公网安备11010502025545号<a href="http://meituan.com/about/rules" target="_blank"> 电子公告服务规则</a>
			</p>
		</div>
	</footer>
</body>
</html>
<script src="/public/js/jquery-3.3.1.min.js"></script>
<script src="/public/js/laravel-sms.js"></script>
<script>
	var phone_res = /^1[34578]\d{9}$/;
	$('#J-verify-btn').sms({
	    //laravel csrf token
	    token       : "{{csrf_token()}}",
	    //请求间隔时间
	    interval    : 180,
	    //请求参数
	    requestData : {
	        //手机号
	        mobile : function () {
	            return $('input[name=mobile]').val();
	        },
	        //手机号的检测规则
	        mobile_rule : 'mobile_required'
	    }
	});
	//取消错误警告
	$('.validate-info').click(function(){
		$('.validate-info').css({'visibility':'hidden'})
	});
	//提交验证
	$('#J-mobile-form').submit(function(){
		
		var phone = $('#login-mobile').val();
		if ($.trim(phone).length == 0) {
			$('.validate-info').css({'visibility':'visible'});
			$('.validate-info').html('<i class="tip-status tip-status--opinfo"></i>请输入手机号');
			return false;
		}

		if(phone_res.test(phone)==false){
			$('.validate-info').css({'visibility':'visible'});
			$('.validate-info').html('<i class="tip-status tip-status--opinfo"></i>手机号不正确');
			return false;
		}

		var sms_code = $('#login-verify-code').val();
		if($.trim(sms_code).length != 5){
			$('.validate-info').css({'visibility':'visible'});
			$('.validate-info').html('<i class="tip-status tip-status--opinfo"></i>验证码不正确');
			return false;
		}
	});
</script>