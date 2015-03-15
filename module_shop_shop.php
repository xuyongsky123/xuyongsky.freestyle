<?php
  session_start();
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
      <div id="shop_container">
          <div id="link_help">
              <span><a href="#">邀请好友</a></span>
              <span>|</span>
              <span><a href="#">加入收藏</a></span>
              <span>|</span>
              <span><a href="#">关注“自由风”</a></span>
          </div>
            <div id="shop_header">
                <div id="login">
                    <?php require("./check_login.php"); ?>
                    <span>|</span>
              		<span><a href="#">QQ登录</a></span>
              		<span>|</span>
              		<span><a href="#">微博登陆</a></span>
                </div>
            </div>
          <div class="clearfix"></div>
      </div>
    <header style="height:100px;font-size:5rem;">
        <div id="logo" style="text-align:left;padding:7px 0 7px 7px;display:inline-block;">
        	College Mall
        </div>
        
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
      
      <div class="row demo-samples">
        <div class="col-xs-3">
          <div class="todo">
            <div class="todo-search">
              <input class="todo-search-field" type="search" value="" placeholder="店铺类型" />
            </div>
            <ul>
                <?php include("./module_shop_showshoptype.php"); ?>
            </ul>
          </div><!-- /.todo -->
        </div><!-- /.col-xs-3 -->
          
        <div class="col-xs-9 xuyong_fixrow">
            <div class="content_container">
            	
                	<div class="swatches-col">
                          
                    </div> <!-- /swatches items -->
                
            </div>
        </div> <!-- /.col-xs-9 -->
      </div>
      
      
      <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-xs-7">
            <h3 class="footer-title">Free Style</h3>
            <p>Do you know this site about Free Style? Want to get more info or give more suggestion like this?<br/>
              Bring into action!!!<br/>
              Go to: <a href="http://xuyongsky.sinaapp.com" target="_blank">Free Style</a>
            </p>
            <p class="pvl">
                <h5>Open Online Store:</h5>
              	<h6>We want you JOIN US:</h6>
                <a target="blank" href="http://wpa.qq.com/msgrd?v=3&uin=1845082157&site=qq&menu=yes"><img border="0" src=http://wpa.qq.com/pa?p=1:1845082157:51 alt="点击这里给我发消息"></a>
			  	<a target="blank" href="http://wpa.qq.com/msgrd?v=3&uin=821594487&site=qq&menu=yes"><img border="0" src=http://wpa.qq.com/pa?p=1:821594487:51 alt="点击这里给我发消息"></a>
            </p>
          </div> <!-- /col-xs-7 -->

          <div class="col-xs-5">
            <div class="footer-banner">
              <h3 class="footer-title">College Mall</h3>
              <ul>
                <li>Item of Free Style</li>
                <li>A Lot of Modules from Free Style</li>
                <li>More Sections</li>
                <li>Pro Module Swatches</li>
                <li>Free Style Based Your JOIN!</li>
              </ul>
              Go to: <a href="http://xuyongsky.sinaapp.com" target="_blank">Free Style</a>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
