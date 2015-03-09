<?php
//连接数据库的类
class ConnDB{
	var $dbtype;
	var $host;
	var $user;
	var $pwd;
	var $dbname;
	var $conn;
	
	//构造方法
	function ConnDB($dbtype,$host,$user,$pwd,$dbname){
		$this->dbtype=$dbtype;
		$this->host=$host;
		$this->pwd=$pwd;
		$this->dbname=$dbname;
		$this->user=$user;
	}
	function GetConn(){
		$this->conn=mysql_connect($this->host,$this->user,$this->pwd) or die("数据库服务器连接错误".mysql_error());
		/*另一种方式：
			$this->conn=mysql_connent($this->host,$this->user,$this->pwd);
			if(!$this->conn){
				die("数据库服务器链接错误".mysql_error());
			}
		*/
		mysql_select_db($this->dbname,$this->conn) or die("数据库访问错误".mysql_error());

		//设置编码格式
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

//数据库操作类
class OperateDB{
	function Execsql($sql,$conn){
		//截取sql语句中的前6个字符串，并且转换成小写
		$sqltype=strtolower(substr(trim($sql),0,6));
		
                            
		//执行sql语句
		$result=mysql_query($sql,$conn);

		//定义二维数组
		$callback_array=array();
		
		//判断执行的sql语句是“增、删、改、查”四种中的哪种
		if($sqltype=="select"){
			if($result==false){
				return false;
			}else if(mysql_num_rows($result)==0){
				return false;
			}else{
				while($result_array=mysql_fetch_array($result)){
					array_push($callback_array,$result_array);
				}

				//成功返回查询结果的数组
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