<?php
	require("./database/connDB.inc.php");
		
	$user=$_SESSION['username'];
	$sql="select distinct shop_type from shop_info";
	$array=$operatedb->Execsql($sql,$conn);
        
    if($array){
        foreach($array as $item){
			echo '<li>';
			echo '<div class="fix_style">';
            echo '<h4 class="todo-name" style="color:#fff;">';
			echo '<a href="./module_blog_blog.php?filename='.$item["shop_type"].'">';
			echo $item["shop_type"];
			echo '</a>';
			echo '</h4>';
			echo '</div>';
			echo '</li>';
		}
    }else{
        echo "暂时还没有文章...";
    }
	
?>