<?php
  session_start();
  require("./database/connDB.inc.php");
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head> 
    <?php include('./frame_bootstrap_templethead.php'); ?>
    <link href="./css/module_shop_css/module_shop_style.css" rel="stylesheet" />
	<title>购物车</title>
  </head>
  <body>
      <?php include("./module_shop_templetheader.php"); ?>
      
      <div class="row demo-samples">
          <?php 
                    $user_id=$_SESSION['id'];
                    $sql_search="select * from goods_cart where user_id = '$user_id'";
                    $array_search=$operatedb->Execsql($sql_search,$conn);
                    if($array_search){
                        foreach($array_search as $item_search){
                            echo $item_search['goods_id'];
                        }
                    }else{
                        echo '<div>';
                        echo "对不起，您所选择的产品暂时没有，请选择其他产品...";	
                        echo '</div>';
                    }
          ?>
      </div>
      
      <?php include("./module_shop_templetfooter.php"); ?>
      
  </body>
</html>
