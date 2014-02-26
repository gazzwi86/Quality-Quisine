<?php
// do shortcodes in text widget
add_filter('widget_text', 'do_shortcode');

// stop wp from removing <p> and <br /> tags
remove_filter('the_content', 'wpautop');

// Dynamic sidebar areas
add_action('init', function () {
	// Left
	register_sidebar(array(
		'name' => 'Left',
		'id' => 'left',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3 class="left-title hide">',
		'after_title' => '</h3>'
	));
});

// Custom Menus
add_action('init', function () {
  register_nav_menus(array(
  	'main-menu' => __( 'Main Menu' ),
  	'sub-menu' => __( 'Sub Page Menu' )
  ));
});

// Add default posts and comments RSS feed links to head
add_theme_support( 'automatic-feed-links' );

// Activate post thumbnails
add_theme_support( 'post-thumbnails' );
add_image_size( 'mini', 50, 42, false );

// Add body class
add_filter('body_class', function ($classes) {
	global $post;
	
	$classes[] = 'page-'.$post->post_name;
	if ($post->post_parent) {
		$ppost = get_post($post->post_parent);
		$classes[] = 'section-'.$post->post_name;
	}
	
	return $classes; // return the $classes array
});

// add classes to tinymce linking
add_filter('mce_css', function ($wp){
	$wp .= ',' . get_bloginfo('stylesheet_directory') . '/tinymce.css';
	return $wp;
});