<?php 
	session_start();
	header("Content-Type=text/html;charset=utf-8");
	
	if(!isset($_POST['submit'])){
		exit('非法访问！！！');	
	}else{
			$user=$_POST['user'];
			$pwd=$_POST['pwd'];
			$sex=$_POST['sex'];
			
			require("./database/connDB.inc.php");
			
			$sql_check="select * from user where username='$user'";
			$result_check=$operatedb->Execsql($sql_check,$conn);
        
			if($result_check){
					echo "<script language='javascript'>alert('username is repeat,register again...');history.back();</script>";
			}else{
				if($user&&$pwd&&$sex){
					$sql="insert user (username,password,sex) values ('$user','$pwd','$sex')";
					$result=$operatedb->Execsql($sql,$conn);
					
					if(!$result){
						echo "<script language='javascript'>alert('register wrong,please register again...');history.back();</script>";
					}else{
						
						
						$sql_item="select * from user where username='$user'";
						$result_item=$operatedb->Execsql($sql_item,$conn);
						
						$_SESSION['username']=$user;
						$_SESSION['id']=$result_item[0]['id'];
                        echo "<script language='javascript'>alert('register ok');window.location.href='./index.php';</script>";
					}
				}else{
					echo "<script language='javascript'>alert('username,password,sex can't be null');history.back();</script>";
				}
			}
			
	}
	
?>