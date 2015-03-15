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
                    <div class="content_container">
            	
                            <div class="swatches-col">
                                <?php 
                                    if(isset($_GET['shop_name'])){
                                        
                                        $file_search=$_GET['shop_name'];
                                        $shop_keeper=$_GET['shop_keeper'];
                                        $sql_search="select * from shop_single_detail where shop_name = '$file_search' and shop_keeper='$shop_keeper'";
                                        $array_search=$operatedb->Execsql($sql_search,$conn);
                                        
                                        if($array_search){
                                            foreach($array_search as $item_search){
                                                echo '<div class="pallete-item">';
                                                echo '<dt>';
                                                //echo '<a href="./module_shop_singleshop.php?shop_name='.$item_search["goods_name"].'&shop_keeper='.$item_search["shop_keeper"].'">';
                                                echo $item_search["goods_name"];
                                                //echo '</a>';
                                                echo '</dt>';
                                                echo '<dd>';
                                                echo $item_search["goods_price"];
                                                echo '</dd>';
                                                echo '<dt>';
                                                //echo '<a>';
                                                //echo $item_search["shop_name"];
                                                //echo '</a>';
                                                echo '</dt>';
                                                echo '<dd>';
                                                echo $item_search["goods_detail"];
                                                echo '</dd>';
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
          
          		<div class="col-xs-1">
                    
                </div><!-- /.col-xs-1-->
      </div>
      
      <?php include("./module_shop_templetfooter.php"); ?>
      
  </body>
</html>
