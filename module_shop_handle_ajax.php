<?php
    require("./database/connDB.inc.php");

    $sql_search="insert into goods_cart (goods_id,user_id) values (".$_REQUEST['goods_id'].",".$_REQUEST['user_id'].")";
    $array_search=$operatedb->Execsql($sql_search,$conn);

    if($array_search){
        return true;
    }else{
        return false;
    }
?>