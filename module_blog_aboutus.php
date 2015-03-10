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
					<?php require("/check_login.php"); ?>
				</div>
				<div class="clearfix"></div>
			<div>
		</header>
		<nav>
			<ul>
				<li><a href="./index.php">Home</a></li><li><a href="./module_blog_writeblog.php">Post</a></li><li><a href="#">Contact</a></li><li><a href="./module_blog_aboutus.php">About</a></li>
			</ul>
		</nav>
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
		<footer>
			<div>@Copyright|About us</div>
		</footer>
	</body>
</html>