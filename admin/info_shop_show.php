<?php  
	session_start();
	header("Content-Type=text/html;charset=utf-8");
    if(!isset($_SESSION['username_adminuserfixpassword__'])){
        echo "<script language='javascript'>alert('Please login...');window.location.href='./index.php';</script>";
    }else{
?>
<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        <!--bootstrap_begin-->
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1" />
            <!-- Bootstrap -->
            <link href="../css/bootstrap_css/bootstrap.min.css" rel="stylesheet" />
            
            
            <!-- Loading Flat UI -->
            <link href="../css/bootstrap_css/flat_ui_css/flat-ui.css" rel="stylesheet" />
        <!--bootstrap_end-->
        
        	<link href="./css/main_style.css" rel="stylesheet" />
        
        
        <title>管理商店操作界面</title>
        <style type="text/css">
        </style>	
    </head>
    <body>
        <div class="col-xs-12 col-xs-xuyong">
            <nav class="navbar navbar-inverse navbar-embossed" role="navigation">
                <div class="navbar-header navbar_xuyong">
                  <a class="navbar-brand" href="#">Free Style</a>
                </div>
                <div class="collapse navbar-collapse nav_xuyong" id="navbar-collapse-01">
                  <a id="back" href="./main.php">  
                    <button id="menu-button" type="button" class="btn btn-default dropdown-toggle menu-button">
                          返回
                      </button>
                  </a>
                </div><!-- /.navbar-collapse -->
            </nav><!-- /navbar -->
        </div>
        <div id="content_show" style="width:100%;height:450px;background;color:#fff;">
        	<?php  
        		require("./database/connDB.inc.php");
        		$identify=$_POST['shop_identify'];
        		if(!isset($identify))
                {
                    echo "<script type='text/javascript'>alert('数据操作失败，请重新操作...');window.location.href='./main.php';</script>";
                }else if($identify=='shop_select_item'){
                	$shop_name=$_POST['shop_name'];
                    $shop_keeper=$_POST['shop_keeper'];
                    $shop_type=$_POST['shop_type'];
                    $submit_value=$_POST['submit'];
                    
                    if($submit_value=="商店查询"){
                    	$sql="select * from shop_info where shop_name = '$shop_name' or shop_keeper= '$shop_keeper' or shop_type= '$shop_type' ";
                        $array=$operatedb->Execsql($sql,$conn);
                        
                     
                        if($array){
                            foreach($array as $item){
                                echo "<table>";
                                echo "<tr>";
                                
                                echo "</tr>";
                                echo "</table>";
                                
                                echo "<div>";
                                echo "<span>".$item['shop_name']."</span>";
                                echo "<span>".$item['shop_keeper']."</span>";
                                echo "<span>".$item['shop_type']."</span>";
                                echo "<span>".$item['shop_style_top']."</span>";
                                echo "<span>".$item['shop_style_bottom']."</span>";
                                echo "</div>";
                            }
                        }else{
                                echo "没有查到相关商店信息...";
                        }
                    }else{
                    	$sql="select * from shop_info";
                        $array=$operatedb->Execsql($sql,$conn);
                        
                        echo "<table>";
                        echo "<tr>";
                        echo "<th>";
                        echo "商店名称";
                        echo "</th>";
                        echo "<th>";
                        echo "店主名称";
                        echo "</th>";
                        echo "<th>";
                        echo "商店类型";
                        echo "</th>";
                        echo "<th>";
                        echo "展示背景上半部分颜色";
                        echo "</th>";
                        echo "<th>";
                        echo "展示背景下半部分颜色"
                        echo "</th>";
                        if($array){
                            foreach($array as $item){
                                echo "<div>";
                                echo "<span>".$item['shop_name']."</span>";
                                echo "<span>".$item['shop_keeper']."</span>";
                                echo "<span>".$item['shop_type']."</span>";
                                echo "<span>".$item['shop_style_top']."</span>";
                                echo "<span>".$item['shop_style_bottom']."</span>";
                                echo "</div>";
                            }
                        }else{
                                echo "没有查到相关商店信息...";
                        }
                    }
                    
                    
                }
            ?>
        </div>
    </body>
</html>
<?php
        
    }
?>
