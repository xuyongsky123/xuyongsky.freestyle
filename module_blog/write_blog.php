
<!DOCTYPE html>
<html>
	<head>
		<meta charset="gb2312" />
		<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
		<title>��д����</title>
		<link rel="stylesheet" href="../editor/themes/default/default.css" />
		<link rel="stylesheet" href="../module_blog/style.css" />
		<script charset="utf-8" src="../editor/kindeditor-min.js"></script>
		<script charset="utf-8" src="../editor/lang/zh_CN.js"></script>
		<script>
			var editor;
			KindEditor.ready(function(K) {
				editor = K.create('textarea[name="content"]', {
					allowFileManager : true
				});
				K('input[name=getHtml]').click(function(e) {
					
					alert(editor.html());
				});
				K('input[name=isEmpty]').click(function(e) {
					alert(editor.isEmpty());
				});
				K('input[name=getText]').click(function(e) {
					alert(editor.text());
				});
				K('input[name=selectedHtml]').click(function(e) {
					alert(editor.selectedHtml());
				});
				K('input[name=setHtml]').click(function(e) {
					editor.html('<h3>Hello KindEditor</h3>');
				});
				K('input[name=setText]').click(function(e) {
					editor.text('<h3>Hello KindEditor</h3>');
				});
				K('input[name=insertHtml]').click(function(e) {
					editor.insertHtml('<strong>����HTML</strong>');
				});
				K('input[name=appendHtml]').click(function(e) {
					editor.appendHtml('<strong>���HTML</strong>');
				});
				K('input[name=clear]').click(function(e) {
					editor.html('');
				});
			});
		</script>
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
				<article>
					<h3>��д���ͣ�</h3>
					<form method="post" action="../module_blog/save_article.php">
						<div id="container">
							<label for="blog_title">�����벩�ͱ���:</label>
							<input type="text" name="blog_title"  />
							<input type="reset" name="reset" value="���" />
							<input type="submit" value="����༭�����ݿ�" />
						</div>
						<textarea name="content" style="width:auto;height:500px;visibility:hidden;"></textarea>
						<p style="display:none;">
							<input type="button" name="getHtml" value="ȡ��HTML" />
							<input type="button" name="isEmpty" value="�ж��Ƿ�Ϊ��" />
							<input type="button" name="getText" value="ȡ���ı�(����img,embed)" />
							<input type="button" name="selectedHtml" value="ȡ��ѡ��HTML" />
							<br />
							<br />
							<input type="button" name="setHtml" value="����HTML" />
							<input type="button" name="setText" value="�����ı�" />
							<input type="button" name="insertHtml" value="����HTML" />
							<input type="button" name="clear" value="�������" />
							<input type="button" name="appendHtml" value="���HTML" />
						</p>
					</form>
				</article>
			</div>
		</section>
		<footer>
			<div>@Copyright|About us</div>
		</footer>
	</body>
</html>