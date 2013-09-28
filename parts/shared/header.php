
<header>
	<div id="header_redstripe">
		<div class="wrap">	
			<p>
				<a href="http://umarmy.org/" title="U.M. ARMY National Site" target="_blank">National</a> 
				<span class="header_separator">|</span> 
				<a href="http://www.facebook.com/umarmynortheast" title="Like us on Facebook" target="_blank">
					<img src="<?php bloginfo('template_directory'); ?>/images/social_fb.png"></a>
				<a href="" title="Follow us on Twitter" target="_blank">
					<img src="<?php bloginfo('template_directory'); ?>/images/social_twit.png"></a>
				<a href="" title="Visit us on LinkedIn" target="_blank">
					<img src="<?php bloginfo('template_directory'); ?>/images/social_li.png"></a>
				<a href="" title="Watch us on YouTube" target="_blank">
					<img src="<?php bloginfo('template_directory'); ?>/images/social_yt.png"></a>
				<a href="" title="Visit us on Google+" target="_blank">
					<img src="<?php bloginfo('template_directory'); ?>/images/social_gplus.png"></a>
			</p>
		</div>	
	</div>
	<div id="headerbanner" class="wrap">
			
			<div id="headerlogo_title">
			
				<a id="headerlogo" href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>">
					<?php bloginfo('name'); ?>
				</a>
			
				
			</div>
			
			<div id="menu">
				<?php wp_nav_menu( array('menu' => 'Main Menu' )); ?>
			</div><!--headernav!-->
		</div><!--headerbanner!-->
</header>
