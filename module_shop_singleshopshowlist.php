<?php
	$user=$_SESSION['username'];
	$sql="select distinct goods_class from shop_single_detail";
	$array=$operatedb->Execsql($sql,$conn);
        
    if($array){
        foreach($array as $item){
			echo '<li>';
			echo '<div class="fix_style">';
            echo '<h4 class="todo-name">';
			echo '<a href="./module_shop_shop.php?shop_type='.$item["goods_class"].'">';
			echo $item["goods_class"];
			echo '</a>';
			echo '</h4>';
			echo '</div>';
			echo '</li>';
		}
    }else{
        echo "暂时还没有商品分类...";
    }
	
?>