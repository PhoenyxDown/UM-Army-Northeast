<?php
/**
 * Template Name: Home
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
			<?php query_posts(array(
				'post_type' => 'carousel',
				'posts_per_page' => '1'
			)); ?>
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); 	?>
			<h3><?php the_title(); ?></h3>
			<div class="insetbox gallery_slider">
			<div class="carousel_images">
				<ul class="bxslider">
					 
						<?php 
							//Put images from post in to array $images. Order by menu order defined in post gallery
							$images = get_children( array('post_parent' => $post->ID, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => 'ASC', 'orderby' => 'menu_order ID') );
					 
					 		if (isset($images))
							{
					 			$count=0;
					 			foreach( $images as $image )
									{	
					 		
									$imageID = $image->ID;
									//get thumbnail and large image url for image
									$smImageSrc = wp_get_attachment_image_src($imageID, $size='thumbnail', $icon = false); 
									$largeImageSrc = wp_get_attachment_image_src($imageID, $size='large', $icon = false); 
									
									echo "<a href='$largeImageSrc[0]' rel='lightbox'><img src='$smImageSrc[0]'></a>";
									
									$count++;
									
									} //foreach
									
									
									
							}
		 
						?>
												
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