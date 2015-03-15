<?php 
	session_start();
	header("Content-Type:text/html;charset=utf-8");
if(isset())
			$data=$_POST['upload_file'];
			$PSize = filesize($data); 
			$article = addslashes(fread(fopen($data, "r"), $PSize)); 
			require("./database/connDB.inc.php");
			
            $sql="insert into shop_single_detail(shop_name,shop_keeper,goods_name,goods_price,goods_detail,goods_image,goods_style_top,goods_style_bottom) values('品牌手机小店','闭上眼 会有好梦吗','iPad','待商定价','iPad','$article','palette-sun-flower','palette-orange')";
            //$sql="insert into public_article(public_filename,public_article,public_author) values('$blog_title','$data','$user')";
			$result=$operatedb->Execsql($sql,$conn);
			
			if($result){
				echo "<script language='javascript'>alert('保存编辑到数据库成功');history.back();</script>";
			}else{
				echo "<script language='javascript'>alert('保存编辑到数据库失败');history.back();</script>";	
			}
?>
