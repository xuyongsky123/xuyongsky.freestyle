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
          <?php 

                if(isset($_GET['id'])){
                    
                    $shop_search=$_GET['id'];
                    $sql_search="select * from shop_single_detail where id = '$shop_search'";
                    $array_search=$operatedb->Execsql($sql_search,$conn);
                    if($array_search){
                        foreach($array_search as $item_search){
                            echo '<div class="col-xs-5">';
                            echo '<img class="detail-style" src="'.$item_search["goods_detail_image_url"].'">';
                            echo '</div>';
                            echo '<div class="col-xs-7">';
                            echo '<div>'.$item_search["goods_detail"].'</div>';
                            echo '</div>';
                        }
                    }else{
                        echo '<div>';
                        echo "对不起，您所选择的产品暂时没有，请选择其他产品...";	
                        echo '</div>';
                    }
                    
                }else{
                    echo '<div>';
                    echo "您未选择任何类型，请从首页选择类型...";
                    echo '</div>';
                }
          ?>
          <div class="col-xs-5"></div>
          <div class="col-xs-7"></div>
      </div>
      
      <?php include("./module_shop_templetfooter.php"); ?>
      
  </body>
</html>
