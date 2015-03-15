<?php
  session_start();
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
                <div class="col-xs-1">
                    
                </div><!-- /.col-xs-1-->
                  
                <div class="col-xs-10 xuyong_fixrow">
                    
                </div> <!-- /.col-xs-9 -->
          		<div class="col-xs-1">
                    
                </div><!-- /.col-xs-1-->
      </div>
      
      <?php include("./module_shop_templetfooter.php"); ?>
      
  </body>
</html>
