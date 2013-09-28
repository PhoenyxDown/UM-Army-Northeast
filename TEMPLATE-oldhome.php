<?php
/**
 */
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<div id="home_slider">
	<div class="shadowleft"></div>
	<div class="shadowright"></div>
	<div id="slider_content" class="wrap">
		<?php putRevSlider("slider1") ?> 
	</div><!--slider_content!-->
</div><!--home_slider!-->

<div id="tab_blurb" class="wrap">
	<p>Providing Christ-centered, quality youth work camps that serve people in
	need and promote spiritual growth and leadership development in youth.</p>
</div><!--tab_blurb!-->

<div id="home_content" class="wrap">
	<div id="home_left">
		<h3>Latest News &amp; Announcements</h3>
				<?php query_posts('posts_per_page=4'); ?>
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				
						<div id="post-<?php the_ID(); ?>" class="home_excerpt">
							<div class="thumb_sm">
								<?php
									// Must be inside a loop.
									
									if ( has_post_thumbnail() ) {
										the_post_thumbnail();
									}
									else {
										echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/thumbplaceholder.jpg" height="86px" width="110px"/>';
									}
									?>
							</div>
							<h4 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
							<div class="entry-excerpt">
								<?php the_excerpt('read more...'); ?>

							</div><!-- .entry-excerpt -->
							<div class="entry-date">
		                        <p>posted on <?php the_time('M j, Y'); ?></p>    
	                    	</div>
						</div><!-- #post-## -->
			<?php endwhile; wp_reset_query(); ?>
			<p class="more" style="float:right;"><a class="bigredbox" href="<?php echo home_url(); ?>/whats-new/">Archives</a></p>
	</div><!--home_left"!-->
	
	<div id="home_right">
		<div id="home_about">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<h3>Welcome to U.M. ARMY - Northeast</h3>
				<?php the_content(); ?>
			<?php endwhile; wp_reset_query(); ?>

		<p class="more"><a class="bigredbox" href="">Read More</a></p>
		
		</div><!--home_about!-->
		
		<div id="home_gallery">
			<h3>2012 Camp Season Gallery</h3>
			<div class="insetbox gallery_slider">
			<div class="carousel_images">
				<ul class="bxslider">
					<?php query_posts(array(
						'post_type' => 'carousel'
					)); ?>
					<?php if ( have_posts() ) while ( have_posts() ) : the_post(); 	?> 
						<?php 
							$attachment_id = get_field('carousel_image');
							$size = "thumbnail";
							$image = wp_get_attachment_image_src( $attachment_id, $size );
							$size2 = "large";
							$image2 = wp_get_attachment_image_src( $attachment_id, $size2 );
						?>
							<li>
								<a href="<?php echo $image2[0]; ?>" rel="lightbox">
									<img src="<?php echo $image[0]; ?>">
								</a>
							</li>
					<?php endwhile; wp_reset_query(); ?>	 
				</ul>
			</div><!--carousel_images!-->
				<script type="text/javascript">	
					$(document).ready(function(){
						 $('.bxslider').bxSlider({
						 	  pager: false,
							  minSlides: 4,
							  maxSlides: 4,
							  slideWidth: 120,
							  slideMargin: 10
							});
						});
				</script>
			
			</div>
			
		</div><!--home_gallery-->
		
	</div><!--home_right!-->

</div><!--home_content!-->

<div class="clear_both"></div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>