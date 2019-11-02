<?php 
// Register Custom Navigation Walker
 function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'BS-WP' ),
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
