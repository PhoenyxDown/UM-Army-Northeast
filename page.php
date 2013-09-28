<?php
/**
 * Based on Starkers 4.0 Naked Theme
 */
?>
<?php alink_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<div id="page_header">
	<div class="shadowleft"></div>
	<div class="shadowright"></div>
	
	<div id="page_title" class="wrap">
		<h2><?php the_title(); ?></h2>
		<?php if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb('<p id="breadcrumbs">','</p>');
		} ?>
	</div>
	
	

</div><!--page_header!-->

<div id="sub_content" class="wrap">
	<div id="sidebar">
		<?php get_sidebar(); ?>
	</div><!--sidebar!-->
	<div id="content">
		<?php the_content(); ?>
	</div><!--content!-->
	
	
	
</div><!--sub_content!-->

<?php endwhile; wp_reset_query(); ?>
<div class="clear_both"></div>

<?php alink_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>