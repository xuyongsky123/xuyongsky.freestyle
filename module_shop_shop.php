<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head> 
    <?php include('./frame_bootstrap_templethead.php'); ?>
    <link href="./css/module_shop_css/module_shop_style.css" rel="stylesheet" />
	<title>平安直通咨询</title>
  </head>
  <body>
      <?php include("./module_shop_templetheader.php"); ?>
      
      <div class="row demo-samples">
        <div class="col-xs-3">
          <div class="todo">
            <div class="todo-search">
              <input class="todo-search-field" type="search" value="" readonly="readonly" placeholder="店铺类型" />
            </div>
            <ul>
                <?php include("./module_shop_showshoptypelist.php"); ?>
            </ul>
          </div><!-- /.todo -->
        </div><!-- /.col-xs-3 -->
          
        <div class="col-xs-9 xuyong_fixrow">
            <div class="content_container">
            	
                	<div class="swatches-col">
                        <?php 
                            if(isset($_GET['shop_type'])){
                                
                                $file_search=$_GET['shop_type'];
                                $sql_search="select * from shop_info where shop_type = '$file_search'";
                                $array_search=$operatedb->Execsql($sql_search,$conn);
                                
                                if($array_search){
                                    foreach($array_search as $item_search){
                                        echo '<div class="pallete-item">';
                                        echo '<dl class="palette '.$item_search["shop_style_top"].'">';
                                        echo '<dt>';
                                        echo '<a href="./module_shop_singleshop.php?shop_name='.$item_search["shop_name"].'&shop_keeper='.$item_search["shop_keeper"].'">';
                                        echo $item_search["shop_name"];
                                        echo '</a>';
                                        echo '</dt>';
                                        echo '<dd>';
                                        echo $item_search["shop_keeper"];
                                        echo '</dd>';
                                        echo '</dl>';
                                        echo '<dl class="palette '.$item_search["shop_style_bottom"].'">';
                                        echo '<dt>';
                                        //echo '<a>';
                                        //echo $item_search["shop_name"];
                                        //echo '</a>';
                                        echo '</dt>';
                                        echo '<dd>';
                                        echo $item_search["shop_keeper"];
                                        echo '</dd>';
                                        echo '</dl>';
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
      </div>
      
      <?php include("./module_shop_templetfooter.php"); ?>
      
  </body>
</html>
