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
        	echo "暂时还没有文章...";
        }
		
		 	
	}else{
		$public_sql="select * from public_article";
        $public_array=$operatedb->Execsql($public_sql,$conn);
        
        if($public_array){
            foreach($public_array as $sub_item){
            	echo "<li><a href='./module_blog_blog.php?public_filename=".$sub_item['public_filename']."'>".$sub_item['public_filename']."</a></li>"
            }
        }else{
        	echo "数据库暂时未存储blog文章，敬请期待..."
        }
	}	
	
?>