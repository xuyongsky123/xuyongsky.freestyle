<?php
	header("Content-Type:text/html;charset=GB2312");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
		<title>myblog��վ��ҳ</title>
		<link rel="stylesheet" href="../module_blog/style.css" />
	</head>
	<body>
		<header>
			<div id="header">
				<div id="logo">
					<a href="../module_blog/blog.php">
						<img alt="myblog" src="../images/logo.png" />
					</a>
				</div>
				<div id="login">
					<?php require("../check_login.php"); ?>
				</div>
				<div class="clearfix"></div>
			<div>
		</header>
		<nav>
			<ul>
				<li><a href="../index.php">Home</a></li><li><a href="../module_blog/write_blog.php">Post</a></li><li><a href="#">Contact</a></li><li><a href="../module_blog/about_us.php">About</a></li>
			</ul>
		</nav>
		<section>
			<aside>
				<article>
					<div id="upload">
						<em>�ڴ��ϴ�����blog���£�</em>
						<form enctype="multipart/form-data" name="upload_form" method="post" action="handle_upload.php">
							<input type="hidden" name="MAX_FILE_SIZE" value="100000" />
							<input type="file" name="upload_file" />
							<input type="submit" value="�ϴ��ļ�" />
						</form>
					</div>
					<h3>�����б�</h3>
					<div id="article">
						<ul>
							<?php require("../module_blog/show_article.php"); ?>
						</ul>
					</div>
				</article>	
			</aside>
			<div id="content">
					<?php 
						if(isset($_GET['filename'])){
		
							//�����$_SESSION['username']������û�����壬����Ψһ��ʶĳ���û������£������������û���ͬ������
							//session_start();
							
							$user_search=$_SESSION['username'];
							$file_search=$_GET['filename'];
							$sql_search="SELECT * FROM USER_ARTICLE WHERE filename = '$file_search' and username='$user_search' ";
							$array_search=$operatedb->Execsql($sql_search,$conn);
							
							foreach($array_search as $item_search){
								echo '<article>';
								echo $item_search['article'];	
								echo '</article>';
							}
						}else{
							echo '<article>';
							echo "�������£������ھ���ĳ������...";
							echo '</article>';
						}
					?>
			</div>
		</section>
		<footer>
			<div>@Copyright|About us</div>
		</footer>
		<div id="top">
			<a href="javascript:window.scrollTo(0,0);" >�ص�����</a>
		</div>
	</body>
</html>