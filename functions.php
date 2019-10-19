/**
 * Register Custom Navigation Walker
 */
<?php 

 function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'BS-WP' ),
) );

add_action( 'after_setup_theme', 'register_navwalker' );

?>