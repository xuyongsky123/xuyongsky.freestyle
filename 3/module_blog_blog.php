<?php
	session_start();
	header("Content-Type:text/html;charset=utf-8");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
        <meta name="keywords" content="自由风,dream,sinaapp.com,SAE,大学生电商,大学淘宝店,大学京东店" />
    	<meta name="description" content="自由风,freestyle,徐勇个人开发网站,xuyongsky官方网站,大学生电商,大学淘宝店,大学京东店">
		<title>博客文章专栏</title>
        <link rel="stylesheet" href="./css/module_blog_style.css" />
	</head>
	<body>
		<header>
			<div id="header">
				<div id="logo">
					<a href="./module_blog_blog.php">
						<img alt="myblog" src="./images/logo.png" />
					</a>
				</div>
				<div id="login">
					<?php require("./check_login.php"); ?>
				</div>
				<div class="clearfix"></div>
			<div>
		</header>
		<?php include("./module_blog_templetmenu.php"); ?>
		<section>
			<aside>
				<article>
                    <div id="upload" style="display:none;">
						<em>在此上传您的blog文章：</em>
						<form enctype="multipart/form-data" name="upload_form" method="post" action="module_blog_handleupload.php">
							<input type="hidden" name="MAX_FILE_SIZE" value="100000" />
							<input type="file" name="upload_file" />
							<input type="submit" value="上传文件" />
						</form>
					</div>
					<h3>文章列表：</h3>
					<div id="article">
						<ul>
							<?php require("./module_blog_showarticle.php"); ?>
						</ul>
					</div>
				</article>	
			</aside>
			<div id="content">
					<?php 
						if(isset($_GET['filename'])){
		
							//这里的$_SESSION['username']并不是没有意义，而是唯一标识某个用户的文章，区别于其他用户的同名文章
							//session_start();
							
							$user_search=$_SESSION['username'];
							$file_search=$_GET['filename'];
							$sql_search="select * from user_article where filename = '$file_search' and username='$user_search' ";
							$array_search=$operatedb->Execsql($sql_search,$conn);
                            
                            if($array_search){
                            	foreach($array_search as $item_search){
                                    echo '<article>';
                                    echo $item_search['article'];	
                                    echo '</article>';
                                }
                            }else{
                            	echo '<article>';
                                echo "查询数据库中文章时出错，我们会尽快处理，请谅解...";	
                                echo '</article>';
                            }
							
                        }else{
							echo '<article>';
							echo "公共文章，不属于具体某人所有...";
							echo '</article>';
						}
					?>
			</div>
		</section>
                
        <!--footer-->
           <?php include("./module_blog_templetfooter.php"); ?>
                
		<div id="top">
			<a href="javascript:window.scrollTo(0,0);" >回到顶部</a>
		</div>
	</body>
</html>