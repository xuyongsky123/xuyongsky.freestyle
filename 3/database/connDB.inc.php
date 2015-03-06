<?php
	require("ConnDB.class.inc.php");

	$host=SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT;
	$user=SAE_MYSQL_USER;
	$pwd=SAE_MYSQL_PASS;
	$dbname=SAE_MYSQL_DB;

	$connClass=new ConnDB("mysql","$host","$user","$pwd","$dbname");
	$operatedb=new OperateDB();
	$conn=$connClass->GetConn();
?>