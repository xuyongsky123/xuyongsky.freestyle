<?php 
	session_start();
	
	if(!isset($_POST['submit'])){
		exit('�Ƿ����ʣ�����');	
	}else{
			$user=$_POST['user'];
			$pwd=$_POST['pwd'];
			$sex=$_POST['sex'];
			
			require("./database/connDB.inc.php");
			
			$sql_check="SELECT * FROM USER WHERE username='$user'";
			$result_check=$operatedb->Execsql($sql_check,$conn);
			
			if($result_check){
					echo "<script language='javascript'>alert('�û����ظ���������ע��...');history.back();</script>";
			}else{
				if($user&&$pwd&&$sex){
					$sql="INSERT USER (username,password,sex) VALUES ('$user','$pwd','$sex')";
					$result=$operatedb->Execsql($sql,$conn);
					
					if(!$result){
						echo "<script language='javascript'>alert('ע�����������ע��...');history.back();</script>";
					}else{
						echo "<script language='javascript'>alert('ע��ɹ�');</script>";
						
						$sql_item="SELECT * FROM USER WHERE username='$user'";
						$result_item=$operatedb->Execsql($sql_item,$conn);
						
						$_SESSION['username']=$user;
						$_SESSION['id']=$result_item[0]['id'];
						
						header('refresh:0;url=./index.php');
						exit;	
					}
				}else{
					echo "<script language='javascript'>alert('�û��������롢�Ա���Ϊ��');history.back();</script>";
				}
			}
			
	}
	
?>