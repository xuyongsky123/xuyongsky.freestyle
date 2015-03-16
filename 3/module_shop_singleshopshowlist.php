<?php
	$user=$_SESSION['username'];
	$sql="select distinct goods_class from shop_single_detail where shop_name='".$_GET['shop_name']."' and shop_keeper='".$_GET['shop_keeper']."'";
	$array=$operatedb->Execsql($sql,$conn);
        
    if($array){
        foreach($array as $item){
			echo '<li>';
			echo '<div class="fix_style">';
            echo '<h4 class="todo-name">';
			echo '<a href="./module_shop_singleshopgoods.php?goods_class='.$item["goods_class"].'">';
			echo $item["goods_class"];
			echo '</a>';
			echo '</h4>';
			echo '</div>';
			echo '</li>';
		}
    }else{
        echo "暂时还没有品牌分类...";
    }
	
?>