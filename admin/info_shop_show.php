<?php   
header("Content-Type:text/html;charset=utf-8");
if(!isset($_POST["shop_naem"]))
    echo "没有数据";
    echo $_POST["shop_name"];
?>  