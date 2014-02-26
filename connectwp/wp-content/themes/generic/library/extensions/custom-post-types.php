<?php

// Register Cast custom post type
add_action('init', 'cast_register');
 
function cast_register() {
 
	$labels = array(
		'name' => _x('Cast', 'post type general name'),
		'singular_name' => _x('Cast', 'post type singular name'),
		'add_new' => _x('Add New', 'cast item'),
		'add_new_item' => __('Add New Cast Member'),
		'edit_item' => __('Edit Cast'),
		'new_item' => __('New Cast Member'),
		'view_item' => __('View Cast'),
		'search_items' => __('Search Cast'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);
 
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => get_stylesheet_directory_uri() . '/article16.png',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail')
	  ); 
 
	register_post_type( 'cast' , $args );
}


// Register Creative custom post type
add_action('init', 'creative_register');
 
function creative_register() {
 
	$labels = array(
		'name' => _x('Creative', 'post type general name'),
		'singular_name' => _x('Creative', 'post type singular name'),
		'add_new' => _x('Add New', 'creative item'),
		'add_new_item' => __('Add New Creative Member'),
		'edit_item' => __('Edit Creative'),
		'new_item' => __('New Creative Member'),
		'view_item' => __('View Creative'),
		'search_items' => __('Search Creative'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);
 
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => get_stylesheet_directory_uri() . '/article16.png',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail')
	  ); 
 
	register_post_type( 'creative' , $args );
}

// Register custom fields
add_action("admin_init", "admin_init");

function admin_init(){
        // Register cast custom fields
        add_meta_box("cast_character-meta", "Character", "cast_character", "cast", "normal", "low");
        
        // Register creative custom fields
        add_meta_box("creative_role-meta", "Role", "creative_role", "creative", "normal", "low");
}

// Cast custom field
function cast_character(){
  global $post;
  $custom = get_post_custom($post->ID);
  $character = $custom["character"][0];
  wp_nonce_field('ccmeta_save', 'ccmeta_save' );
  ?>
  <label>Character:</label>
  <input name="character" value="<?php echo $character; ?>" />
  <?php
}

// Creative custom field
function creative_role(){
  global $post;
  $custom = get_post_custom($post->ID);
  $role = $custom["role"][0];
  wp_nonce_field('ccmeta_save', 'ccmeta_save' );
  ?>
  <label>Creative Role:</label>
  <input name="role" value="<?php echo $role; ?>" />
  <?php
}

// Save cast info
add_action('save_post', 'save_details');

function save_details(){
  global $post;

  // verify if this is an auto save routine. 
  // If it is our form has not been submitted, so we dont want to do anything
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
      return;

  // verify this came from the our screen and with proper authorization,
  // because save_post can be triggered at other times

  if ( !wp_verify_nonce( $_POST['ccmeta_save'], 'ccmeta_save' ) )
      return;
 
  if (array_key_exists('role', $_POST)) {
    update_post_meta($post->ID, "role", $_POST["role"]);
  }

  if (array_key_exists('character', $_POST)) {
    update_post_meta($post->ID, "character", $_POST["character"]);
  }
}
?>