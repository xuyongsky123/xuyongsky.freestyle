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
                      <button id="menu-button" type="button" class="btn btn-default dropdown-toggle menu-button" data-toggle="dropdown" aria-expanded="false">
                        Action <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu xuyong-dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Somethingfdsssssssssssssssssssssssssss</a></li>
                        <li><a href="./check_admin_login.php?action=logout_admin">注销</a></li>
                      </ul>
                </div><!-- /.navbar-collapse -->
            </nav><!-- /navbar -->
        </div>
        <div class="col-xs-xuyong">
                <div class="col-xs-2 xuyong_width">
                        <div id="menu-collapse">
                            <div class="title_style">
                                <h3><a href="#">网站用户管理</a></h3>
                                <div class="fix_style">Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</div>
                            </div>
                            <div class="title_style">
                                <h3><a href="#">网站会员管理</a></h3>
                                <div class="fix_style">Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</div>
                            </div>
                            <div class="title_style">
                                <h3><a href="#">毕业设计专栏</a></h3>
                                <div class="fix_style">开发中...</div>
                            </div>
                            <div class="title_style">
                                <h3><a href="#">博客文章专栏</a></h3>
                                <div class="fix_style">开发中...</div>
                            </div>
                            <div class="title_style">
                                <h3><a href="#">大学电商专栏</a></h3>
                                <!--<div class="fix_style">
                                    <div class="college_mall_item"><a href="./info_shop.php" id="info_shop" name="info_shop.php" target="college_mall">商店信息管理</a></div>
                                    <div class="college_mall_item"><a href="./info_goods.php" id="info_goods" name="info_goods.php" target="college_mall">商品信息管理</a></div>
                                    <div class="college_mall_item"><a href="./info_user.php" id="info_user" name="info_user.php" target="college_mall">用户信息管理</a></div>
                                    <div class="college_mall_item"><a href="./info_member.php" id="info_member" name="info_member.php" target="college_mall">会员信息管理</a></div>
                                    <div class="college_mall_item"><a href="./info_order.php" id="info_order" name="info_order.php" target="college_mall">订单信息管理</a></div>
                                    <div class="college_mall_item"><a href="#" id="" name="" target="college_mall">...</a></div>
                                </div>-->
                                <div class="fix_style">
                                    <div class="college_mall_item"><a href="#" id="info_shop" name="info_shop.php">商店信息管理</a></div>
                                    <div class="college_mall_item"><a href="#" id="info_goods" name="info_goods.php">商品信息管理</a></div>
                                    <div class="college_mall_item"><a href="#" id="info_user" name="info_user.php">用户信息管理</a></div>
                                    <div class="college_mall_item"><a href="#" id="info_member" name="info_member.php">会员信息管理</a></div>
                                    <div class="college_mall_item"><a href="#" id="info_order" name="info_order.php">订单信息管理</a></div>
                                    <div class="college_mall_item"><a href="" id="" name="">...</a></div>
                                </div>
                            </div>
                        </div>
                </div>
                <div id="action_container" class="col-xs-10 content_container">
                    <!--<iframe src="" id="iframe" name="college_mall" scrolling="no">您的浏览器尚不支持iframe标签，请使用其他类型浏览器来浏览本页面...</iframe>-->
                    
        		</div>
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
