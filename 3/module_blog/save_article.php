<?php 
	session_start();
	
	if(isset($_SESSION['id'])){
		$user=$_SESSION['username'];
	
		if($user==null||$user==''){
			echo '<script language="javascript">alert("您尚未登录！");history.back();</script>';
		}else{
			$blog_title=$_POST['blog_title'];
			$data=$_POST['content'];
			$article=addslashes($data);
			
			require("../database/connDB.inc.php");
			
			$sql="INSERT INTO USER_ARTICLE(description,article,filename,filesize,filetype,username) VALUES('test','$data','$blog_title','test','test','$user')";
			$result=$operatedb->Execsql($sql,$conn);
			
			if($result){
				echo "<script language='javascript'>alert('保存编辑到数据库成功');history.back();</script>";
			}else{
				echo "<script language='javascript'>alert('保存编辑到数据库失败');history.back();</script>";	
			}
		}		
	}else{
		echo '<script language="javascript">alert("您尚未登录！请先登录...");history.back();</script>';
	}
	
?>