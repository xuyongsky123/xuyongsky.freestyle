<?php
//�������ݿ����
class ConnDB{
	var $dbtype;
	var $host;
	var $user;
	var $pwd;
	var $dbname;
	var $conn;
	
	//���췽��
	function ConnDB($dbtype,$host,$user,$pwd,$dbname){
		$this->dbtype=$dbtype;
		$this->host=$host;
		$this->pwd=$pwd;
		$this->dbname=$dbname;
		$this->user=$user;
	}
	function GetConn(){
		$this->conn=mysql_connect($this->host,$this->user,$this->pwd) or die("���ݿ���������Ӵ���".mysql_error());
		/*��һ�ַ�ʽ��
			$this->conn=mysql_connent($this->host,$this->user,$this->pwd);
			if(!$this->conn){
				die("���ݿ���������Ӵ���".mysql_error());
			}
		*/
		mysql_select_db($this->dbname,$this->conn) or die("���ݿ���ʴ���".mysql_error());

		//���ñ����ʽ
		mysql_query("SET NAMES GB2312");
		return $this->conn;
	}
	function _destruct(){
		$this->CloseDB();
	}
	function CloseDB(){
		mysql_close($this->conn);
	}
}

//���ݿ������
class OperateDB{
	function Execsql($sql,$conn){
		//��ȡsql����е�ǰ6���ַ���������ת����Сд
		$sqltype=strtolower(substr(trim($sql),0,6));
		
		//ִ��sql���
		$result=mysql_query($sql,$conn);

		//�����ά����
		$callback_array=array();
		
		//�ж�ִ�е�sql����ǡ�����ɾ���ġ��顱�����е�����
		if($sqltype=="select"){
			if($result==false){
				return false;
			}else if(mysql_num_rows($result)==0){
				return false;
			}else{
				while($result_array=mysql_fetch_array($result)){
					array_push($callback_array,$result_array);
				}

				//�ɹ����ز�ѯ���������
				return $callback_array;
			}
		}else if($sqltype=="update"||$sqltype=="delete"||$sqltype=="insert"){
			if($result){
				return true;
			}else{
				return false;
			}
		}
	}
}
?>