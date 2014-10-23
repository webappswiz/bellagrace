<?php
/**
 * The template for displaying the footer
 
 */
?>
	</div><!--wrapper-->
	

		
	<footer>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="row">
						<div class="col-md-6">
							<?php wp_nav_menu( array( 'theme_location' => 'footer-menu1', 'menu_class' => 'menu-1', ) ); ?>
								<!--<ul class="menu-1">
									<li>who we are</li>
									<li>store location</li>
									<li>contributer</li>
									<li>press room</li>
								</ul>-->
							
							<div class="single-post">
								<p><a href="http://wholesale.stampington.com/"><spam>Carry<italic> Bella Grace</italic> in</spam><spam style="top: 5px;position:relative;"> your store</spam></a></p>
								<p>What readers are saying about <italic> Bella Grace</italic></p>
								<p>Visit the publishers website <a href="http://stampington.com/">stampington.com</a></p>
							</div>
						</div>
						<div class="col-md-5 get">
							<div class="row">
								<div class="col-md-12">
									<h3>get in touch</h3>
									
										<?php wp_nav_menu( array( 'theme_location' => 'footer-menu2', 'menu_class' => 'menu-2', ) ); ?>
										<!--<ul class="menu-2">
											<li>who we are</li>
											<li>store location</li>
											<li>contributer</li>
											<li>press room</li>
										</ul>-->
									
								</div>
								<div class="col-md-12">
									<h3>join the movement</h3>
										<?php wp_nav_menu( array( 'theme_location' => 'footer-menu3', 'menu_class' => 'menu-2', ) ); ?>
										<!--<ul  class="menu-2">
											<li>who we are</li>
											<li>store location</li>
											<li>contributer</li>
											<li>press room</li>
										</ul>-->
									
								</div>
							</div>
						</div>
					</div><!--col-md-6-->
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="row">
						<div class="col-md-7">
							<div class="newsletter">
								<?php dynamic_sidebar( 'sidebar-2' ); ?>
								<!-- <form class="form-inline" role="form">
								  <div class="form-group">
									<input type="email" class="form-control email-input" id=			"exampleInputEmail2" placeholder="Enter email">
								  </div>
								  
								  <button type="submit" class="btn btn-default btn-subscribe">Subscribe</button>
								</form> -->
							</div>
						</div>
						<div class="col-md-5" style="float: right;">
							<div class="social-icon">
								<h3>connect</h3>
								<ul>
									<li><a href="https://www.facebook.com/stampington">
										<img src="<?php bloginfo('template_url') ?>/images/social_03.png" />
									</a></li>
									<li><a href="https://plus.google.com/u/0/118386597075213082030/posts">
										<img src="<?php bloginfo('template_url') ?>/images/social_05.png" />
									</a></li>
									<li><a href="https://twitter.com/stampington">
										<img src="<?php bloginfo('template_url') ?>/images/social_07.png" />
									</a></li>
									<li><a href="http://www.pinterest.com/stampington/">
										<img src="<?php bloginfo('template_url') ?>/images/social_14.png" />
									</a></li>
									<li><a href="https://www.youtube.com/user/StampingtonCo">
										<img src="<?php bloginfo('template_url') ?>/images/social_09.png" />
									</a></li>
									<li><a href="http://instagram.com/stampington">
										<img src="<?php bloginfo('template_url') ?>/images/social_11.png" />
									</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8 pull-right">
							<div class="testmonial">
								<?php dynamic_sidebar( 'sidebar-1' ); ?>
							</div>
							
						</div>
					</div>
				</div><!--col-md-6-->
			</div>
			<div class="row">
				<div class="col-md-12 copyright">
					<p>&copy; 2014 Stampington & Company</p>
				</div>
			</div>
		</div>
	</footer>

	<!-- scripts for lightbox -->
		<?php if (is_page( 'home' )) : ?>
		
	<?php endif;?>
	
	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="<?php echo bloginfo('template_url');?>/source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url');?>/source/jquery.fancybox.css?v=2.1.5" media="screen" />

	

	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="<?php echo bloginfo('template_url');?>/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

	<script type="text/javascript">
		$.noConflict();
jQuery( document ).ready(function( $ ) {
			/*
			 *  Simple image gallery. Uses default settings
			 */
			 $('.menu-bar > li').click(function(){
			 	
			    $(this).children('.sub-menu').slideToggle('slow');
			})



			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


		});
	</script>





	<!--
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.js"></script>	
<script src="<?php echo bloginfo('template_url');?>/js/bootstrap.js" type="text/javascript" /></script>
	-->
	<?php //wp_footer(); ?>
</body>
</html>