<?php
  session_start();
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
<header style="height:100px;font-size:5rem;min-width:970px;">
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
              <input class="todo-search-field" type="search" value="" readonly="readonly" placeholder="店铺类型" />
            </div>
            <ul>
                <?php include("./module_shop_showshoptypelist.php"); ?>
            </ul>
          </div><!-- /.todo -->
        </div><!-- /.col-xs-3 -->
          
        <div class="col-xs-9 xuyong_fixrow">
            <div class="content_container">
            	
                	<div class="swatches-col">
                        <?php 
                            if(isset($_GET['shop_type'])){
                                
                                $file_search=$_GET['shop_type'];
                                $sql_search="select * from shop_info where shop_type = '$file_search'";
                                $array_search=$operatedb->Execsql($sql_search,$conn);
                                
                                if($array_search){
                                    foreach($array_search as $item_search){
                                        echo '<div class="pallete-item">';
                                        echo '<dl class="palette '.$item_search["shop_style_top"].'">';
                                        echo '<dt>';
                                        echo '<a href="./module_shop_singleshop.php?shop_name='.$item_search["shop_name"].'">';
                                        echo $item_search["shop_name"];
                                        echo '</a>';
                                        echo '</dt>';
                                        echo '<dd>';
                                        echo $item_search["shop_keeper"];
                                        echo '</dd>';
                                        echo '</dl>';
                                        echo '<dl class="palette '.$item_search["shop_style_bottom"].'">';
                                        echo '<dt>';
                                        //echo '<a>';
                                        //echo $item_search["shop_name"];
                                        //echo '</a>';
                                        echo '</dt>';
                                        echo '<dd>';
                                        echo $item_search["shop_keeper"];
                                        echo '</dd>';
                                        echo '</dl>';
                                        echo '</div>';
                                    }
                                }else{
                                    echo '<div>';
                                    echo "对不起，您所选择的商店种类暂时没有，请选择其他种类商店...";	
                                    echo '</div>';
                                }
                                
                            }else{
                                echo '<div>';
                                echo "您未选择任何商店种类，请从左边列表选择...";
                                echo '</div>';
                            }
                        ?>
                    </div> <!-- /swatches items -->
                
            </div>
        </div> <!-- /.col-xs-9 -->
      </div>
      
      <?php include("./module_shop_templetfooter.php"); ?>
      
  </body>
</html>
