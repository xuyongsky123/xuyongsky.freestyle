<?php 
	session_start();
	if(isset($_GET['action'])){
		//注销登录
		if($_GET['action'] == "logout"){
	    unset($_SESSION['username']);
	    unset($_SESSION['id']);
	    //echo '注销登录成功！点击此处 <a href="login.html">登录</a>';
	    //exit;
	    header('refresh:0;url=./index.php');
			exit;	
		}
	}
	
	
	if(!isset($_POST['submit'])){
		exit('非法访问！！！');	
	}else{
			$user=$_POST['user'];
			$pwd=$_POST['pwd'];
			
			require("./database/connDB.inc.php");
			
			if($user&&$pwd){
				$sql="SELECT * FROM USER WHERE username='$user' and password='$pwd'";
				$result=$operatedb->Execsql($sql,$conn);
				
				if(!$result){
					echo "<script language='javascript'>alert('用户名和密码错误');history.back();</script>";
				}else{
					$_SESSION['username']=$user;
					$_SESSION['id']=$result[0]['id'];
					//echo $user.'欢迎你！进入<a href="user_center.php">用户中心</a><br />';
					//echo '点击此处 <a href="login.php?action=logout">注销</a> 登录!<br />';
					//exit;
					//echo "登陆成功";
					
					header('refresh:0;url=./index.php');
					exit;	
				}
			}else{
				echo "<script language='javascript'>alert('用户名和密码不能为空');history.back();</script>";
			}
			//可写可不写，因为php有自动垃圾回收机制
			//$connClass->_destruct();
	}
	
?>