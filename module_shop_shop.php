<?php
  header("Content-Type:text/html;charset=utf-8;");
  //echo '<div style="z-index:100;background:lightgreen;margin-top:15%;font-size:2rem;padding:50px;text-align:center;">大学网上商城模块，针对大学校园内的电商，功能开发中...</div>';
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head> 
    <?php include('./frame_bootstrap_templethead.php'); ?>
      <link href="./css/module_shop_css/module_shop_style.css" rel="stylesheet" />
	<title>大学电商专栏</title>
  </head>
  <body>
    <header style="height:100px;font-size:5rem;">
        <div id="logo" style="text-align:left;padding:7px 0 7px 7px;">
        	College Mall
        </div>
        <div id="shop_header" style="background:red;display:inline-block;">
				<div id="login">
					<?php require("./check_login.php"); ?>
				</div>
				<div class="clearfix"></div>
			<div>
    </header>
    <nav class="navbar navbar-inverse navbar-embossed" role="navigation">
            <div class="collapse navbar-collapse" id="navbar-collapse-01">
              <ul class="nav navbar-nav navbar-left">
                <li><a href="./module_shop_shop.php">Home</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Introduce</a>
                  <ul class="dropdown-menu">
                    <li><a href="#">sub menu one</a></li>
                    <li class="divider"></li>
                    <li><a href="#">sub menu two</a></li>
                    <li class="divider"></li>
                    <li><a href="#">sub menu three</a></li>
                    <li class="divider"></li>
                    <li><a href="#">sub menu four</a></li>
                  </ul>
                </li>
                <li><a href="#fakelink">About Us</a></li>
                <li><a href="./index.php">Primary-Home</a></li>
              </ul>
                
                
                
              <form class="navbar-form navbar-right" action="#" role="search">
                <div class="form-group">
                  <div class="input-group">
                    <input class="form-control" id="navbarInput-01" type="search" placeholder="Search">
                    <span class="input-group-btn">
                      <button type="submit" class="btn xuyong_fix">
                        搜索
                      </button>
                    </span>
                  </div>
                </div>
              </form>
            </div><!-- /.navbar-collapse -->
          </nav><!-- /navbar -->
  </body>
</html>
