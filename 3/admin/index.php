<!DOCTYPE html>
<html long="zh-CN">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>自由风后台登陆界面</title>
    <style type="text/css">
			body {
				background-color: #326696;
				margin: 0px;
				overflow: hidden;
				font-family:Monospace;
				font-size:13px;
				text-align:center;
				font-weight: bold;
				text-align:center;
			}
			a {
				color:#0078ff;
			}
        #login_container{
            position:fixed;
            top:50%;
            /*left:55%;*/
            height:200px;
            width:500px;
            background:transparent;
            margin-top:-200px;
            box-shadow:0px 0px 25px 12px #C0C0C0;
            border-radius:7px;
        }
        #left_container{
            display:inline-block;
            background:lightgreen;
        }
        #right_container{
        	display:inline-block;
            background:yellow;
            position:absolute;
            top:0;
            right:0;
            height:200px;
            width:300px;
        }
        #line{
            display:inline-block;
            border-left:1px solid #969696;
            height:200px;
            margin-right:300px;
        }
        #user_info label{
            position:absolute;
            left:45px;
            font-weight:bold;
            font-size:21px;
        }
        #username_info label{
            top:-25px;
        }
        #password_info label{
            top:-25px;
        }
        #user_info img{
            float:left;
            display:block;
            height:20px;
            width:20px;
            margin-left:45px;
        }
        #user_info input{
            float:left;
            width:190px;
            background:transparent;
        }
        #username_info{
            position:absolute;
            top:50px;
        }
        #password_info{
            position:absolute;
            top:105px;
        }
        #loginButton{
            position:absolute;
            left:0;
            bottom:0;
            height:50px;
            width:100%;
        }
        #clear{
            clear:both;
        }
        input:-webkit-autofill,
    	textarea:-webkit-autofill,
    	select:-webkit-autofill{
            -webkit-box-shadow: 0 0 0 1000px transparent inset;
        }
        #loginButton input{
            width:105px;
        	background:none;
            border-radius:20px;
            border:1px solid;
            border-color:#808080;
            box-shadow:0px 0px 10px 0px #c0c0c0 inset;
            font-weight:bold;
        }
	</style>
    </head>
    <body>
        <div id="login_container">
            <div id="left_container"></div>
            <span id="line"></span>
            <div id="right_container">
                <form>
                	<div id="user_info">
                        <div id="username_info">
                        	<label>Username:</label>
                            <img src="../images/user.png" /><input id="login_username" type="text" name="user" maxlength="32" placeholder="Username" />
                        </div>
                        <div id="password_info">
                        	<label>Password:</label>
                            <img src="../images/pwd.png" /><input id="login_password" type="password" name="pwd" maxlength="32" placeholder="Password" />
                        </div>
                        <div id="clear"></div>
                    </div>
                    <div id="loginButton">
                        <input id="submit" type="submit" name="submit" value="登录" />
                        <input id="reset" type="reset" name="reset" value="重置" />
                	</div>
                </form>
            </div>
        </div>
    	<!--HTML5背景动态云效果-Begin-->
        <script type="text/javascript" src="../js/webgl_clouds_js/three.min.js"></script>
        <script type="text/javascript" src="../js/webgl_clouds_js/Detector.js"></script>
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
    
                    var texture = THREE.ImageUtils.loadTexture( '../images/home_bg/cloud10.png', null, animate );
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