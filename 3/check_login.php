<?php 
	session_start();

	if(isset($_SESSION['id'])){
		echo '<span>';
		echo '欢迎您，'.$_SESSION['username'].'&nbsp';
		echo '</span>';
		echo '<span>|</span>';
		echo '<span>';
		echo '<a href="./login.php?action=logout">&nbsp注销</a>';
		echo '</span>';
	}else{
		echo '<span>';
		echo '<a href="./login.html">登录&nbsp</a>';
		echo '</span>';
		echo '<span>|</span>';
		echo '<span>';
		echo '<a href="./register.html">&nbsp注册</a>';
		echo '</span>';
	}
?>