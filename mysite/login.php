<?php 
	session_start();
	if(isset($_GET['action'])){
		//ע����¼
		if($_GET['action'] == "logout"){
	    unset($_SESSION['username']);
	    unset($_SESSION['id']);
	    //echo 'ע����¼�ɹ�������˴� <a href="login.html">��¼</a>';
	    //exit;
	    header('refresh:0;url=./index.php');
			exit;	
		}
	}
	
	
	if(!isset($_POST['submit'])){
		exit('�Ƿ����ʣ�����');	
	}else{
			$user=$_POST['user'];
			$pwd=$_POST['pwd'];
			
			require("./database/connDB.inc.php");
			
			if($user&&$pwd){
				$sql="SELECT * FROM USER WHERE username='$user' and password='$pwd'";
				$result=$operatedb->Execsql($sql,$conn);
				
				if(!$result){
					echo "<script language='javascript'>alert('�û������������');history.back();</script>";
				}else{
					$_SESSION['username']=$user;
					$_SESSION['id']=$result[0]['id'];
					//echo $user.'��ӭ�㣡����<a href="user_center.php">�û�����</a><br />';
					//echo '����˴� <a href="login.php?action=logout">ע��</a> ��¼!<br />';
					//exit;
					//echo "��½�ɹ�";
					
					header('refresh:0;url=./index.php');
					exit;	
				}
			}else{
				echo "<script language='javascript'>alert('�û��������벻��Ϊ��');history.back();</script>";
			}
			//��д�ɲ�д����Ϊphp���Զ��������ջ���
			//$connClass->_destruct();
	}
	
?>