<?php 

 $host=SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT;
	$dbuser=SAE_MYSQL_USER;
	$dbpwd=SAE_MYSQL_PASS;
	$dbname=SAE_MYSQL_DB;


if(isset($_FILES['images'])){ 

if($_FILES['images']['error']){ 
die("Please upload a photo!<a href='javascript:history.back()'>go back</a>"); 
}else{ 
$uploaddir = './'; 
$uploadfile = $uploaddir . basename($_FILES['images']['name']); 

$isUpload = false; 

$tmpName = $_FILES['images']['tmp_name']; 

$size = filesize($tmpName); 

if($size>0){ 
$photo = addslashes(fread(fopen($tmpName,'r'),$size)); 
include( "class.Mysql.php" ); 
$conn = new Mysql(); 

$conn->connect( '$host', '$dbuser', '$dbpwd','$dbname'); 

$sql = "INSERT INTO images (image) VALUES ('$photo')"; 
if($conn->query( $sql )) 

echo "File is valid, and was successfully uploaded.\n";
else 

echo "Mysql query error!\n"; 

} 

die("<a href='javascript:history.back()'>go back</a>"); 

} 
} 

 

