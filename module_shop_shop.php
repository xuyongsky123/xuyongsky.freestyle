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
              <li>
                <div class="todo-icon fui-list"></div>
                <div class="todo-content">
                  <h4 class="todo-name">
                    电子设备类
                  </h4>
                </div>
              </li>
              <li class="todo-done">
                <div class="todo-icon fui-list"></div>
                <div class="todo-content">
                  <h4 class="todo-name">
                    服装类
                  </h4>
                </div>
              </li>
              <li>
                <div class="todo-icon fui-list"></div>
                <div class="todo-content">
                  <h4 class="todo-name">
                    食品类
                  </h4>
                </div>
              </li>
              <li>
                <div class="todo-icon fui-list"></div>
                <div class="todo-content">
                  <h4 class="todo-name">
                    ...
                  </h4>
                </div>
              </li>
            </ul>
          </div><!-- /.todo -->
        </div><!-- /.col-xs-3 -->
          
        <div class="col-xs-9">
            <div class="content_container">
            	
                	<div class="swatches-col">
                          <div class="pallete-item">
                              <dl class="palette palette-turquoise">
                                <dt>#1abc9c</dt>
                                <dd>Turquoise</dd>
                              </dl>
                              <dl class="palette palette-green-sea">
                                <dt>#16a085</dt>
                                <dd>Green sea</dd>
                              </dl>
                          </div>
                          <div class="pallete-item">
                              <dl class="palette palette-emerald">
                                  <dt>#2ecc71</dt>
                                  <dd>Emerald</dd>
                                </dl>
                                <dl class="palette palette-nephritis">
                                  <dt>#27ae60</dt>
                                  <dd>Nephritis</dd>
                                </dl>
                          </div>
                          <div class="pallete-item">
                              <dl class="palette palette-peter-river">
                                  <dt>#3498db</dt>
                                  <dd>Peter river</dd>
                                </dl>
                                <dl class="palette palette-belize-hole">
                                  <dt>#2980b9</dt>
                                  <dd>Belize hole</dd>
                                </dl>
                          </div>
                          <div class="pallete-item">
                              <dl class="palette palette-amethyst">
                                  <dt>#9b59b6</dt>
                                  <dd>Amethyst</dd>
                                </dl>
                                <dl class="palette palette-wisteria">
                                  <dt>#8e44ad</dt>
                                  <dd>Wisteria</dd>
                                </dl>
                          </div>
                          <div class="pallete-item">
                              <dl class="palette palette-wet-asphalt">
                                  <dt>#34495e</dt>
                                  <dd>Wet asphalt</dd>
                                </dl>
                                <dl class="palette palette-midnight-blue">
                                  <dt>#2c3e50</dt>
                                  <dd>Midnight blue</dd>
                                </dl>
                          </div>
                          <div class="pallete-item">
                              <dl class="palette palette-sun-flower">
                                  <dt>#f1c40f</dt>
                                  <dd>Sun flower</dd>
                                </dl>
                                <dl class="palette palette-orange">
                                  <dt>#f39c12</dt>
                                  <dd>Orange</dd>
                                </dl>
                          </div>
                          <div class="pallete-item">
                              <dl class="palette palette-carrot">
                                  <dt>#e67e22</dt>
                                  <dd>Carrot</dd>
                                </dl>
                                <dl class="palette palette-pumpkin">
                                  <dt>#d35400</dt>
                                  <dd>Pumpkin</dd>
                                </dl>
                          </div>
                          <div class="pallete-item">
                              <dl class="palette palette-alizarin">
                                  <dt>#e74c3c</dt>
                                  <dd>Alizarin</dd>
                                </dl>
                                <dl class="palette palette-pomegranate">
                                  <dt>#c0392b</dt>
                                  <dd>Pomegranate</dd>
                                </dl>
                          </div>
                          <div class="pallete-item">
                              <dl class="palette palette-clouds">
                                  <dt>#ecf0f1</dt>
                                  <dd>Clouds</dd>
                                </dl>
                                <dl class="palette palette-silver">
                                  <dt>#bdc3c7</dt>
                                  <dd>Silver</dd>
                                </dl>
                          </div>
                          <div class="pallete-item">
                              <dl class="palette palette-concrete">
                                  <dt>#95a5a6</dt>
                                  <dd>Concrete</dd>
                                </dl>
                                <dl class="palette palette-asbestos">
                                  <dt>#7f8c8d</dt>
                                  <dd>Asbestos</dd>
                                </dl>
                          </div>
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
              <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://designmodo.com/flat-free/" data-text="Flat UI Free - PSD&amp;amp;HTML User Interface Kit" data-via="designmodo">Tweet</a>
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
              <iframe src="http://ghbtns.com/github-btn.html?user=designmodo&repo=Flat-UI&type=watch&count=true" height="20" width="107" frameborder="0" scrolling="0" style="width:105px; height: 20px;" allowTransparency="true"></iframe>
              <iframe src="http://ghbtns.com/github-btn.html?user=designmodo&repo=Flat-UI&type=fork&count=true" height="20" width="107" frameborder="0" scrolling="0" style="width:105px; height: 20px;" allowTransparency="true"></iframe>
              <iframe src="http://ghbtns.com/github-btn.html?user=designmodo&type=follow&count=true" height="20" width="195" frameborder="0" scrolling="0" style="width:195px; height: 20px;" allowTransparency="true"></iframe>
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
