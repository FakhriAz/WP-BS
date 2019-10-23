<?php 
// Register Custom Navigation Walker
 function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'BS-WP' ),
) );

// Post thumbnail support

add_theme_support( 'post-thumbnails' );

// Excerpt length control
function set_excerpt_length(){
    return 20;
}

add_filter('exerpt_length', 'set_excerpt_length');
