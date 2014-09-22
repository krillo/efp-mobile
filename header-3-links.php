<!DOCTYPE html>
<html>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name=”format-detection” content=”telephone=yes” />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
		<meta name="google-site-verification" content="2XDq2VQS1lf9KL8sPQR3r61WGJDdM1bOE78ERtBAOwI" />
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title><?php wp_title( ' | ', true, 'right' ); ?></title>
		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicons/eriks-fonsterputs-icon.png">
		<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/img/favicons/apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/img/favicons/apple-touch-icon-72x72.png" sizes="72x72" />
		<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/img/favicons/apple-touch-icon-114x114.png" sizes="114x114" />
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Signika+Negative:400,300,600,700" type="text/css">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>?v=2" media="screen" />
		<link rel='stylesheet' href='http://eriksfonsterputs.se/wp-content/plugins/wp-minify/min/?f=wp-content/themes/eriksfonsterputs/normalize.css,wp-content/themes/eriksfonsterputsmobile/style.css,wp-content/themes/eriksfonsterputs/css/ui-lightness/jquery-ui-1.10.0.custom.min.css,wp-content/plugins/arconix-faq/includes/css/arconix-faq.css&amp;m=1389888893' type='text/css' media='screen' />
	  	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js'></script>
	  	<script type='text/javascript' src='http://eriksfonsterputs.se/wp-content/themes/eriksfonsterputs/js/slides.min.jquery.js?ver=1.0'></script>
	  	<script type='text/javascript' src='http://eriksfonsterputs.se/wp-content/themes/eriksfonsterputs/js/global.js?ver=1.0'></script>
	  	<script type='text/javascript' src='http://eriksfonsterputs.se/wp-content/themes/eriksfonsterputs/js/respond.min.js?ver=1.0'></script>
	  	<script type='text/javascript' src='http://eriksfonsterputs.se/wp-content/themes/eriksfonsterputs/js/jquery-ui-1.10.0.custom.min.js?ver=1.0'></script>
		<script type='text/javascript' src='<?php bloginfo('template_url') ?>/js/jquery.touchSwipe.js'></script>
		
		<?php wp_enqueue_script('jquery'); ?>
		<?php wp_head(); ?>
		<script type="text/javascript">
			jQuery(document).ready(function(){
				var windowWidth = $('body').innerWidth();
			  jQuery('#slidebx').bxSlider({
			    
			    infiniteLoop: true,
			    speed: 2000,
			    pause: 5000,
			    auto: true,
			    slideWidth: windowWidth,
			    adaptiveHeight: true,
			    minSlides: 1,
			    maxSlides: 1,
			    pager: true,
			    responsive:true
			  });
			});
		</script>
		
	</head>
	<body <?php body_class(); ?>>
		<div id="wrapper" class="hfeed">
		<div id="container">
