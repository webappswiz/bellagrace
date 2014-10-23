
<?php
/*
Template Name: homepage
*/
?>
<?php get_header(); ?>
	<div class="banner-slider">
		<?php echo do_shortcode('[wonderplugin_carousel id="2"]'); ?>

	</div>
	<div class="container-fluid">
		<div class="row wraps">
			<h2><?php the_field( "main_heading" );
?></h2>
			<div class="col-md-2">
				<div class="text-widgt">
					<?php the_field( "left_part" );
?>
				</div>
				<img class="left_content_border" src="<?php bloginfo('template_url') ?>/images/left_content_border.jpg"/>
			</div>
			<div class="col-md-8">
				<div id="slider" class="row">
					<?php

					if( get_field('middle_cont') ): ?>

						<?php while( has_sub_field('middle_cont') ): ?>
							
							<div class="col-md-4 col-sm-4 col-xs-6 post-thumbnail">
								<?php
					
									if (get_sub_field('image')) { ?>
										<div class="post-thumbnail_content">
										<a target="_blank" href="<?php if (get_sub_field('link')) {the_sub_field('link');}else{echo "#";}?>">
										<img src="<?php the_sub_field('image'); ?>" alt="" />
										</a>
										</div>
								<?php }elseif (get_sub_field('text')) { ?>
									<div class="post-thumbnail_content">
									<a target="_blank" href="<?php if (get_sub_field('link')) {the_sub_field('link');}else{echo "#";}?>">
									<p><?php the_sub_field('text'); ?></p>
									</a>
									</div>

								<?php }elseif (get_sub_field('video')) { ?>
									<div class="post-thumbnail_content">	
									<div class="video-link">
										<a class="fancybox-media" href="<?php the_sub_field('video'); ?>">
											 <i class="fa fa-spinner fa-spin fa-4x"></i><br>
											Click here to watch video
										</a>
									</div>
									</div>
								<?php } ?>

								<h4 class="post-title"><?php the_sub_field('bottom_text'); ?></h4>

							</div>

						<?php endwhile; ?>

					<?php endif; 

					
					
					?>
				
					
			
				</div>
			</div><!--col-md-8-->
			<div class="col-md-2"></div><!--col-md-2-->
		</div>
		
		
		
	</div>
	<div class="footer-carousel">
			
				<h1>You'll also adore:</h1>
				<?php echo do_shortcode('[wonderplugin_carousel id="1"]'); ?>
				<?php //echo do_shortcode('[carousel-horizontal-posts-content-slider]'); ?>
			
		</div>
		<div class="footer-divison"></div>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>