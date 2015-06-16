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
<header style="height:100px;font-size:5rem;min-width:700px;">
    <div id="logo" style="text-align:left;padding:7px 0 7px 7px;display:inline-block;float:left;">
        	平安直通资讯有限公司
        </div>
    <?php if(isset($_GET["shop_name"])){ ?>
    <div id="shop_detail" style="display:none;text-align:left;padding:7px 0 7px 7px;display:inline-block;float:right;font-size:16px;margin-top:55px;">
            <span>店名：<?php echo $_GET["shop_name"]; ?></span>
            <span>店主：<?php echo $_GET["shop_keeper"]; ?></span>
        	<span style="display:none;">店家联系方式</span>
        	<span style="display:none;">......</span>
        </div>
    <?php } ?> 
    <div>购物车</div>
    
    
    </header>
<div id="clear" style="clear:both;"></div>
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