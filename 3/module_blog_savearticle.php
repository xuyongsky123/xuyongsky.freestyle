<?php 
	session_start();
	header("Content-Type:text/html;charset=utf-8");

	if(isset($_SESSION['id'])){
		$user=$_SESSION['username'];
	
		if($user==null||$user==''){
			echo '<script language="javascript">alert("您尚未登录！");history.back();</script>';
		}else{
			$blog_title=$_POST['blog_title'];
			$data=$_POST['content'];
			$article=addslashes($data);
			
			require("./database/connDB.inc.php");
			
            $sql="insert into user_article(description,article,filename,filesize,filetype,username) values('test','$data','$blog_title','test','test','$user')";
            //$sql="insert into public_article(public_filename,public_article,public_author) values('$blog_title','$data','$user')";
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