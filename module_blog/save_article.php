<?php 
	header("Content-Type:text/html;charset=utf-8");

	session_start();
	
	if(isset($_SESSION['id'])){
		$user=$_SESSION['username'];
	
		if($user==null||$user==''){
			echo '<script language="javascript">alert("����δ��¼��");history.back();</script>';
		}else{
			$blog_title=$_POST['blog_title'];
			$data=$_POST['content'];
			$article=addslashes($data);
			
			require("../database/connDB.inc.php");
			
			$sql="insert into user_article(description,article,filename,filesize,filetype,username) values('test','$data','$blog_title','test','test','$user')";
			$result=$operatedb->Execsql($sql,$conn);
			
			if($result){
				echo "<script language='javascript'>alert('����༭�����ݿ�ɹ�');history.back();</script>";
			}else{
				echo "<script language='javascript'>alert('����༭�����ݿ�ʧ��');history.back();</script>";	
			}
		}		
	}else{
		echo '<script language="javascript">alert("����δ��¼�����ȵ�¼...");history.back();</script>';
	}
	
?>