	<footer>
	
		<div id="widget_footer">
			<div class="shadowleft"></div>
			<div class="shadowright"></div>
			<div class="wrap">
				<div class="footer-widget footer-one">
					<h3>U.M. ARMY - Northeast</h3>
					<p>43 Stone Ridge Rd.<br />
					Westford,MA 01886			
					</p>
					
					<p>(p) 978.692.5786</p>			
				
					<p><strong>Lorraine MacPherson</strong><br />
					   <em>Executive Director</em>
					</p>
					
					<p><strong><a href="mailto:lorraine@umarmy.org">lorraine@umarmy.org</a></strong></p>
				
				</div><!--Footer Widget One!-->
				
				<div class="footer-widget footer-two">
					<h3>Pages</h3>
					<p>
					<strong>Camp Info</strong><br />
					<a href="<?php echo home_url(); ?>/camp-info/upcoming-camps" title="Upcoming Camps">Upcoming Camps</a><br />
					<a href="<?php echo home_url(); ?>/camp-info/training" title="Training">Training</a><br />
					<a href="<?php echo home_url(); ?>/camp-info/host-churches" title="Host Churches">Host Churches</a><br />
					<a href="<?php echo home_url(); ?>/camp-info/camp-experience" title="Camp Experience">Camp Experience</a><br />
					<a href="<?php echo home_url(); ?>/camp-info/referral-agencies" title="Referral Agencies">Referral Agencies</a>
					</p>
					
					<p><strong><a href="<?php echo home_url(); ?>/whats-new/">What's New</a></strong></p>
				</div><!--Footer Widget Two!-->
				
				
				
				<div class="footer-widget footer-three">
					<h3>&nbsp;</h3>
					<p>
					<strong><a href="<?php echo home_url(); ?>/about-us/" title="About Us">About Us</a></strong><br />
					<a href="<?php echo home_url(); ?>/about-us/youth-advisory-board" title="Youth Advisory Board">Youth Advisory Board</a><br />
					<a href="<?php echo home_url(); ?>/about-us/board-of-directors" title="Board of Directors">Board of Directors</a></p>
					
					<p><a href="<?php echo home_url(); ?>/register" title="Register"><strong>Register</strong></a></p>
					
					<p><a href="<?php echo home_url(); ?>/contact-us" title="Contact Us"><strong>Contact Us</strong></a></p>
					
					<p><a href="http://umarmy.org/" title="U.M. ARMY National"><strong>U.M. ARMY National</strong></a></p>
				</div><!--Footer Widget Three!-->
			
				<div class="footer-widget footer-four">
					<h3>Latest News Posts</h3>
					<?php query_posts('posts_per_page=3'); ?>
					<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				
						<div id="post-<?php the_ID(); ?>">
							<h4 class="footer-entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
							<div class="footer-entry-date">
		                        posted on <?php the_time('M j, Y'); ?>   
	                    	</div>
						</div><!-- #post-## -->
						<div class="clearboth"></div>
				<?php endwhile; wp_reset_query(); ?>
				
				
				</div><!--Footer Widget Four!-->
				
				<div class="footer-widget footer-five">
				<a href="http://umarmy.org/" alt="U.M. ARMY National Site"><img src="<?php bloginfo('template_directory'); ?>/images/footer_logo.png" style="padding-top: 8px;"></a>
				
				
				</div><!--Footer Widget Five!-->
			
			</div><!--widget_footer wrap!-->
		</div><!--widget_footer!-->
		<div class="clearboth"></div>
		<div id="copyright_footer">
			<div class="shadowleft"></div>
			<div class="shadowright"></div>
		
			<div id="copyright" class="wrap">
				<p class="copy_left">&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?></p>
				<p class="copy_center"></p>
				<p class="copy_right">site design by <a href="http://alinkonline.com" target="_blank">a:link {online}</a></p>
			</div><!--copyright!-->
		</div><!--copyright_footer!-->
	
	</footer>
