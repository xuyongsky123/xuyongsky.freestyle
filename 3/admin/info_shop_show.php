<?php  
	session_start();
	header("Content-Type=text/html;charset=utf-8");
    if(!isset($_SESSION['username_adminuserfixpassword__'])){
        echo "<script language='javascript'>alert('请先登录...');window.location.href='./index.php';</script>";
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
            <link href="../css/bootstrap_css/flat_ui_css/demo.css" rel="stylesheet" />
        <!--bootstrap_end-->
        
        <!-- Le styles -->
        
        	<link type="text/css" href="./css/jquery-ui-1.10.0.custom.css" rel="stylesheet" />
            <!--[if IE 7]>
            <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css">
            <![endif]-->
            <!--[if lt IE 9]>
            <link rel="stylesheet" type="text/css" href="css/custom-theme/jquery.ui.1.10.0.ie.css"/>
            <![endif]-->

            <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
            <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <![endif]-->
        
        
        	<link href="./css/main_style.css" rel="stylesheet" />
        
        
        <title>后台主界面</title>
        <style type="text/css">
        </style>	
    </head>
    <body>
        <div class="col-xs-12 col-xs-xuyong">
            <nav class="navbar navbar-inverse navbar-embossed" role="navigation">
                <div class="navbar-header navbar_xuyong">
                  <a class="navbar-brand" href="#">Free Style</a>
                </div>
                <div class="collapse navbar-collapse nav_xuyong" id="navbar-collapse-01">
                      <button id="menu-button" type="button" class="btn btn-default dropdown-toggle menu-button">
                          <a href="./main.php">返回</a>
                      </button>
                </div><!-- /.navbar-collapse -->
            </nav><!-- /navbar -->
        </div>
      
        
        <!-- Placed at the end of the document so the pages load faster -->
        
            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="../js/jquery-1.9.1.min.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="../js/bootstrap_js/bootstrap.min.js"></script>
            <script src="./assets/js/jquery-ui-1.10.0.custom.min.js" type="text/javascript"></script>
            <script src="./assets/js/google-code-prettify/prettify.js" type="text/javascript"></script>
            <script src="./assets/js/docs.js" type="text/javascript"></script>
            <script src="./assets/js/demo.js" type="text/javascript"></script>
        
    </body>
</html>
<?php
        
    }
?>
