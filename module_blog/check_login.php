<?php 
	if(isset($_SESSION['id'])){
		echo '<span>';
		echo '��ӭ����'.$_SESSION['username'].'&nbsp';
		echo '</span>';
		echo '<span>|</span>';
		echo '<span>';
		echo '<a href="../login.php?action=logout">&nbspע��</a>';
		echo '</span>';
	}else{
		echo '<span>';
		echo '<a href="../login.html">��¼&nbsp</a>';
		echo '</span>';
		echo '<span>|</span>';
		echo '<span>';
		echo '<a href="../register.html">&nbspע��</a>';
		echo '</span>';
	}
?>