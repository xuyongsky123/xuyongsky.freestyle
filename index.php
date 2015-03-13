<?php
    session_start();
	header("Content-Type:text/html;charset=utf-8");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="gb2312" />
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="keywords" content="自由风,dream,sinaapp.com,SAE,大学生电商,大学淘宝店,大学京东店" />
    <meta name="description" content="自由风,freestyle,徐勇个人开发网站,xuyongsky官方网站,大学生电商,大学淘宝店,大学京东店">
    <meta name="baidu-site-verification" content="a7UcQrkB9A" />
	<title>自由风</title>
	<link rel="stylesheet" href="./css/jquery.fullPage.css">
	<link rel="stylesheet" href="./css/content.fullPage.css">
    <link rel="stylesheet" href="./css/navigation.fullPage.css">
    <link rel="stylesheet" href="./css/button.css" media="screen">
	<!--<link rel="stylesheet" href="./css/homebg.fullPage.css">-->
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
			<div class="slide"><h3>功能模块示例二</h3></div>
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
	<!--HTML5背景动态云效果-Begin-->
    <script type="text/javascript" src="./js/webgl_clouds_js/three.min.js"></script>
		<script type="text/javascript" src="./js/webgl_clouds_js/Detector.js"></script>
		<script id="vs" type="x-shader/x-vertex">

			varying vec2 vUv;

			void main() {

				vUv = uv;
				gl_Position = projectionMatrix * modelViewMatrix * vec4( position, 1.0 );

			}

		</script>

		<script id="fs" type="x-shader/x-fragment">

			uniform sampler2D map;

			uniform vec3 fogColor;
			uniform float fogNear;
			uniform float fogFar;

			varying vec2 vUv;

			void main() {

				float depth = gl_FragCoord.z / gl_FragCoord.w;
				float fogFactor = smoothstep( fogNear, fogFar, depth );

				gl_FragColor = texture2D( map, vUv );
				gl_FragColor.w *= pow( gl_FragCoord.z, 20.0 );
				gl_FragColor = mix( gl_FragColor, vec4( fogColor, gl_FragColor.w ), fogFactor );

			}

		</script>

		<script type="text/javascript">

			if ( ! Detector.webgl ) Detector.addGetWebGLMessage();

			var container;
			var camera, scene, renderer;
			var mesh, geometry, material;

			var mouseX = 0, mouseY = 0;
			var start_time = Date.now();

			var windowHalfX = window.innerWidth / 2;
			var windowHalfY = window.innerHeight / 2;

			init();

			function init() {

				container = document.createElement( 'div' );
				document.body.appendChild( container );

				// Bg gradient

				var canvas = document.createElement( 'canvas' );
				canvas.width = 32;
				canvas.height = window.innerHeight;

				var context = canvas.getContext( '2d' );

				var gradient = context.createLinearGradient( 0, 0, 0, canvas.height );
				gradient.addColorStop(0, "#1e4877");
				gradient.addColorStop(0.5, "#4584b4");

				context.fillStyle = gradient;
				context.fillRect(0, 0, canvas.width, canvas.height);

				container.style.background = 'url(' + canvas.toDataURL('image/png') + ')';
				container.style.backgroundSize = '32px 100%';

				//

				camera = new THREE.PerspectiveCamera( 30, window.innerWidth / window.innerHeight, 1, 3000 );
				camera.position.z = 6000;

				scene = new THREE.Scene();

				geometry = new THREE.Geometry();

				var texture = THREE.ImageUtils.loadTexture( 'cloud10.png', null, animate );
				texture.magFilter = THREE.LinearMipMapLinearFilter;
				texture.minFilter = THREE.LinearMipMapLinearFilter;

				var fog = new THREE.Fog( 0x4584b4, - 100, 3000 );

				material = new THREE.ShaderMaterial( {

					uniforms: {

						"map": { type: "t", value: texture },
						"fogColor" : { type: "c", value: fog.color },
						"fogNear" : { type: "f", value: fog.near },
						"fogFar" : { type: "f", value: fog.far },

					},
					vertexShader: document.getElementById( 'vs' ).textContent,
					fragmentShader: document.getElementById( 'fs' ).textContent,
					depthWrite: false,
					depthTest: false,
					transparent: true

				} );

				var plane = new THREE.Mesh( new THREE.PlaneGeometry( 64, 64 ) );

				for ( var i = 0; i < 8000; i++ ) {

					plane.position.x = Math.random() * 1000 - 500;
					plane.position.y = - Math.random() * Math.random() * 200 - 15;
					plane.position.z = i;
					plane.rotation.z = Math.random() * Math.PI;
					plane.scale.x = plane.scale.y = Math.random() * Math.random() * 1.5 + 0.5;

					THREE.GeometryUtils.merge( geometry, plane );

				}

				mesh = new THREE.Mesh( geometry, material );
				scene.add( mesh );

				mesh = new THREE.Mesh( geometry, material );
				mesh.position.z = - 8000;
				scene.add( mesh );

				renderer = new THREE.WebGLRenderer( { antialias: false } );
				renderer.setSize( window.innerWidth, window.innerHeight );
				container.appendChild( renderer.domElement );

				document.addEventListener( 'mousemove', onDocumentMouseMove, false );
				window.addEventListener( 'resize', onWindowResize, false );

			}

			function onDocumentMouseMove( event ) {

				mouseX = ( event.clientX - windowHalfX ) * 0.25;
				mouseY = ( event.clientY - windowHalfY ) * 0.15;

			}

			function onWindowResize( event ) {

				camera.aspect = window.innerWidth / window.innerHeight;
				camera.updateProjectionMatrix();

				renderer.setSize( window.innerWidth, window.innerHeight );

			}

			function animate() {

				requestAnimationFrame( animate );

				position = ( ( Date.now() - start_time ) * 0.03 ) % 8000;

				camera.position.x += ( mouseX - camera.position.x ) * 0.01;
				camera.position.y += ( - mouseY - camera.position.y ) * 0.01;
				camera.position.z = - position + 8000;

				renderer.render( scene, camera );

			}

		</script>
    <!--HTML5背景动态云效果-End-->
</body>
</html>