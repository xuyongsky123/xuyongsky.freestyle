<?php
  session_start();
  require("./database/connDB.inc.php");
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head> 
    <?php include('./frame_bootstrap_templethead.php'); ?>
    <link href="./css/module_shop_css/module_shop_style.css" rel="stylesheet" />
	<title>商品详情页</title>
      <script>
          function addToCart(id,user_id){
              if(user_id==null || user_id==0){
              	alert("请先登录！");
                window.location.href="./login.html";
              }else{
              	$.post(
                      "./module_shop_handle_ajax.php",
                    {goods_id:id,user_id:user_id,action:'addToCart'},
                      function(data){
                          alert("加入购物车成功！");
                      }
                  );
              }
              
          }
      </script>
  </head>
  <body>
      <?php include("./module_shop_templetheader.php"); ?>
      
      <div class="row demo-samples">
          <?php 
                
                if(isset($_GET['id'])){
                    if(isset($_SESSION['id'])){
                        $user_id=$_SESSION['id'];
                    }else{
                        $user_id=0;
                    }
                    $shop_search=$_GET['id'];
                    $sql_search="select * from shop_single_detail where id = '$shop_search'";
                    $array_search=$operatedb->Execsql($sql_search,$conn);
                    if($array_search){
                        foreach($array_search as $item_search){
                            echo '<div class="col-xs-1"></div>';
                            echo '<div class="col-xs-5">';
                            echo '<img class="detail-style" src="'.$item_search["goods_detail_image_url"].'">';
                            echo '</div>';
                            echo '<div class="col-xs-5">';
                            echo '<div class="detail-name-xy">'.$item_search["goods_name"].'</div>';
                            echo '<div class="detail-price-xy">'.$item_search["goods_price"].'</div>';
                            echo '<div class="detail-detail-xy">'.$item_search["goods_detail"].'</div>';
                            echo '<div class="col-xs-1"></div>';
                            echo '<a onclick="addToCart('.$item_search["id"].','.$user_id .')" class="col-xs-4 detail-cart">加入购物车</a>';
                            echo '<div class="col-xs-2"></div>';
                            echo '<a class="col-xs-4 detail-buy">立即购买</a>';
                            echo '<div class="col-xs-1"></div>';
                            echo '</div>';
                            echo '<div class="col-xs-1"></div>';
                        }
                    }else{
                        echo '<div>';
                        echo "对不起，您所选择的产品暂时没有，请选择其他产品...";	
                        echo '</div>';
                    }
                    
                }else{
                    echo '<div>';
                    echo "您未选择任何产品，请从前页选择产品...";
                    echo '</div>';
                }
          ?>
      </div>
      
      <?php include("./module_shop_templetfooter.php"); ?>
      
  </body>
</html>
