<?php 
	/*
	$conn=mysql_connect("localhost","root","");
	if(!$conn){
		die('could not connect:'.mysql_error());
	}
	mysql_query("SET NAMES GBK");
	mysql_select_db("phptest",$conn);

	$data=$_POST['content'];
	$article=addslashes($data);

	$sql="INSERT INTO USER_ARTICLE(description,article,filename,filesize,filetype) VALUES('test','$data','test','test','test')";

	$id=mysql_insert_id();

	$result=mysql_query($sql);
	mysql_close($conn);
	
	header('refresh:0;url=blog.html');
	exit;
	*/
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
			
			$sql="INSERT INTO USER_ARTICLE(description,article,filename,filesize,filetype,username) VALUES('test','$data','$blog_title','test','test','$user')";
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