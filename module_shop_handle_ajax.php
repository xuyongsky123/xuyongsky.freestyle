<?php
    require("./database/connDB.inc.php");
	if($_REQUEST['action']=="addToCart"){
		$sql_search="insert into goods_cart (goods_id,user_id) values (".$_REQUEST['goods_id'].",".$_REQUEST['user_id'].")";
        $array_search=$operatedb->Execsql($sql_search,$conn);
    
        if($array_search){
            return true;
        }else{
            return false;
        }
    }else($_REQUEST['action']=="deleteFromCart"){
    	$sql_search="delete from goods_cart where user_id=".$_REQUEST['user_id']." and goods_id=".$_REQUEST['goods_id'];
        $array_search=$operatedb->Execsql($sql_search,$conn);
    
        if($array_search){
            return true;
        }else{
            return false;
        }
    }

    
?>