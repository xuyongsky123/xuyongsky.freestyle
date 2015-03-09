<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>myblog网站主页</title>
        <link rel="stylesheet" href=$_server['DOCUMENT_ROOT']."/module_blog/style.css" />
	</head>
	<body>
		<header>
			<div id="header">
				<div id="logo">
					<a href="/module_blog/blog.php">
						<img alt="myblog" src="/images/logo.gif" />
					</a>
				</div>
				<div id="login">
					<?php require($_SERVER['DOCUMENT_ROOT']."/check_login.php") ?>
				</div>
				<div class="clearfix"></div>
			<div>
		</header>
		<nav>
			<ul>
				<li><a href="/index.php">Home</a></li><li><a href="/module_blog/write_blog.php">Post</a></li><li><a href="#">Contact</a></li><li><a href="../module_blog/about_us.php">About</a></li>
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