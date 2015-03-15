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

                                    if(isset($_GET['shop_name'])){
                                        
                                        $shop_search=$_GET['shop_name'];
                                        $shop_keeper=$_GET['shop_keeper'];
                                        $sql_search="select * from shop_single_detail where shop_name = '$shop_search' and shop_keeper='$shop_keeper'";
                                        $array_search=$operatedb->Execsql($sql_search,$conn);
                                        
                                        if($array_search){
                                            foreach($array_search as $item_search){
                                                echo '<div class="pallete-item xuyong_fixitem">';
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
                                            echo "对不起，您所选择的商店暂时没有商品，请选择其他商店...";	
                                            echo '</div>';
                                        }
                                        
                                    }else{
                                        echo '<div>';
                                        echo "您未选择任何商店，请从首页选择商店...";
                                        echo '</div>';
                                    }
                                ?>
                                
                                
                                
                          <div class="pallete-item xuyong_fixitem">
                              <dl class="palette palette-turquoise">
                                <dt>#1abc9c</dt>
                                <dd>Turquoise</dd>
                              </dl>
                              <dl class="palette palette-green-sea">
                                <dt>#16a085</dt>
                                <dd>Green sea</dd>
                                  <img src="./images/1.jpg"/>
                              </dl>
                          </div>
                          <div class="pallete-item xuyong_fixitem">
                              <dl class="palette palette-emerald">
                                  <dt>#2ecc71</dt>
                                  <dd>Emerald</dd>
                                </dl>
                                <dl class="palette palette-nephritis">
                                  <dt>#27ae60</dt>
                                  <dd>Nephritis</dd>
                                </dl>
                          </div>
                          <div class="pallete-item xuyong_fixitem">
                              <dl class="palette palette-peter-river">
                                  <dt>#3498db</dt>
                                  <dd>Peter river</dd>
                                </dl>
                                <dl class="palette palette-belize-hole">
                                  <dt>#2980b9</dt>
                                  <dd>Belize hole</dd>
                                </dl>
                          </div>
                          <div class="pallete-item xuyong_fixitem">
                              <dl class="palette palette-amethyst">
                                  <dt>#9b59b6</dt>
                                  <dd>Amethyst</dd>
                                </dl>
                                <dl class="palette palette-wisteria">
                                  <dt>#8e44ad</dt>
                                  <dd>Wisteria</dd>
                                </dl>
                          </div>
                          <div class="pallete-item xuyong_fixitem">
                              <dl class="palette palette-wet-asphalt">
                                  <dt>#34495e</dt>
                                  <dd>Wet asphalt</dd>
                                </dl>
                                <dl class="palette palette-midnight-blue">
                                  <dt>#2c3e50</dt>
                                  <dd>Midnight blue</dd>
                                </dl>
                          </div>
                          <div class="pallete-item xuyong_fixitem">
                              <dl class="palette palette-sun-flower">
                                  <dt>#f1c40f</dt>
                                  <dd>Sun flower</dd>
                                </dl>
                                <dl class="palette palette-orange">
                                  <dt>#f39c12</dt>
                                  <dd>Orange</dd>
                                </dl>
                          </div>
                          <div class="pallete-item xuyong_fixitem">
                              <dl class="palette palette-carrot">
                                  <dt>#e67e22</dt>
                                  <dd>Carrot</dd>
                                </dl>
                                <dl class="palette palette-pumpkin">
                                  <dt>#d35400</dt>
                                  <dd>Pumpkin</dd>
                                </dl>
                          </div>
                          <div class="pallete-item xuyong_fixitem">
                              <dl class="palette palette-alizarin">
                                  <dt>#e74c3c</dt>
                                  <dd>Alizarin</dd>
                                </dl>
                                <dl class="palette palette-pomegranate">
                                  <dt>#c0392b</dt>
                                  <dd>Pomegranate</dd>
                                </dl>
                          </div>
                          <div class="pallete-item xuyong_fixitem">
                              <dl class="palette palette-clouds">
                                  <dt>#ecf0f1</dt>
                                  <dd>Clouds</dd>
                                </dl>
                                <dl class="palette palette-silver">
                                  <dt>#bdc3c7</dt>
                                  <dd>Silver</dd>
                                </dl>
                          </div>
                          <div class="pallete-item xuyong_fixitem">
                              <dl class="palette palette-concrete">
                                  <dt>#95a5a6</dt>
                                  <dd>Concrete</dd>
                                </dl>
                                <dl class="palette palette-asbestos">
                                  <dt>#7f8c8d</dt>
                                  <dd>Asbestos</dd>
                                </dl>
                          </div>
                                
                                
                                
                                
                            </div> <!-- /swatches items -->
                        
                    </div>
                </div> <!-- /.col-xs-9 -->
          
          		<div class="col-xs-1">
                    
                </div><!-- /.col-xs-1-->
      </div>
      
      <?php include("./module_shop_templetfooter.php"); ?>
      
  </body>
</html>
