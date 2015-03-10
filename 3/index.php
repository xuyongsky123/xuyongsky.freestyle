<?php
    session_start();
	header("Content-Type:text/html;charset=utf-8");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="gb2312" />
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="keywords" content="mysite网站主页,xuyongsky,徐勇个人网站,徐勇综合网站,dream,sinaapp.com,SAE" />
    <meta name="description" content="徐勇个人开发网站,xuyongsky官方网站">
    <meta name="baidu-site-verification" content="a7UcQrkB9A" />
	<title>mysite网站主页</title>
	<link rel="stylesheet" href="./css/jquery.fullPage.css">
	<link rel="stylesheet" href="./css/content.fullPage.css">
	<link rel="stylesheet" href="./css/navigation.fullPage.css">
	<link rel="stylesheet" href="./css/homebg.fullPage.css">
	<link rel="stylesheet" href="./css/callback.content.fullPage.css">
	<link rel="stylesheet" href="./css/index.style.css">
	<script src="./js/jquery-1.9.1.min.js"></script>
	<script src="./js/jquery.fullPage.min.js"></script>
	<script src="./js/jquery.easing.1.3.min.js"></script>

	<script>
		$(function(){
			$('#dowebok').fullpage({
				//屏幕背景颜色（如果不指定背景图片的情况下）
				sectionsColor : ['#1bbc9b', '#4BBFC3', '#7BAABE', '#f90'],

				//到最后一屏时循环
				continuousVertical: true,

				//菜单栏
				anchors: ['page1', 'page2', 'page3', 'page4'],
				menu: '#menu',

				//屏幕内容呈现动态（回调函数）
				afterLoad: function(anchorLink, index){
                    if(index == 1){
						$('.section1').find('p').fadeIn(2000);
					}
					if(index == 2){
						$('.section2').find('p').delay(500).animate({
							left: '0'
						}, 1500, 'easeOutExpo');
					}
					if(index == 3){
						$('.section3').find('p').delay(500).animate({
							bottom: '0'
						}, 1500, 'easeOutExpo');
					}
					if(index == 4){
						$('.section4').find('p').fadeIn(2000);
					}
				},
				onLeave: function(index, direction){
					if(index == '1'){
						$('.section1').find('p').fadeOut(2000);
					}
					if(index == '2'){
						$('.section2').find('p').delay(500).animate({
							left: '-120%'
						}, 1500, 'easeOutExpo');
					}
					if(index == '3'){
						$('.section3').find('p').delay(500).animate({
							bottom: '-120%'
						}, 1500, 'easeOutExpo');
					}
					if(index == '4'){
						$('.section4').find('p').fadeOut(2000);
					}
				}

				//项目导航栏
				//'navigation': true,

			});

			//slide自动滚动
			setInterval(function(){
				$.fn.fullpage.moveSlideRight();
			}, 5000);	
			
			//设置循环滚动时间
			setInterval(function(){
				$.fn.fullpage.moveSectionDown();
			}, 15000);
			
			//响应式（根据视口宽度控制全屏滚动的开关）
			$(window).resize(function(){
				autoScrolling();
			});

			function autoScrolling(){
				var $ww = $(window).width();
				if($ww < 0){
					$.fn.fullpage.setAutoScrolling(false);
				} else {
					$.fn.fullpage.setAutoScrolling(true);
				}
			}

			autoScrolling();
		});
	</script>
</head>
<body>
	<div id="contact">
		<div id="contact_title">联系我们</div>
		<div id="contact_content">
			<a target="blank" href="http://wpa.qq.com/msgrd?v=3&uin=1845082157&site=qq&menu=yes"><img border="0" src=http://wpa.qq.com/pa?p=1:1845082157:51 alt="点击这里给我发消息"></a>
			<a target="blank" href="http://wpa.qq.com/msgrd?v=3&uin=987864207&site=qq&menu=yes"><img border="0" src=http://wpa.qq.com/pa?p=1:987864207:51 alt="点击这里给我发消息"></a>
		</div>
	</div>
	<div id="user_container">
		<?php require("./check_login.php"); ?>
	</div>

	<ul id="menu">
		<li data-menuanchor="page1" class="active"><a href="#page1">HOME</a></li>
		<li data-menuanchor="page2"><a href="#page2">ABOUT</a></li>
		<li data-menuanchor="page3"><a href="#page3">CONTACT</a></li>
		<li data-menuanchor="page4"><a href="#page4">...</a></li>
	</ul>

	<div id="dowebok">
		<div class="section section1">
			<div class="slide"><h3><a href="./module_blog_blog.php">POST&nbsp;&nbsp;编写博客文章</a></h3></div>
			<div class="slide"><h3>功能模块示例一</h3></div>
			<div class="slide"><h3>功能模块示例二</h3></div>
            <span class="location">请点击这里...</span>
		</div>
		<div class="section section2">
			<h3>About us</h3>
			<p>网站功能模块尚且处于开发中...</p>
		</div>
		<div class="section section3">
			<h3>Contact</h3>
			<p>
				<a target="blank" href="http://wpa.qq.com/msgrd?v=3&uin=1845082157&site=qq&menu=yes">如果你有什么疑问或者建议请与我们联系...</a>
			</p>
		</div>
		<div class="section section4">
			<h3>第四屏</h3>
			<p>滚动到第四屏后的回调函数执行的效果</p>
		</div>
	</div>

</body>
</html>