<?php session_start(); ?>
<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <title>商店信息管理</title>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
            <link href="../css/bootstrap_css/bootstrap.min.css" rel="stylesheet" />
            
            
            <!-- Loading Flat UI -->
            <link href="../css/bootstrap_css/flat_ui_css/flat-ui.css" rel="stylesheet" />
            <link href="../css/bootstrap_css/flat_ui_css/demo.css" rel="stylesheet" />
        <!--bootstrap_end-->
        
        <!-- Le styles -->
        
        	<link type="text/css" href="./css/jquery-ui-1.10.0.custom.css" rel="stylesheet" />
        
        
        	
    </head>
    <body>
        <script type="text/javascript">
            $(function(){
                $("#select_shop").bind("click",function(){
                    alert("test");
                });
            });
        </script>
        <div id="tabs">
            <ul>
                <li><a href="#tabs-a">查询商店信息</a></li>
                <li><a href="#tabs-b">修改商店信息</a></li>
                <li><a href="#tabs-c">增加商店信息</a></li>
                <li><a href="#tabs-d">删除商店信息</a></li>
            </ul>
            <div id="tabs-a">
                <a href="#" id="select_shop">按钮<?php echo $_SESSION['username_adminuserfixpassword__']; ?></a>
                <div id="select_content"></div>
            </div>
            <div id="tabs-b">Phasellus mattis tincidunt nibh. Cras orci urna, blandit id, pretium vel, aliquet ornare, felis. Maecenas scelerisque sem non nisl. Fusce sed lorem in enim dictum bibendum.....</div>
            <div id="tabs-c">Nam dui era t, auctor a, dignissim quis, sollicitudin eu, felis. Pellentesque nisi urna, interdum eget, sagittis et, consequat vestibulum, lacus. Mauris porttitor ullamcorper augue.....</div>
            <div id="tabs-d">Nam dui era t, auctor a, dignissim quis, sollicitudin eu, felis. Pellentesque nisi urna, interdum eget, sagittis et, consequat vestibulum, lacus. Mauris porttitor ullamcorper augue.....</div>
        </div> 
        
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="../js/jquery-1.9.1..min.js"></script>
        <script src="../js/bootstrap_js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/js/jquery-ui-1.10.0.custom.min.js" type="text/javascript"></script>
        <script src="assets/js/google-code-prettify/prettify.js" type="text/javascript"></script>
        <script src="assets/js/docs.js" type="text/javascript"></script>
        <script src="assets/js/demo.js" type="text/javascript"></script>
    </body>    
<html>
    
    