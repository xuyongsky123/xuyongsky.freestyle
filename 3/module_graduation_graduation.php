<!DOCTYPE html>
<html>
    <head>
    	<?php include("./module_graduation_templethead.php") ?>
        <link href="./css/module_graduation_css/home_page/animate.css" rel="stylesheet">
    </head>
    <body>
        <div id="graduation_login">
			<?php require("./check_login.php"); ?>
		</div>
		<div id="st-container" class="st-container">
			<?php include("./module_graduation_templetmenu.php") ?>
			<div class="st-pusher">
				<div class="st-content"><!-- this is the wrapper for the content -->
					<div class="st-content-inner"><!-- extra div for emulating position:fixed of the menu -->
						<div class="main clearfix fixstyle">
                            <!--文字动画容器Begin-->
                             <section id="animate_style" class="col-1-1" style="z-index=2000;">
                                <div class="playground grid">
                                  <div class="col-1-1 viewport">
                                      <div class="tlt">
                                        <ul class="texts" style="display: none">
                                          <li>还在为自己的毕业设计而担忧吗？赶快行动吧~~</li>
                                        </ul>
                                      </div>
                                  </div>
                                  <div class="col-1-1 controls" style="padding-right: 0;display:none;">
                                    <form class="grid grid-pad">
                                      <div class="control col-1-2">
                                        <label>In Animation</label>
                                        <select data-key="effect" data-type="in"></select>
                                        <select data-key="type" data-type="in">
                                          <option value="">sequence</option>
                                          <option value="reverse">reverse</option>
                                          <option value="sync">sync</option>
                                          <option value="shuffle">shuffle</option>
                                        </select>
                                      </div>
                                      <div class="control col-1-2">
                                        <label>Out Animation</label>
                                        <select data-key="effect" data-type="out"></select>
                                        <select data-key="type" data-type="out">
                                          <option value="">sequence</option>
                                          <option value="reverse">reverse</option>
                                          <option value="sync">sync</option>
                                          <option selected="selected" value="shuffle">shuffle</option>
                                        </select>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                            </section>
                            <!--文字动画容器End-->
							<!--<div id="title_content">还在为自己的毕业设计而担忧吗？赶快行动吧~~</div>-->
                        	<div id="st-trigger-effects" class="column">
								<button data-effect="st-effect-12">点我~开始自己的毕业设计制作之旅吧~</button>
							</div>
						</div><!-- /main -->
                        
					</div><!-- /st-content-inner -->
				</div><!-- /st-content -->
			</div><!-- /st-pusher -->
		</div><!-- /st-container -->
		<?php include("./module_graduation_templeteffect.php") ?>
        
        <script src="./js/jquery-1.9.1.min.js"></script>
        <script src="./js/module_graduation_js/home_page/jquery.fittext.js"></script>
		<script src="./js/module_graduation_js/home_page/jquery.lettering.js"></script>
		<script src="./js/module_graduation_js/home_page/highlight.min.js"></script>
		<script src="./js/module_graduation_js/home_page/jquery.textillate.js"></script>
		<script>
              $(function (){
                var log = function (msg) {
                  return function () {
                    if (console) console.log(msg);
                  }
                }
                $('code').each(function () {
                  var $this = $(this);
                  $this.text($this.html());
                })
            
                var animateClasses = 'flash bounce shake tada swing wobble pulse flip flipInX flipOutX flipInY flipOutY fadeIn fadeInUp fadeInDown fadeInLeft fadeInRight fadeInUpBig fadeInDownBig fadeInLeftBig fadeInRightBig fadeOut fadeOutUp fadeOutDown fadeOutLeft fadeOutRight fadeOutUpBig fadeOutDownBig fadeOutLeftBig fadeOutRightBig bounceIn bounceInDown bounceInUp bounceInLeft bounceInRight bounceOut bounceOutDown bounceOutUp bounceOutLeft bounceOutRight rotateIn rotateInDownLeft rotateInDownRight rotateInUpLeft rotateInUpRight rotateOut rotateOutDownLeft rotateOutDownRight rotateOutUpLeft rotateOutUpRight hinge rollIn rollOut';
            
                var $form = $('.playground form')
                  , $viewport = $('.playground .viewport');
            
                var getFormData = function () {
                  var data = { 
                    loop: true, 
                    in: { callback: log('in callback called.') }, 
                    out: { callback: log('out callback called.') }
                  };
                  
                  $form.find('[data-key="effect"]').each(function () {
                    var $this = $(this)
                      , key = $this.data('key')
                      , type = $this.data('type');
            
                      data[type][key] = $this.val();
                  });
            
                  $form.find('[data-key="type"]').each(function () {
                    var $this = $(this)
                      , key = $this.data('key')
                      , type = $this.data('type')
                      , val = $this.val();
            
                      data[type].shuffle = (val === 'shuffle');
                      data[type].reverse = (val === 'reverse');
                      data[type].sync = (val === 'sync');
                  });
            
                  return data;
                };
            
                $.each(animateClasses.split(' '), function (i, value) {
                  var type = '[data-type]'
                    , option = '<option value="' + value + '">' + value + '</option>';
            
                  if (/Out/.test(value) || value === 'hinge') {
                    type = '[data-type="out"]';
                  } else if (/In/.test(value)) {
                    type = '[data-type="in"]';
                  } 
            
                  if (type) {
                    $form.find('[data-key="effect"]' + type).append(option);        
                  }
                });
            
                $form.find('[data-key="effect"][data-type="in"]').val('fadeInLeftBig');
                $form.find('[data-key="effect"][data-type="out"]').val('hinge');
            
                $('.jumbotron h1')
                  .fitText(0.6)
                  .textillate({ in: { effect: 'flipInY' }});
                
                $('.jumbotron p')
                  .fitText(3.2, { maxFontSize: 18 })
                  .textillate({ initialDelay: 1000, in: { delay: 3, shuffle: true } });
            
                setTimeout(function () {
                    $('.fade').addClass('in');
                }, 250);
            
                setTimeout(function () {
                  $('h1.glow').removeClass('in');
                }, 2000);
            
                var $tlt = $viewport.find('.tlt')
                  .on('start.tlt', log('start.tlt triggered.'))
                  .on('inAnimationBegin.tlt', log('inAnimationBegin.tlt triggered.'))
                  .on('inAnimationEnd.tlt', log('inAnimationEnd.tlt triggered.'))
                  .on('outAnimationBegin.tlt', log('outAnimationBegin.tlt triggered.'))
                  .on('outAnimationEnd.tlt', log('outAnimationEnd.tlt triggered.'))
                  .on('end.tlt', log('end.tlt'));
                
                $form.on('change', function () {
                  var obj = getFormData();
                  $tlt.textillate(obj);
                }).trigger('change');
            
              });

		</script>
	</body>
</html>

