<?php   
header("Content-Type:text/html;charset=utf-8");
if(!isset($_POST["shop_naem"]))
    echo $_POST["shop_name"];
?>  
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