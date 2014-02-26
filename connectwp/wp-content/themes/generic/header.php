<!DOCTYPE html>
<html>
	<head>
		<?php $template = get_bloginfo('template_directory'); // store the template path in a var ?>	
		
		<title><?php wp_title(); ?></title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<script type="text/javascript"> var domain = '<?php bloginfo('template_url'); ?>'; </script>
		
		<?php
		wp_deregister_script('jquery'); // deregister packaged jquery
		wp_enqueue_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'); // include jquery
		wp_enqueue_script('functionsFile', $template.'/library/scripts/functions.js', array(), '1.0', true); // functions.js
		wp_head();
		?>
		
		<link rel="shortcut icon" href="<?php echo $template; ?>/library/images/icons/favicon.gif" />
		<link rel="apple-touch-icon" href="<?php echo $template; ?>/library/images/icons/apple-touch-icon.png"> 
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<link rel="stylesheet" media="screen" href="<?php bloginfo('stylesheet_url'); ?>" />
		
		<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	</head>
	<!--[if lt IE 7 ]><body <?php body_class('ie6'); ?>><![endif]-->
	<!--[if IE 7 ]><body <?php body_class('ie7'); ?>><![endif]-->
	<!--[if IE 8 ]><body <?php body_class('ie8'); ?>><![endif]-->
	<!--[if IE 9 ]><body <?php body_class('ie9'); ?>><![endif]-->
	<!--[if (gt IE 9)|!(IE)]><!--><body <?php body_class(); ?>><!--<![endif]-->
	
	<div id="holder" class="cf">
		<header class="cf">
			<a href="/" id="logo">
			  <img src="connectwp/wp-content/themes/generic/library/images/logo.png" alt="Quality Quisine">
			</a>
			<div id="emailAndNumber">
			  <a href="mailto:qualityquisine@hotmail.co.uk">qualityquisine@hotmail.co.uk</a> &nbsp;|&nbsp; 01932 770558
			</div>
			<?php wp_nav_menu(array(
				'theme_location' => 'main-menu', 
				'container' => 'nav', 
				'container_id' => 'mainMenu', 
				'container_class' => 'menu', 
				'menu_class' => 'cf', 
				'before' => '' ,
				'after' => ''
			)); ?>
		</header>