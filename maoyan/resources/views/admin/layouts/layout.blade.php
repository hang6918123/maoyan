<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css" href="/admin/plugins/colorpicker/colorpicker.css" media="screen">
<link rel="stylesheet" href="/admin/plugins/plupload/jquery.plupload.queue.css" media="screen">
<link rel="stylesheet" href="/admin/plugins/elfinder/css/elfinder.css"media="screen" >

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/admin/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admin/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admin/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/admin/css/mws-style.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admin/css/icons/icol16.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admin/css/icons/icol32.css" media="screen">

<!-- Demo and Plugin Stylesheets -->
<link rel="stylesheet" type="text/css" href="/admin/css/demo.css" media="screen">

<!-- jQuery-UI Stylesheet -->
<link rel="stylesheet" type="text/css" href="/admin/jui/css/jquery.ui.all.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admin/jui/jquery-ui.custom.css" media="screen">

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="/admin/css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admin/css/themer.css" media="screen">

<title>MWS Admin - Files</title>

</head>

<body>
	<!-- Header -->
	<div id="mws-header" class="clearfix">
    
    	<!-- Logo Container -->
    	<div id="mws-logo-container">
        
        	<!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
        	<div id="mws-logo-wrap">
            	<img src="/admin/images/logo.png" alt="mws admin">
			</div>
        </div>
        
        <!-- User Tools (notifications, logout, profile, change password) -->
        <div id="mws-user-tools" class="clearfix">            
            <!-- User Information and functions section -->
            <div id="mws-user-info" class="mws-inset">
            
            	<!-- User Photo -->
            	<div id="mws-user-photo">
                	<img src="/admin/example/profile.jpg" alt="User Photo">
                </div>
                
                <!-- Username and Functions -->
                <div id="mws-user-functions">
                    <div id="mws-username">
                        Hello, John Doe
                    </div>
                    <ul>
                    	<li><a href="#">Profile</a></li>
                        <li><a href="#">Change Password</a></li>
                        <li><a href="index.html">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Start Main Wrapper -->
    <div id="mws-wrapper">
    
    	<!-- Necessary markup, do not remove -->
		<div id="mws-sidebar-stitch"></div>
		<div id="mws-sidebar-bg"></div>
        
        <!-- Sidebar Wrapper -->
        <div id="mws-sidebar">
        
            <!-- Hidden Nav Collapse Button -->
            <div id="mws-nav-collapse">
                <span></span>
                <span></span>
                <span></span>
            </div>            
            <!-- 侧边栏 -->
            <div id="mws-navigation">
                <ul>
                    <li>
                        <a href="#"><i class="icon-user"></i>用户管理</a>
                        <ul class="closed">
                            <li><a href="form_layouts.html">用户列表</a></li>
                            <li><a href="form_elements.html">添加用户</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-file"></i>订单管理</a>
                        <ul class="closed">
                            <li><a href="form_layouts.html">订单列表</a></li>
                            <li><a href="form_elements.html">查询订单</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-home"></i>影院管理</a>
                        <ul class="closed">
                            <li><a href="/admin/cineman">影院列表</a></li>
                            <li><a href="/admin/cineman/add">添加影院</a></li>
                            <li><a href="/admin/cineman/update">修改影院</a></li>
                            <li><a href="/admin/cineman/delete">影院回收站</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-home"></i>影厅管理</a>
                        <ul class="closed">
                            
                            <li><a href="/admin/movie">电影上架</a></li>
                            <li><a href="/admin/movie/delete">电影下架</a></li>
                            <li><a href="/admin/movie/edit">座位管理</a></li>
                            <li><a href="/admin/movie/delete">删除影厅</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-facetime-video"></i>影片管理</a>
                        <ul class="closed">
                            <li><a href="/admin/video/list">影片列表</a></li>
                            <li><a href="form_elements.html">添加影片</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-bars"></i>排行管理</a>
                        <ul class="closed">
                            <li><a href="form_layouts.html">影片列表</a></li>
                            <li><a href="form_elements.html">添加影片</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-bullhorn"></i>资讯管理</a>
                        <ul class="closed">
                            <li><a href="form_layouts.html">资讯列表</a></li>
                            <li><a href="form_elements.html">添加资讯</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-wrench"></i>站点配置</a>
                        <ul class="closed">
                            <li><a href="form_layouts.html">影片列表</a></li>
                            <li><a href="form_elements.html">添加影片</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        
        <!-- Main Container Start -->
        <div id="mws-container" class="clearfix">
        
        	<!-- Inner Container Start -->
            <div class="container">
                 
            	@section('main')
                
                            
                @show
                <!-- Panels End -->
            </div>
            <!-- Inner Container End -->
                       
            <!-- Footer -->
            <div id="mws-footer">
            	Copyright Your Website 2012. All Rights Reserved.
            </div>
            
        </div>
        <!-- Main Container End -->
        
    </div>

    <!-- JavaScript Plugins -->
    <script src="/admin/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/admin/js/libs/jquery.mousewheel.min.js"></script>
    <script src="/admin/js/libs/jquery.placeholder.min.js"></script>
    <script src="/admin/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="/admin/jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="/admin/jui/js/timepicker/jquery-ui-timepicker.min.js"></script>
    <script src="/admin/jui/js/jquery.ui.touch-punch.js"></script>

    <!-- Plugin Scripts -->
    <script src="/admin/plugins/plupload/plupload.js"></script>
    <script src="/admin/plugins/plupload/plupload.flash.js"></script>
    <script src="/admin/plugins/plupload/plupload.html4.js"></script>
    <script src="/admin/plugins/plupload/plupload.html5.js"></script>
    <script src="/admin/plugins/plupload/jquery.plupload.queue/jquery.plupload.queue.js"></script>
    <script src="/admin/plugins/colorpicker/colorpicker-min.js"></script>
    <script src="/admin/plugins/elfinder/js/elfinder.min.js"></script>

    <!-- Core Script -->
    <script src="/admin/bootstrap/js/bootstrap.min.js"></script>
    <script src="/admin/js/core/mws.js"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="/admin/js/core/themer.js"></script>

    <!-- Demo Scripts (remove if not needed) -->
    <script src="/admin/js/demo/demo.files.js"></script>
@section('buttom')

@show               
</body>
</html>
