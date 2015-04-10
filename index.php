<?php
    session_start();
	header("Content-Type:text/html;charset=utf-8");
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="自由风,dream,sinaapp.com,SAE,大学生电商,大学淘宝店,大学京东店" />
    <meta name="description" content="自由风,freestyle,徐勇个人开发网站,xuyongsky官方网站,大学生电商,大学淘宝店,大学京东店">
    <meta name="baidu-site-verification" content="a7UcQrkB9A" />
	<title>自由风</title>
	<link rel="stylesheet" href="./css/jquery.fullPage.css">
	<link rel="stylesheet" href="./css/content.fullPage.css">
    <link rel="stylesheet" href="./css/navigation.fullPage.css">
    <link rel="stylesheet" href="./css/button.css" media="screen">
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
			<a target="blank" href="http://wpa.qq.com/msgrd?v=3&uin=821594487&site=qq&menu=yes"><img border="0" src=http://wpa.qq.com/pa?p=1:821594487:51 alt="点击这里给我发消息"></a>
            <a target="blank" href="http://wpa.qq.com/msgrd?v=3&uin=910259041&site=qq&menu=yes"><img border="0" src=http://wpa.qq.com/pa?p=1:910259041:51 alt="点击这里给我发消息"></a>
		</div>
	</div>
	<div id="user_container">
		<?php require("./check_login.php"); ?>
	</div>

	<ul id="menu">
		<li data-menuanchor="page1" class="active"><a href="#page1"><span class="button purple"><span class="shine"></span>HOME</span></a></li>
		<li data-menuanchor="page2"><a href="#page2"><span class="button purple"><span class="shine"></span>ABOUT</span></a></li>
		<li data-menuanchor="page3"><a href="#page3"><span class="button purple"><span class="shine"></span>CONTACT</span></a></li>
		<li data-menuanchor="page4"><a href="#page4"><span class="button purple"><span class="shine"></span>...</span></a></li>
	</ul>

	<div id="dowebok">
		<div class="section section1">
            <div class="slide"><h3><a href="./module_graduation_graduation.php">Make Graduation Project!<br />毕业设计专栏</a></h3></div>
            <div class="slide"><h3><a href="./module_blog_blog.php">Write Blog!<br />博客文章专栏</a></h3></div>
			<div class="slide"><h3><a href="./module_shop_shop.php">University Business!<br />大学电商专栏</a></h3></div>
			<div class="slide"><h3><a href="./dynamic_effect_cloud.php">Enjoy<br />欣赏...</a></h3></div>
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