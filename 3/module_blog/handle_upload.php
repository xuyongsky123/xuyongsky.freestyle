<?php
	date_default_timezone_set("PRC");
	
	$file=$_FILES['upload_file'];
	
	if($file['error']==UPLOAD_ERR_OK)
	{
		//取得扩展名
		$extName=strtolower(end(explode('.',$file['name'])));
		
		$filename=date('Ymdhis')."_".$file['name'];
		
		if($extName=='txt'){
			
			$dest_dir="uploads/files";
			$dest=$dest_dir.'/'.$filename;
			
		}else if($extName=='jpg'){
			
			$dest_dir="uploads/images";
			$dest=$dest_dir.'/'.$filename;
			
		}else{
			
			$dest_dir="uploads/other_files";
			$dest=$dest_dir.'/'.$filename;
				
		}
		
		move_uploaded_file($file['tmp_name'],$dest);
		
		echo "<script>javascript:alert('上传成功')</script>";
		header('refresh:0;url=blog.php');
		exit;
		
	}else{
		echo "<script>javascript:alert('上传失败')</script>";	
		header('refresh:0;url=blog.php');
		exit;	
	}
?>