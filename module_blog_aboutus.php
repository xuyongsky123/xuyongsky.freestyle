<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>myblog网站主页</title>
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
					
				</article>	
			</aside>
			<div id="content">
				<article>
					
				</article>
			</div>
		</section>
                
        <!--footer-->
           <?php include("./module_blog_templetfooter.php"); ?>
                
	</body>
</html>