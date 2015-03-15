<?php
	require("./database/connDB.inc.php");
		
	$user=$_SESSION['username'];
	$sql="select * from shop_info where username = '$user' ";
	$array=$operatedb->Execsql($sql,$conn);
        
    if($array){
        foreach($array as $item){
			echo '<li>';
			echo '<div class="fix_style">';
			echo '<h4 class="todo-name">';
			echo '<a href="./module_blog_blog.php?filename='.$item["filename"].'">';
			echo $item["filename"];
			echo '</a>';
			echo '</h4>';
			echo '</div>'
			echo '</li>';
		}
    }else{
        echo "暂时还没有文章...";
    }
	
?>