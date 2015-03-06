<!DOCTYPE html>
<html>
	<head>
		<meta charset="gb2312" />
		<title>myblog网站主页</title>
		<link rel="stylesheet" href="../module_blog/style.css" />
	</head>
	<body>
		<header>
			<div id="header">
				<div id="logo">
					<a href="../module_blog/blog.php">
						<img alt="myblog" src="../images/logo.gif" />
					</a>
				</div>
				<div id="login">
					<?php require("../module_blog/check_login.php") ?>
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