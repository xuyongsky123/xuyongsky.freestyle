<?php   
header("Content-Type:text/html;charset=utf-8");
if(!isset($_GET["shop_naem"]))
    echo "没有数据";
    echo $_GET["shop_name"];
?>  