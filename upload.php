<div id="upload" >
						<em>在此上传您的blog文章：</em>
						<form enctype="multipart/form-data" name="upload_form" method="post" action="module_blog_handleupload.php">
							<input type="hidden" name="MAX_FILE_SIZE" value="100000" />
							<input type="file" name="upload_file" />
							<input type="submit" value="上传文件" />
						</form>
					</div>