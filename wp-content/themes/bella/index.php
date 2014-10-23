<?php
/**
 * The main template file
 *
 
 */

get_header(); ?>
	<div class="slider"></div>
	<div class="container-fluid">
		<div class="row wraps">
			<h2>Bring more <span>Bella Grace</span> into your life: Subscribe and Save!</h2>
			<div class="col-md-2">
				<div class="text-widgt">
					<p><span>Bella Grace</span> is meant to be savored. It is meant to get tossed in your beach bag, or tucked under your pillow to enjoy before bed.<label> It is meant to be read over and over again</label>. It is meant to be written in and dog-eared. It is meant to inspire you to discover magic in ordinary moments and accompany you on this 
beautiful adventure that is life. If you believe that life should be lived with a full heart and open eyes,<label> come join us</label>, and get lost in the beautifully penned stories and soul stirring photographs that make up <span>Bella Grace</span>.</p>
				</div>
			</div>
			<div class="col-md-8">
				<div class="row">
					<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
						<div class="col-md-4 post-grid">
				
						<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
						<div class="post-thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>
						<?php endif; ?>

						<h4 class="post-title"><?php the_title(); ?></h4>
				
						<?php the_content(); ?>
					

					
			

				</div>
			<?php endwhile; ?>
				</div>
			</div><!--col-md-8-->
			<div class="col-md-2">zxvz</div><!--col-md-2-->
		</div>
		
		
		<div class="footer-divison"></div>
	</div>
	

<?php //get_sidebar(); ?>
<?php get_footer(); ?>