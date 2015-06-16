<?php
  session_start();
  require("./database/connDB.inc.php");
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head> 
    <?php include('./frame_bootstrap_templethead.php'); ?>
    <link href="./css/module_shop_css/module_shop_style.css" rel="stylesheet" />
	<title><?php echo $_GET["shop_name"]; ?></title>
  </head>
  <body>
      <?php include("./module_shop_templetheader.php"); ?>
      
      <div class="row demo-samples">
                <div class="col-xs-2">
                    <div class="todo">
                        <div class="todo-search">
                          <input class="todo-search-field" type="search" value="" readonly="readonly" placeholder="产品类型" />
                        </div>
                        <ul>
                            <?php include("./module_shop_singleshopshowlist.php"); ?>
                        </ul>
                      </div><!-- /.todo -->
                </div><!-- /.col-xs-2-->
                  
                <div class="col-xs-10 xuyong_fixrow">
                    <div class="content_container">
            	
                            <div class="swatches-col">
                                
                                
                                
                            </div> <!-- /swatches items -->
                        
                    </div>
                </div> <!-- /.col-xs-9 -->
          
      </div>
      
      <?php include("./module_shop_templetfooter.php"); ?>
      
  </body>
</html>
