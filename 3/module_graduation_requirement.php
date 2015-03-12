<?php 
	session_start();
	header("Content-Type:text/html;charset=utf-8;");
	echo "<div style='background:lightgreen;font-size:2rem;margin-top:15%;padding:50px;text-align:center;'>功能正在开发中...</div>";
?>
<!DOCTYPE html>
<html>
	<head>
        <link href="./css/module_graduation_css/module_graduation_style.css" rel="stylesheet">
    </head>
    <body>
    	<div id="graduation_login">
            <?php require("./check_login.php"); ?>
        </div>
    </body>
</html>
