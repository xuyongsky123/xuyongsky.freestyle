<!DOCTYPE html>
<html>
<head>
	<meta charset="gb2312" />
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
	<title>mysite��վ��ҳ</title>
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
				//��Ļ������ɫ�������ָ������ͼƬ������£�
				sectionsColor : ['#1bbc9b', '#4BBFC3', '#7BAABE', '#f90'],

				//�����һ��ʱѭ��
				continuousVertical: true,

				//�˵���
				anchors: ['page1', 'page2', 'page3', 'page4'],
				menu: '#menu',

				//��Ļ���ݳ��ֶ�̬���ص�������
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

				//��Ŀ������
				//'navigation': true,

			});

			//slide�Զ�����
			setInterval(function(){
				$.fn.fullpage.moveSlideRight();
			}, 5000);	
			
			//����ѭ������ʱ��
			setInterval(function(){
				$.fn.fullpage.moveSectionDown();
			}, 15000);
			
			//��Ӧʽ�������ӿڿ�ȿ���ȫ�������Ŀ��أ�
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
		<div id="contact_title">��ϵ����</div>
		<div id="contact_content">
			<a target="blank" href="http://wpa.qq.com/msgrd?v=3&uin=1845082157&site=qq&menu=yes"><img border="0" src=http://wpa.qq.com/pa?p=1:1845082157:51 alt="���������ҷ���Ϣ"></a>
			<a target="blank" href="http://wpa.qq.com/msgrd?v=3&uin=987864207&site=qq&menu=yes"><img border="0" src=http://wpa.qq.com/pa?p=1:987864207:51 alt="���������ҷ���Ϣ"></a>
		</div>
	</div>
	<div id="user_container">
		<?PHP require("./check_login.php"); ?>
	</div>

	<ul id="menu">
		<li data-menuanchor="page1" class="active"><a href="#page1">HOME</a></li>
		<li data-menuanchor="page2"><a href="#page2">ABOUT</a></li>
		<li data-menuanchor="page3"><a href="#page3">CONTACT</a></li>
		<li data-menuanchor="page4"><a href="#page4">...</a></li>
	</ul>

	<div id="dowebok">
		<div class="section section1">
			<!--<h3>��һ��</h3>-->
			<div class="slide"><h3><a href="./module_blog/blog.php">POST&nbsp;&nbsp;��д��������</a></h3></div>
			<div class="slide"><h3>����ģ��ʾ��һ</h3></div>
			<div class="slide"><h3>����ģ��ʾ����</h3></div>
		</div>
		<div class="section section2">
			<h3>About us</h3>
			<p>��վ����ģ�����Ҵ��ڿ�����...</p>
		</div>
		<div class="section section3">
			<h3>Contact</h3>
			<p>
				<a target="blank" href="http://wpa.qq.com/msgrd?v=3&uin=1845082157&site=qq&menu=yes">�������ʲô���ʻ��߽�������������ϵ...</a>
			</p>
		</div>
		<div class="section section4">
			<h3>������</h3>
			<p>��������������Ļص�����ִ�е�Ч��</p>
		</div>
	</div>

</body>
</html>