<?php
	session_start();
	header("Content-Type:text/html;charset=utf-8");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
        <meta name="keywords" content="自由风,dream,sinaapp.com,SAE,大学生电商,大学淘宝店,大学京东店" />
    	<meta name="description" content="自由风,freestyle,徐勇个人开发网站,xuyongsky官方网站,大学生电商,大学淘宝店,大学京东店">
		<title>博客文章专栏</title>
        <link rel="stylesheet" href="./css/module_blog_style.css" />
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

                var texture = THREE.ImageUtils.loadTexture( './images/home_bg/cloud10.png', null, animate );
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
					<?php 
						if(isset($_GET['filename'])){
		
							//这里的$_SESSION['username']并不是没有意义，而是唯一标识某个用户的文章，区别于其他用户的同名文章
							//session_start();
							
							$user_search=$_SESSION['username'];
							$file_search=$_GET['filename'];
							$sql_search="select * from user_article where filename = '$file_search' and username='$user_search' ";
							$array_search=$operatedb->Execsql($sql_search,$conn);
                            
                            if($array_search){
                            	foreach($array_search as $item_search){
                                    echo '<article>';
                                    echo $item_search['article'];	
                                    echo '</article>';
                                }
                            }else{
                            	echo '<article>';
                                echo "查询数据库中文章时出错，我们会尽快处理，请谅解...";	
                                echo '</article>';
                            }
							
                        }else if(isset($_GET['public_filename'])){
                        	$public_filename=$_GET['public_filename'];
                            $public_sql="select * from public_article where public_filename = '$public_filename'";
                            $public_array=$operatedb->Execsql($public_sql,$conn);

                            
                            if($public_array){
                                foreach($public_array as $item_public){
                                	echo '<article>';
                                    echo $item_public['public_article'];
                                    echo '</article>';
                                }
                            }else{
                            	echo '<article>';
                                echo "查询数据库中文章时出错，我们会尽快处理，请谅解...";	
                                echo '</article>';
                            }
                        }else{
							echo '<article>';
							echo "公共文章，不属于具体某人所有...";
							echo '</article>';
						}
					?>
			</div>
		</section>
                
        <!--footer-->
           <?php include("./module_blog_templetfooter.php"); ?>
                
		<div id="top">
			<a href="javascript:window.scrollTo(0,0);" >回到顶部</a>
		</div>
        
	</body>
</html>