<?php
	require("./database/connDB.inc.php");
	
	
	if(isset($_SESSION['id'])){
		
		$user=$_SESSION['username'];
		$sql="select * from user_article where username = '$user' ";
		$array=$operatedb->Execsql($sql,$conn);
        
        if($array){
        	foreach($array as $item){
				echo "<li><a href='./module_blog_blog.php?filename=".$item['filename']."'>".$item['filename']."</a></li>";
			}
        }else{
        	echo "您暂时还没有写过文章...";
        }
		
		 	
	}else{
		echo "这里将输出公共bolg，不属于具体私人的...";	
	}	
	
?>