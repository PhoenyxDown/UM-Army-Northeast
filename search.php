<?php
/**
 * Search results page
 * 
 * Please see /external/starkers-utilities.php for info on alink_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	alink
 * @since 		alink 4.0
 */
?>
<?php alink_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ): ?>
<div id="page_header">
	<div class="shadowleft"></div>
	<div class="shadowright"></div>
	
	<div id="page_title" class="wrap">
		<h2>Search Results</h2>
	</div><!--page_title-->
</div><!--page-header-->

<div id="sub_content" class="wrap">
	<div id="sidebar">
		<?php get_sidebar('blog'); ?>
	</div><!--sidebar!-->
	<div id="content">
	<h3>Search Results for '<?php echo get_search_query(); ?>'</h3>	
	<ol>	
		<?php while ( have_posts() ) : the_post(); ?>
		<li>
			<article>
				<p class="blog_date"><?php the_time('l, F j, Y'); ?></p>
					<h3 class="blog_title"><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
					<?php the_excerpt('50'); ?>
			</article>
		</li>
	<?php endwhile; ?>
	</ol>
	<?php else: ?>
<div id="page_header">
	<div class="shadowleft"></div>
	<div class="shadowright"></div>
	
	<div id="page_title" class="wrap">
		<h2>Search Results</h2>	
	</div><!--page_title-->
</div><!--page-header-->

<div id="sub_content" class="wrap">
	<div id="sidebar">
		<?php get_sidebar('blog'); ?>
	</div><!--sidebar!-->
	<div id="content">
	<h3>No results found for '<?php echo get_search_query(); ?>'</h3>	
		
	<?php endif; ?>
	</div><!--content!-->
</div><!--sub_content!-->
<?php alink_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>