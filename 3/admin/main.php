<!DOCTYPE html>
<html long="zh-CN">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->

        <link href="../css/bootstrap_css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    
        <link href="media/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
    
        <link href="media/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    
        <link href="media/css/style-metro.css" rel="stylesheet" type="text/css"/>
    
        <link href="media/css/style.css" rel="stylesheet" type="text/css"/>
    
        <link href="media/css/style-responsive.css" rel="stylesheet" type="text/css"/>
    
        <link href="media/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>
    
        <link href="media/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    
        <!-- END GLOBAL MANDATORY STYLES -->
    
        <!-- BEGIN PAGE LEVEL STYLES --> 
    
    
        <!-- END PAGE LEVEL STYLES -->
        
        	<link href="./css/main_style.css" rel="stylesheet" />
        
        <title>后台主界面</title>
        <style type="text/css">
        </style>	
    </head>
    <body>
        <!-- BEGIN HEADER -->

	<div class="header navbar navbar-inverse navbar-fixed-top">

		<!-- BEGIN TOP NAVIGATION BAR -->

		<div class="navbar-inner">

			<div class="container-fluid">

				<!-- BEGIN LOGO -->

				<a class="brand" href="index.html">

				<img src="media/image/logo.png" alt="logo"/>

				</a>

				<!-- END LOGO -->

				<!-- BEGIN RESPONSIVE MENU TOGGLER -->

				<a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">

				<img src="media/image/menu-toggler.png" alt="" />

				</a>          

				<!-- END RESPONSIVE MENU TOGGLER -->            

				<!-- BEGIN TOP NAVIGATION MENU -->              

				<ul class="nav pull-right">
					<!-- BEGIN USER LOGIN DROPDOWN -->

					<li class="dropdown user">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown">

						<img alt="" src="media/image/avatar1_small.jpg" />

						<span class="username">Bob Nilson</span>

						<i class="icon-angle-down"></i>

						</a>

						<ul class="dropdown-menu">

							<li><a href="extra_profile.html"><i class="icon-user"></i> My Profile</a></li>

							<li><a href="page_calendar.html"><i class="icon-calendar"></i> My Calendar</a></li>

							<li><a href="inbox.html"><i class="icon-envelope"></i> My Inbox(3)</a></li>

							<li><a href="#"><i class="icon-tasks"></i> My Tasks</a></li>

							<li class="divider"></li>

							<li><a href="extra_lock.html"><i class="icon-lock"></i> Lock Screen</a></li>

							<li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>

						</ul>

					</li>

					<!-- END USER LOGIN DROPDOWN -->

				</ul>

				<!-- END TOP NAVIGATION MENU --> 

			</div>

		</div>

		<!-- END TOP NAVIGATION BAR -->

	</div>

	<!-- END HEADER -->
        
        
        
    <!-- END FOOTER -->

	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

	<!-- BEGIN CORE PLUGINS -->

	<script src="../js/jquery-1.9.1.min.js" type="text/javascript"></script>

	<script src="media/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>

	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->

	<script src="media/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      

    <script src="../js/bootstrap_js/bootstrap.min.js"></script>

	<!--[if lt IE 9]>

	<script src="media/js/excanvas.min.js"></script>

	<script src="media/js/respond.min.js"></script>  

	<![endif]-->   

	<script src="media/js/jquery.slimscroll.min.js" type="text/javascript"></script>

	<script src="media/js/jquery.blockui.min.js" type="text/javascript"></script>  

	<script src="media/js/jquery.cookie.min.js" type="text/javascript"></script>

	<script src="media/js/jquery.uniform.min.js" type="text/javascript" ></script>

	<!-- END CORE PLUGINS -->

	<!-- BEGIN PAGE LEVEL PLUGINS -->

	<script src="media/js/jquery.vmap.js" type="text/javascript"></script>   

	<script src="media/js/jquery.vmap.russia.js" type="text/javascript"></script>

	<script src="media/js/jquery.vmap.world.js" type="text/javascript"></script>

	<script src="media/js/jquery.vmap.europe.js" type="text/javascript"></script>

	<script src="media/js/jquery.vmap.germany.js" type="text/javascript"></script>

	<script src="media/js/jquery.vmap.usa.js" type="text/javascript"></script>

	<script src="media/js/jquery.vmap.sampledata.js" type="text/javascript"></script>  

	<script src="media/js/jquery.flot.js" type="text/javascript"></script>

	<script src="media/js/jquery.flot.resize.js" type="text/javascript"></script>

	<script src="media/js/jquery.pulsate.min.js" type="text/javascript"></script>

	<script src="media/js/date.js" type="text/javascript"></script>

	<script src="media/js/daterangepicker.js" type="text/javascript"></script>     

	<script src="media/js/jquery.gritter.js" type="text/javascript"></script>

	<script src="media/js/fullcalendar.min.js" type="text/javascript"></script>

	<script src="media/js/jquery.easy-pie-chart.js" type="text/javascript"></script>

	<script src="media/js/jquery.sparkline.min.js" type="text/javascript"></script>  

	<!-- END PAGE LEVEL PLUGINS -->

	<!-- BEGIN PAGE LEVEL SCRIPTS -->

	<script src="media/js/app.js" type="text/javascript"></script>

	<script src="media/js/index.js" type="text/javascript"></script>        

	<!-- END PAGE LEVEL SCRIPTS -->  

	<script>

		jQuery(document).ready(function() {    

		   App.init(); // initlayout and core plugins

		   Index.init();

		   Index.initJQVMAP(); // init index page's custom scripts

		   Index.initCalendar(); // init index page's custom scripts

		   Index.initCharts(); // init index page's custom scripts

		   Index.initChat();

		   Index.initMiniCharts();

		   Index.initDashboardDaterange();

		   Index.initIntro();

		});

	</script>

	<!-- END JAVASCRIPTS -->

<script type="text/javascript">  var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-37564768-1']);  _gaq.push(['_setDomainName', 'keenthemes.com']);  _gaq.push(['_setAllowLinker', true]);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();</script></body>

<!-- END BODY -->
    </body>
</html>