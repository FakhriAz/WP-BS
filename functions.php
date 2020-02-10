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
    'description'  => __( 'Content for your 404 error page goes here.', 'bs-wp' ),
    'before_widget' => '<div id="error-box">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>'
  ) );

	// Add theme support for Automatic Feed Links
    add_theme_support( 'automatic-feed-links' );
    
    // Adds <title> tag support
    function do_title_theme_setup() {
        add_theme_support( 'title-tag' );  
}
add_action( 'after_setup_theme', 'do_title_theme_setup');

    //Add pagination
    function pagination_nav() {
        global $wp_query;
     
        if ( $wp_query->max_num_pages > 1 ) { ?>
            <nav class="pagination" role="navigation">
                <div class="nav-previous"><?php next_posts_link( '&larr; Older posts' ); ?></div>
                <div class="nav-next"><?php previous_posts_link( 'Newer posts &rarr;' ); ?></div>
            </nav>
    <?php }
    } 
