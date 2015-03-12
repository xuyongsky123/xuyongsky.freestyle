<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
		<title>编写博客</title>
		<link rel="stylesheet" href="./editor/themes/default/default.css" />
        <link rel="stylesheet" href="./css/module_blog_style.css" />
		<script charset="utf-8" src="./editor/kindeditor-min.js"></script>
		<script charset="utf-8" src="./editor/lang/zh_CN.js"></script>
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
					editor.insertHtml('<strong>插入HTML</strong>');
				});
				K('input[name=appendHtml]').click(function(e) {
					editor.appendHtml('<strong>添加HTML</strong>');
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
				<article>
					<h3>编写博客：</h3>
					<form method="post" action="./module_blog_savearticle.php">
						<div id="container">
							<label for="blog_title">请输入博客标题:</label>
							<input type="text" name="blog_title"  />
							<input type="reset" name="reset" value="清空" />
							<input type="submit" value="保存编辑到数据库" />
						</div>
						<textarea name="content" style="width:auto;height:500px;visibility:hidden;"></textarea>
						<p style="display:none;">
							<input type="button" name="getHtml" value="取得HTML" />
							<input type="button" name="isEmpty" value="判断是否为空" />
							<input type="button" name="getText" value="取得文本(包含img,embed)" />
							<input type="button" name="selectedHtml" value="取得选中HTML" />
							<br />
							<br />
							<input type="button" name="setHtml" value="设置HTML" />
							<input type="button" name="setText" value="设置文本" />
							<input type="button" name="insertHtml" value="插入HTML" />
							<input type="button" name="clear" value="清空内容" />
							<input type="button" name="appendHtml" value="添加HTML" />
						</p>
					</form>
				</article>
			</div>
		</section>
                
        <!--footer-->
           <?php include("./module_blog_templetfooter.php"); ?>
                
	</body>
</html>