<?php
	/**
	 * Based on Starkers 4.0 Naked Theme
	/* ========================================================================================================================
	
	Required external files
	
	======================================================================================================================== */

	require_once( 'external/starkers-utilities.php' );

	/* ========================================================================================================================
	
	Theme specific settings

	Uncomment register_nav_menus to enable a single menu with the title of "Primary Navigation" in your theme
	
	======================================================================================================================== */

	add_theme_support('post-thumbnails');
	set_post_thumbnail_size( 110, 87, true );
	
	register_nav_menus(array('main' => 'Main Menu'));

	/* ========================================================================================================================
	
	Actions and Filters
	
	======================================================================================================================== */

	add_action( 'wp_enqueue_scripts', 'starkers_script_enqueuer' );

	add_filter( 'body_class', array( 'alink_Utilities', 'add_slug_to_body_class' ) );
	
	add_filter('widget_text', 'do_shortcode');
	
	function umarmy_excerpt_length( $length ) {
	return 24;
		}
	add_filter( 'excerpt_length', 'umarmy_excerpt_length' );

	function umarmy_continue_reading_link() {
		return ' <a href="'. get_permalink() . '">' . __( '<span class="excerpt_more">read more &raquo;</span>', 'umarmy' ) . '</a>';
}

	function wpbsearchform( $form ) {

	    $form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
	    <div>
	    <input type="text" value="' . get_search_query() . '" name="s" id="s" />
	    <input type="submit" id="searchsubmit" value="'. esc_attr__('Go') .'" />
	    </div>
	    </form>';
	
	    return $form;
	}
	
	add_shortcode('wpbsearch', 'wpbsearchform');


	function umarmy_widgets_init() {
		register_sidebar( array(
			'name' => __( 'Sidebar Sub', 'umarmy' ),
			'id' => 'sidebar-sub',
			'description' => __( 'For the sidebar of most subpages', 'umarmy' ),
			'before_widget' => '<div class="widget">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		) );
		
		register_sidebar( array(
			'name' => __( 'Sidebar Blog', 'umarmy' ),
			'id' => 'sidebar-blog',
			'description' => __( 'For the "Whats New" sidebar', 'umarmy' ),
			'before_widget' => '<div class="widget">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		) );
	}
	
	
	add_action( 'widgets_init', 'umarmy_widgets_init' );

	add_action('init', 'umarmy_register_post_type');

	function umarmy_register_post_type() {
		register_post_type('carousel', array(
	        'labels' => array(
	            'name' => 'Front Page Carousel',
	            'singular_name' => 'Gallery',
	            'add_new' => 'Add new carousel gallery',
	            'edit_item' => 'Edit carousel gallery',
	            'new_item' => 'New carousel gallery',
	            'view_item' => 'View carousel gallery',
	            'search_items' => 'Search carousel gallery',
	            'not_found' => 'No carousel galleries found',
	            'not_found_in_trash' => 'No carousel galleries found in Trash'
	        ),
	        'public' => true,
	        'supports' => array(
	            'title',
	            'editor'
	        ),
	    ));
	    
	}

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with an ellipsis and umarmy-ne_continue_reading_link().
 *
 * To override this in a child theme, remove the filter and add your own
 * function tied to the excerpt_more filter hook.
 *
 * @since Twenty Ten 1.0
 * @return string An ellipsis
 */
function umarmy_auto_excerpt_more( $more ) {
	return '' . umarmy_continue_reading_link();
}
add_filter( 'excerpt_more', 'umarmy_auto_excerpt_more' );

	/* ========================================================================================================================
	
	Custom Post Types - include custom post types and taxonimies here e.g.

	e.g. require_once( 'custom-post-types/your-custom-post-type.php' );
	
	======================================================================================================================== */
	


	/* ========================================================================================================================
	
	Scripts
	
	======================================================================================================================== */

	/**
	 * Add scripts via wp_head()
	 *
	 * @return void
	 * @author Keir Whitaker
	 */

	function starkers_script_enqueuer() {
		wp_register_script( 'site', get_template_directory_uri().'/js/site.js', array( 'jquery' ) );
		wp_enqueue_script( 'site' );

		wp_register_style( 'screen', get_stylesheet_directory_uri().'/style.css', '', '', 'screen' );
        wp_enqueue_style( 'screen' );
	}	

	/* ========================================================================================================================
	
	Comments
	
	======================================================================================================================== */

	/**
	 * Custom callback for outputting comments 
	 *
	 * @return void
	 * @author Keir Whitaker
	 */
	function starkers_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment; 
		?>
		<?php if ( $comment->comment_approved == '1' ): ?>	
		<li>
			<article id="comment-<?php comment_ID() ?>">
				<?php echo get_avatar( $comment ); ?>
				<h4><?php comment_author_link() ?></h4>
				<time><a href="#comment-<?php comment_ID() ?>" pubdate><?php comment_date() ?> at <?php comment_time() ?></a></time>
				<?php comment_text() ?>
			</article>
		<?php endif;
	}