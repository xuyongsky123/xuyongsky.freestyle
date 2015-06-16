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
                    $sql_search="select * from goods_cart as a inner join shop_single_detail as b on a.goods_id=b.id where user_id = '$user_id'";
                    $array_search=$operatedb->Execsql($sql_search,$conn);

                    if($array_search){
                        foreach($array_search as $item_search){
                            echo '<div class="single-item-goods">';
                            echo '<div class="col-xs-1"></div>';
                            echo '<div class="col-xs-9"><a href="module_shop_goodsdetail.php?id='.$item_search["goods_id"].'">';
                            echo '<div class="col-xs-6 cart-img"><img src="'.$item_search["goods_image_url"].'"></div>';
                            echo '<div class="col-xs-3 common-line-height">'.$item_search["goods_name"].'</div>';
                            echo '<div class="col-xs-3 common-line-height">'.$item_search["goods_price"].'</div>';    
                            echo '</a></div>';
                            echo '<div class="col-xs-2 common-line-height">删除</div>';
                            echo '<div class="col-xs-12" style="height:20px;"></div>';
                            echo '</div>';
                        }
                    }else{
                        echo '<div>';
                        echo "对不起，您购物车暂时没有商品，请去选购...";	
                        echo '</div>';
                    }
          ?>
      </div>
      
      <?php include("./module_shop_templetfooter.php"); ?>
      
  </body>
</html>
