            </div>

            <footer id="bottom">
            	<div class="container">
	                <div class="grid 1of3">
	                	<small>
	                		<p>
		                		&copy; brixel.be.<br />
		                		All rights reserved.
	                		</p>
	                		<p>
		                		Built with <a href="http://melodycss.co" target="_blank">Melody</a><br />
		                		Used to be Powered by <a href="http://anchorcms.com" target="_blank">Anchor CMS</a>
	                		</p>
	                	</small>
	                </div>

					<div class="grid 1of3 offset-4">
						<small>
			                <ul role="navigation">
			                    <li><a href="%TODO%">RSS</a></li>

			                    <li><a href="http://wiki.brixel.be" title="Administer your site!">Admin area</a></li>

			                    <li><a href="http://brixel.be" title="Return to my website.">Home</a></li>
			                </ul>
			            </small>
	        		</div>
	        	</div>
            </footer>
        </div>

	    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	    <script>
	    	jQuery(document).ready(function($) {
	    		if($('nav .latest-post').hasClass('current')) {
	    			$('nav .latest-post').siblings('a').removeClass('current');
	    		}

	    		$('a[href="#menu"]').click(function() {
	    			$('a[href="#menu"]').toggleClass('current');
	    			$('.slidey').slideToggle(300);
	    		});

	    		$('section.content ol').not('.items').children('li').wrapInner('<p>');

				$('section.content img').each(function(){
					var act = $(this);
					var src = act.attr('src');
					var caption = act.attr('alt');
					var figureClass = act.attr('title');

					if (!figureClass) {
						figureClass = ' ';
					}

					act.wrap('<figure class="image-wrapper ' + figureClass + '" />');

					if (caption) {
						act.after('<figcaption>' + caption + '</figcaption>');
						act.attr('alt', 'Image');
					} else {
						act.removeAttr('alt');
					}

					if (figureClass) {
						act.removeAttr('title');
					}

					if (!src.substring(0,4).match('http') && !src.substring(0,5).match('https') && !src.substring(0,2).match('//')) {
						act.attr('src', 'http://brixel.be/<?php echo $base_url ?>/content/' + src);
					}
				});



			$(".answer, article.sticky p").css({"display":"none"});

	    	});
		
		$("article.sticky .buttonlink").click(function(event){
			event.preventDefault();
			$(this).parent().parent().children("p").slideToggle();
		});
		$(".items .question").click(function(){
			trigger = "#" + $(this).attr("triggerfor");
			$(trigger).slideToggle();

		});

	    </script>

		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script>
				jQuery(document).ready(function($) {
					$('body').addClass('ie');
				});
			</script>
		<![endif]-->
    </body>
</html>
