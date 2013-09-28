<?php
/**
 * Based on Starkers Naked Theme
 */
?>
<?php alink_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

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


<?php alink_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>