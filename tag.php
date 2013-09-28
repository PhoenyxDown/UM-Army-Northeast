<?php
/**
 * Based on Starkers 4.0 Naked Theme
 */
?>
<?php alink_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ): ?>
<div id="page_header">
	<div class="shadowleft"></div>
	<div class="shadowright"></div>
	
	<div id="page_title" class="wrap">
		<h2>Tag Archive: <?php echo single_tag_title( '', false ); ?></h2>
	</div><!--page_title-->
</div><!--page-header-->

<div id="sub_content" class="wrap">
	<div id="sidebar">
		<?php get_sidebar('blog'); ?>
	</div><!--sidebar!-->
	<div id="content">
		<?php while ( have_posts() ) : the_post(); ?>
			
				<article>
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
					</div><!--thumb-->
					<p class="blog_date"><?php the_time('l, F j, Y'); ?></p>
					<h3 class="blog_title"><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
					<?php the_excerpt('50'); ?>
				</article>
				
		<?php endwhile; ?>
		<?php else: ?>
		<h2>No posts to display in <?php echo single_cat_title( '', false ); ?></h2>
		<?php endif; ?>
	</div><!--content!-->
</div><!--sub_content!-->

<?php alink_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>


