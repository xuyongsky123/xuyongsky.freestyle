<?php
	echo $_REQUEST['goods_id'];
    $shop_search=$_GET['id'];
    $sql_search="insert into goods_cart (id,user_id) values (".$_REQUEST['goods_id'].",".$_REQUEST['user_id'].")";
    $array_search=$operatedb->Execsql($sql_search,$conn);
	return $_REQUEST['goods_id'];
?>