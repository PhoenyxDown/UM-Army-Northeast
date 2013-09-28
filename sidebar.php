<div class="widget">
	<h3>Quick Contact Form</h3>
	<div id="quick_connect">
		
		<?php echo do_shortcode('[contact-form-7 id="117" title="Quick Connect Form"]'); ?>
	</div>
</div>

<?php
	if ( is_active_sidebar( 'sidebar-sub' ) ) :
	     dynamic_sidebar( 'sidebar-sub' );
	endif;
?>
