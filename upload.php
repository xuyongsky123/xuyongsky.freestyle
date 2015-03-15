<?php 
	session_start();
	header("Content-Type:text/html;charset=utf-8");
if(isset($_POST['upload_file'])){
			$data=$_POST['upload_file'];
			$PSize = filesize($data); 
			$article = addslashes(fread(fopen($data, "r"), $PSize)); 
			require("./database/connDB.inc.php");
			
            $sql="insert into shop_single_detail(shop_name,shop_keeper,goods_name,goods_price,goods_detail,goods_image,goods_style_top,goods_style_bottom) values('品牌手机小店','闭上眼 会有好梦吗','iPad','待商定价','iPad','$article','palette-sun-flower','palette-orange')";
            //$sql="insert into public_article(public_filename,public_article,public_author) values('$blog_title','$data','$user')";
			$result=$operatedb->Execsql($sql,$conn);
			
			if($result){
				echo "<script language='javascript'>alert('保存编辑到数据库成功');history.back();</script>";
			}else{
				echo "<script language='javascript'>alert('保存编辑到数据库失败');history.back();</script>";	
			}
}else{
	echo "<script language='javascript'>alert('没有数据');history.back();</script>";
}
?>
<?php
 /**
 * 向数据库中插入图片
 * 编辑：www.jbxue.com
 */
 $imgfile=$_FILES['imgfile'];
 $submitbtn=$_POST['submitbtn'];
 if($submitbtn==’OK’ and is_array($imgfile)){
 $name=$imgfile['name'];  //取得图片名称
 $type=$imgfile['type']; //取得图片类型
 $size=$imgfile['size'];  //取得图片长度
 $tmpfile=$imgfile['tmp_name'];  //图片上传上来到临时文件的路径
 if($tmpfile and is_uploaded_file($tmpfile)){  //判断上传文件是否为空，文件是不是上传的文件
  //读取图片流
  $file=fopen($tmpfile,”rb”);
  $imgdata=bin2hex(fread($file,$size));  //bin2hex()将二进制数据转换成十六进制表示
  fclose($file);
 
  $mysqli=mysql_connect(“localhost”,”root”,”123456″);  //连接数据库函数
  mysql_select_db(“test”);  //选择数据库
  //插入出数据库语句，图片数据前要加上0x，用于表示16进制数
  if(mysql_query("insert into shop_single_detail(shop_name,shop_keeper,goods_name,goods_price,goods_detail,goods_image,goods_style_top,goods_style_bottom) values('品牌手机小店','闭上眼 会有好梦吗','iPad','待商定价','iPad','$imgdata','palette-sun-flower','palette-orange')"))
   echo “<center>插入成功！<br><br><a href=’disimage.php’>显示图片</a></center>”;
  else
   echo “<center>插入失败！</center>”;
  mysql_close();
 }else
 echo “<center>请先选择图片！<br><br><a href=’image.html’>点此返回</a></center>”;
} else
 echo “<center>请先选择图片！<br><br><a href=’image.html’>点此返回</a></center>”;
?>