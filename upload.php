<?php 
require("./database/connDB.inc.php");
	header("Content-Type:text/html;charset=utf-8");
            $filename = $_FILES['upload_file'];
            $string=implode(glue,$filename);
            $data   =   addslashes($string);
			
			$sql="insert into shop_single_detail (shop_name,shop_keeper,goods_name,goods_price,goods_detail,goods_image,goods_style_top,goods_style_bottom) values ('品牌手机小店','闭上眼 会有好梦吗','iPad','待商定价','iPad','$data','palette-amethyst','palette-wisteria')";
			$result=$operatedb->Execsql($sql,$conn);
			
			if($result){
				echo "<script language='javascript'>alert('保存编辑到数据库成功');history.back();</script>";
			}else{
				echo "<script language='javascript'>alert('保存编辑到数据库失败');history.back();</script>";	
			}
	
?>