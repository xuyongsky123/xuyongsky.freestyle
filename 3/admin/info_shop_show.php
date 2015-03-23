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
                if(!isset($_POST['submit'])){
                    echo "非法提交数据，请以正确方式提交...";
                }else{
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
                        
                        
                    }else if($identify=='shop_add_item'){
                        $shop_name=$_POST['shop_name'];
                        $shop_keeper=$_POST['shop_keeper'];
                        $shop_type=$_POST['shop_type'];
                        $shop_upcolor=$_POST['up_color'];
                        $sho_downcolor=$_POST['down_color'];
                        
                        
                            $sql="insert into shop_info (shop_name,shop_keeper,shop_type,shop_style_top,shop_style_bottom) values ('$shop_name','$shop_keeper','$shop_type','$shop_upcolor','$sho_downcolor') ";
                            $result=$operatedb->Execsql($sql,$conn);
                
                            if($result){
                                echo "<script language='javascript'>alert('添加商店成功');history.back();</script>";
                            }else{
                                echo "<script language='javascript'>alert('添加商店失败，请重新添加...');history.back();</script>";	
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
