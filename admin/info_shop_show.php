<?php  
	session_start();
	header("Content-Type=text/html;charset=utf-8");
    if(!isset($_SESSION['username_adminuserfixpassword__'])){
        echo "<script language='javascript'>alert('Please login...');window.location.href='./index.php';</script>";
    }else{
?>
<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        <!--bootstrap_begin-->
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1" />
            <!-- Bootstrap -->
            <link href="../css/bootstrap_css/bootstrap.min.css" rel="stylesheet" />
            
            
            <!-- Loading Flat UI -->
            <link href="../css/bootstrap_css/flat_ui_css/flat-ui.css" rel="stylesheet" />
        <!--bootstrap_end-->
        
        	<link href="./css/show_style.css" rel="stylesheet" />
        
        
        <title>管理商店操作界面</title>
        <style type="text/css">
        </style>	
    </head>
    <body>
        <div class="header_style">
            <nav>
                <div class="logo"></div>
                <div class="back"></div>
            </nav><!-- /navbar -->
        </div>
        <div id="content_show">
        	
        </div>
    </body>
</html>
<?php
        
    }
?>
