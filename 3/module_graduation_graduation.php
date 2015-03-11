<!DOCTYPE html>
<html>
    <head>
    	<?php include("./module_graduation_templethead.php") ?>
    </head>
    <body>
		<div id="st-container" class="st-container">
			<nav class="st-menu st-effect-12" id="menu-12">
				<h2 class="icon icon-stack">Sidebar</h2>
				<ul>
					<li><a class="icon icon-data" href="#">Data Management</a></li>
					<li><a class="icon icon-location" href="#">Location</a></li>
					<li><a class="icon icon-study" href="#">Study</a></li>
					<li><a class="icon icon-photo" href="#">Collections</a></li>
					<li><a class="icon icon-wallet" href="#">Credits</a></li>
				</ul>
			</nav>

			<div class="st-pusher">
				<div class="st-content"><!-- this is the wrapper for the content -->
					<div class="st-content-inner"><!-- extra div for emulating position:fixed of the menu -->
						<div>content is here...</div>
						<div class="main clearfix">
							<div id="st-trigger-effects" class="column">
								<button data-effect="st-effect-12">效果十二</button>
							</div>
						</div><!-- /main -->
					</div><!-- /st-content-inner -->
				</div><!-- /st-content -->
			</div><!-- /st-pusher -->
		</div><!-- /st-container -->
		<?php include("./module_graduation_templeteffect.php") ?>
	</body>
</html>

