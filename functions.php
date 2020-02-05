<?php 
// Register Custom Navigation Walker
 function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'bs-wp' ),
) );

// Support post format

add_theme_support('post-formats', array('aside', 'gallery'));

// Post thumbnail support
add_theme_support( 'post-thumbnails' );

// Excerpt length control
function set_excerpt_length(){
    return 20;
}

add_filter('exerpt_length', 'set_excerpt_length');

//Widget locations
function wpbs_init_widget($id) {
    register_sidebar(array(
        'name' => 'Box1',
        'id'   => 'box1', 
        'before_widget'=>'<div class="box">',
        'after_widget' =>'</div>', 
        'before_title'=>'<h5>',
        'after_title' =>'</h5>'
    ));
    
    register_sidebar(array(
        'name' => 'Box2',
        'id'   => 'box2', 
        'before_widget'=>'<div class="box">',
        'after_widget' =>'</div>', 
        'before_title'=>'<h5>',
        'after_title' =>'</h5>' 
    ));

    register_sidebar(array(
        'name' => 'Box3',
        'id'   => 'box3', 
        'before_widget'=>'<div class="box">',
        'after_widget' =>'</div>', 
        'before_title'=>'<h5>',
        'after_title' =>'</h5>'
    ));
}

add_action('widgets_init', 'wpbs_init_widget');

// Customizer file

require get_template_directory(). '/inc/customizer.php'; 

/**
 * Register `team` post type
 */
function team_post_type() {
   
    // Labels
     $labels = array(
         'name' => _x("Team", "post type general name"),
         'singular_name' => _x("Team", "post type singular name"),
         'menu_name' => 'Team Profiles',
         'add_new' => _x("Add New", "team item"),
         'add_new_item' => __("Add New Profile"),
         'edit_item' => __("Edit Profile"),
         'new_item' => __("New Profile"),
         'view_item' => __("View Profile"),
         'search_items' => __("Search Profiles"),
         'not_found' =>  __("No Profiles Found"),
         'not_found_in_trash' => __("No Profiles Found in Trash"),
         'parent_item_colon' => ''
     );
     
     // Register post type
     register_post_type('team' , array(
         'labels' => $labels,
         'public' => true,
         'has_archive' => false,
         'menu_icon' => get_stylesheet_directory_uri() . '/team-icon.png',
         'rewrite' => false,
         'supports' => array('title', 'editor', 'thumbnail')
     ) );
 }
 add_action( 'init', 'team_post_type', 0 );

// Dynamic sidebar widget
function post_archive_register_sidebars() {
    register_sidebar(
        array(
            'name'          => __( 'Primary Sidebar', 'bs-wp' ),
            'id'            => 'post-archive',
            'description' => __( 'post archive sidebar.', 'bs-wp' ),
            'before_widget' => '<div class="col-sm-3 p-2 align-self-start archive-sidebar-widget">',
            'after_widget' => '</div>',
            'before_title' => '<h3">',
            'after_title' => '</h2>'
        )
    );
}
add_action( 'widgets_init', 'post_archive_register_sidebars' );

// 404 page

register_sidebar( array(
    'name' => '404 Page',
    'id' => '404',
    'description'  => __( 'Content for your 404 error page goes here.' ),
    'before_widget' => '<div id="error-box">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>'
  ) );

	// Add theme support for Automatic Feed Links
	add_theme_support( 'automatic-feed-links' );