<?php
/**
 */
?>




<?php alink_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<div id="page_header">
	<div class="shadowleft"></div>
	<div class="shadowright"></div>
	
	<div id="page_title" class="wrap">
		<h2>What's New</h2>
		<?php if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb('<p id="breadcrumbs">','</p>');
		} ?>
	</div>
	
	

</div><!--page_header!-->

<div id="sub_content" class="wrap">
	<div id="sidebar">
		<?php get_sidebar('blog'); ?>
	</div><!--sidebar!-->
	
	<div id="content">
		<p class="blog_date"><?php the_time('l, F j, Y'); ?></p>
		<h3><?php the_title(); ?></h3>
		<?php the_content(); ?>
	</div><!--content!-->
	
	
	
</div><!--sub_content!-->

<?php endwhile; wp_reset_query(); ?>
<div class="clear_both"></div>


<?php alink_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>