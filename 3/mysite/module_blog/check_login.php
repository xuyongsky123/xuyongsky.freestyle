<?php 
	session_start();

	if(isset($_SESSION['id'])){
		echo '<span>';
		echo '»¶Ó­Äú£¬'.$_SESSION['username'].'&nbsp';
		echo '</span>';
		echo '<span>|</span>';
		echo '<span>';
		echo '<a href="../login.php?action=logout">&nbsp×¢Ïú</a>';
		echo '</span>';
	}else{
		echo '<span>';
		echo '<a href="../login.html">µÇÂ¼&nbsp</a>';
		echo '</span>';
		echo '<span>|</span>';
		echo '<span>';
		echo '<a href="../register.html">&nbsp×¢²á</a>';
		echo '</span>';
	}
?>