<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<div id="page_header">
	<div class="shadowleft"></div>
	<div class="shadowright"></div>
	
	<div id="page_title" class="wrap">
		<h2>404 Error</h2>
		
	</div>
	
	

</div><!--page_header!-->

<div id="sub_content" class="wrap">
	<div id="sidebar">
		<?php get_sidebar(); ?>
	</div><!--sidebar!-->
	<div id="content">
		<h3>Sorry.  The page you are looking for is not found.</h3>
		<a href="<?php echo home_url(); ?>">Return Home</a>
	</div><!--content!-->
	
	
	
</div><!--sub_content!-->

<div class="clear_both"></div>


<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>