<?php    
    $arr = array(    
        'name' => '陈毅鑫',    
        'nick' => '深空',    
        'contact' => array(    
            'email' => 'shenkong at qq dot com',    
            'website' => 'http://www.chinaz.com',    
        )    
    );    
    $json_string = json_encode($arr);    
    echo "getProfile($json_string)";    
?>  




<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <title>商店信息管理</title>
        <script src="../js/jquery-1.9.1..min.js"></script>
    </head>
    <body>
        <div id="nick"></div>
        <script type="text/javascript">   
            function getProfile(str) {    
                var arr = str;    
                document.getElementById('nick').innerHTML = arr.nick;    
            }    
        </script>     
        <script type="text/javascript" src="./info_shop_show.php"></script>   
    </body>    
<html>