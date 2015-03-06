<?php
	header("Content-Type:text/html;charset=utf-8");
	require("ConnDB.class.inc.php");

	$host=SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT;
	$dbuser=SAE_MYSQL_USER;
	$dbpwd=SAE_MYSQL_PASS;
	$dbname=SAE_MYSQL_DB;

	$connClass=new ConnDB("mysql","$host","$dbuser","$dbpwd","$dbname");
	$operatedb=new OperateDB();
	$conn=$connClass->GetConn();
?>