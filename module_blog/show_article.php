<?php
	header("Content-Type:text/html;charset=GB2312");
	//session_start();
	require("../database/connDB.inc.php");
	
	
	if(isset($_SESSION['id'])){
		
		$user=$_SESSION['username'];
		$sql="SELECT * FROM USER_ARTICLE WHERE username = '$user' ";
		$array=$operatedb->Execsql($sql,$conn);
		
		foreach($array as $item){
				
			echo "<li><a href='../module_blog/blog.php?filename=".$item['filename']."'>".$item['filename']."</a></li>";
				
		} 	
	}else{
		echo "���ｫ�������bolg�������ھ���˽�˵�...";	
	}	
	
?>