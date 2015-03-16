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
                <div class="col-xs-1">
                </div><!-- /.col-xs-1-->
                  
                <div class="col-xs-10 xuyong_fixrow">
                    <div class="content_container">
            					
                            <div class="swatches-col">
                                <?php 
									if(isset($_SESSION['shop_name'])||isset($_SESSION['shop_keeper'])){
                                    	if(isset($_GET['goods_class'])){
                                            $goods_class=$_GET['goods_class'];
                                            $shop_search=$_SESSION['shop_name'];
                                            $shop_keeper=$_SESSION['shop_keeper'];
                                            $sql_search="select * from shop_single_detail where shop_name = '$shop_search' and shop_keeper='$shop_keeper'";
                                            $array_search=$operatedb->Execsql($sql_search,$conn);
                                            
                                            if($array_search){
                                                foreach($array_search as $item_search){
                                                    echo '<div class="pallete-item xuyong_fixitem">';
                                                    echo '<dl class="palette '.$item_search["goods_style_top"].'">';
                                                    //echo $item_search["goods_image"];
                                                    echo '<img src="'.$item_search["goods_image_url"].'" />';
                                                    echo '</dl>';
                                                    echo '<dl class="palette '.$item_search["goods_style_bottom"].'">';
                                                    echo '<dt>';
                                                    echo $item_search["goods_name"];
                                                    echo '</dt>';
                                                    echo '<dd>';
                                                    echo $item_search["goods_price"];
                                                    echo '</dd>';
                                                    echo '</dl>';
                                                    echo '</div>';
                                                    
                                                }
                                            }else{
                                                echo '<div>';
                                                echo "对不起，您所选择的品牌暂时没有商品，请选择其他品牌...";	
                                                echo '</div>';
                                            }
                                            
                                        }else{
                                            echo '<div>';
                                            echo "您选择的品牌不存在，请从商店重新选择...";
                                            echo '</div>';
                                        }
                                    }else{
                                    	echo '<div>';
                                        echo "您未选择任何品牌，请从商店选择...";
                                        echo '</div>';
                                    }
                                    
                                ?>
                                
                                
                            </div> <!-- /swatches items -->
                        
                    </div>
                </div> <!-- /.col-xs-10 -->
          		<div class="col-xs-1">
                </div><!-- /.col-xs-1-->
          
      </div>
      
      <?php include("./module_shop_templetfooter.php"); ?>
      
  </body>
</html>
