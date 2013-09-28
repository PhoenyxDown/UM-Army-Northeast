<!DOCTYPE HTML>
<!--[if IEMobile 7 ]><html class="no-js iem7" manifest="default.appcache?v=1"><![endif]--> 
<!--[if lt IE 7 ]><html class="no-js ie6" lang="en"><![endif]--> 
<!--[if IE 7 ]><html class="no-js ie7" lang="en"><![endif]--> 
<!--[if IE 8 ]><html class="no-js ie8" lang="en"><![endif]--> 
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" lang="en"><!--<![endif]-->
	<head>
		<title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
	  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<!--<meta name="viewport" content="width=device-width, initial-scale=1.0"> Remove if you're not building a responsive site. (But then why would you do such a thing?) -->
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico"/>
		<script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.8.3.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/jquery.bxslider/jquery.bxslider.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/suckerfish_dropdown.js" type="text/javascript"></script>
		<script type="text/javascript">
		  WebFontConfig = {
		    google: { families: [ 'Open+Sans:400italic,700italic,800italic,300italic,600italic,400,300,600,700,800:latin', 'Open+Sans+Condensed:300,300italic,700:latin', 'Oswald:400,700,300:latin', 'Montserrat:400,700:latin', 'Sanchez:400italic,400:latin' ] }
		  };
		  (function() {
		    var wf = document.createElement('script');
		    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
		      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
		    wf.type = 'text/javascript';
		    wf.async = 'true';
		    var s = document.getElementsByTagName('script')[0];
		    s.parentNode.insertBefore(wf, s);
		  })(); </script>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div id="wrapper">