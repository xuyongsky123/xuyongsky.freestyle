<?php 
	session_start();
	header("Content-Type=text/html;charset=utf-8");
    
/*$path='/session_files/';
    if(!is_dir($path)){
        mkdir($path);
    }
    session_save_path($path);*/

	if(isset($_GET['action'])){
		//注销登录
		if($_GET['action'] == "logout_admin"){
	    unset($_SESSION['username_adminuserfixpassword__']);
	    unset($_SESSION['idusername_adminuserfixpassword__']);
            //echo '注销登录成功！点击此处 <a href="./login.html">登录</a>';
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
				$sql="select * from admin_user where username='$user' and password='$pwd'";
				$result=$operatedb->Execsql($sql,$conn);
				
				if(!$result){
					echo "<script language='javascript'>alert('username and password wrong');history.back();</script>";
				}else{
					$_SESSION['username_adminuserfixpassword__']=$user;
					$_SESSION['id_username_adminuserfixpassword__']=$result[0]['id'];
                    
                    echo "<script language='javascript'>window.location.href='./main.php';</script>";
                    //header('refresh:0;url=./index.php');
                    //exit;	
				}
			}else{
				echo "<script language='javascript'>alert('username and password can't be null');history.back();</script>";
			}
			//可写可不写，因为php有自动垃圾回收机制
			//$connClass->_destruct();
	}
	
?>