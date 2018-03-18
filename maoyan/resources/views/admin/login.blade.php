<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/admin/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admin/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admin/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/admin/css/login.css" media="screen">

<link rel="stylesheet" type="text/css" href="/admin/css/mws-theme.css" media="screen">

<title>{{$title}}</title>

</head>

<body>

    <div id="mws-login-wrapper">
        @if(session()->has('error'))
        <div class="mws-form-message error">
            <font style="vertical-align: inherit;">
                {{session()->get('error')}}
            </font>
        </div>
        @endif
        <div id="mws-login" style="width:274px">
            <h1>登录</h1>
            <div class="mws-login-lock"><i class="icon-lock"></i></div>
            <div id="mws-login-form">
                <form class="mws-form" action="/admin/login/do" method="post">
                    {{csrf_field()}}
                    <div class="mws-form-row">
                        <div class="mws-form-item">
                            <input type="text" name="username" class="mws-login-username required" placeholder="账号/手机号">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <div class="mws-form-item">
                            <input type="password" name="password" class="mws-login-password required" placeholder="密码">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <div class="mws-form-item">
                            <input type="text" name="code" class="mws-login-code required" placeholder="验证码">
                            <img src="/admin/login/captcha/1"  alt="验证码" title="刷新图片" width="100" height="40" id="code" border="0">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <input type="submit" value="登录" class="btn btn-success mws-login-button">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<script src="/public/js/jquery-3.3.1.min.js"></script>
<script>
    $("#code").click(function(){
        var url ="/admin/login/captcha/1?a=" + Math.random();
        $(this).attr('src',url);
    });
    
    $('.mws-form').submit(function(){
        var name_res = /^\w{2,15}$/;
        var username = $('input[name=username]').val();
        if($.trim(username).length == 0){
            alert('账号不能为空');
            return false;
        }

        if(name_res.test(username) == false){
            alert('账号格式为2-15位，支持英文、数字、下划线');
            return false;
        }

        var pass_res = /^\w{6,16}$/;
        var pass = $('input[name=password]').val();
        if($.trim(pass).length == 0){
            alert('密码不能为空');
            return false;
        }

        if(pass_res.test(pass) == false){
            alert('密码格式为6-16位，支持英文、数字、下划线');
            return false;
        }

        var come_res = /^\w{5}$/;
        var code = $('input[name=code]').val();
        if($.trim(code).length == 0){
            alert('验证码不能为空');
            return false;
        }

        if(code_res.test(code) == false){
            alert('验证码格式不正确');
            return false;
        }
    });

    $('.error').click(function(){
        $(this).css('display','none');
    });
</script>