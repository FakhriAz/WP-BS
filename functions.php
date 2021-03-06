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
        'after_title' =>'</h5>',
    ));
    
    register_sidebar(array(
        'name' => 'Box2',
        'id'   => 'box2', 
        'before_widget'=>'<div class="box">',
        'after_widget' =>'</div>', 
        'before_title'=>'<h5>',
        'after_title' =>'</h5>', 
    ));

    register_sidebar(array(
        'name' => 'Box3',
        'id'   => 'box3', 
        'before_widget'=>'<div class="box">',
        'after_widget' =>'</div>', 
        'before_title'=>'<h5>',
        'after_title' =>'</h5>',
    ));
}

add_action('widgets_init', 'wpbs_init_widget');

// Customizer file

require get_template_directory(). '/inc/customizer.php'; 

//Top right sidebar widget start

function top_right_register_sidebars() {
    register_sidebar(
        array(
            'name'          => __( 'Top right info sidebar', 'bs-wp' ),
            'id'            => 'info-top-right',
            'description' => __( 'Top right information sidebar.', 'bs-wp' ),
            'before_widget' => '<div class="info-sidebar-container">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="info-sidebar-title">',
            'after_title' => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'top_right_register_sidebars' );
//Top right sidebar widget end

// Dynamic sidebar widget archive start
function post_archive_register_sidebars() {
    register_sidebar(
        array(
            'name'          => __( 'Posts archive dated', 'bs-wp' ),
            'id'            => 'post-archive',
            'description' => __( 'post archive sidebar.', 'bs-wp' ),
            'before_widget' => '<div class="posts-archive-container">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="posts-archive-title">',
            'after_title' => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'post_archive_register_sidebars' );
// Dynamic sidebar widget archive end

// Social links sidebar wbuttom in blog start

function buttom_right_register_sidebars() {
    register_sidebar(
        array(
            'name'          => __( 'Buttom right social links sidebar', 'bs-wp' ),
            'id'            => 'social-buttom-right',
            'description' => __( 'Social links sidebar.', 'bs-wp' ),
            'before_widget' => '<div class="social-links-container">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="social-links-title">',
            'after_title' => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'buttom_right_register_sidebars' );

// Social links sidebar widget in blog end

// 404 page

register_sidebar( array(
    'name' => '404 Page',
    'id' => '404',
    'description'  => __( 'Content for your 404 error page goes here.', 'bs-wp' ),
    'before_widget' => '<div id="error-box">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
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
// Content width 
if ( ! isset( $content_width ) ) $content_width = 900;

//Contributors function start
function wp_bs_list_authors() {
    $contributor_ids = get_users(
        array(
            'fields'  => 'ID',
            'orderby' => 'post_count',
            'order'   => 'DESC',
            'who'     => 'authors',
        )
    );

    foreach ( $contributor_ids as $contributor_id ) :
        $post_count = count_user_posts( $contributor_id );

        // Move on if user has not published a post (yet).
        if ( ! $post_count ) {
            continue;
        }
        ?>

    <div class="contributor">
    <div class="contributor-info">
        <div class="contributor-avatar"><?php echo get_avatar( $contributor_id, 132 ); ?></div>
        <div class="contributor-summary">
            <h2 class="contributor-name"><?php echo get_the_author_meta( 'display_name', $contributor_id ); ?></h2>
            <p class="contributor-bio">
                <?php echo get_the_author_meta( 'description', $contributor_id ); ?>
            </p>
            <a class="button contributor-posts-link" href="<?php echo esc_url( get_author_posts_url( $contributor_id ) ); ?>">
                <?php
                /* translators: %d: Post count. */
                printf( _n( '%d Article', '%d Articles', $post_count, 'wp-bs' ), $post_count );
                ?>
            </a>
        </div><!-- .contributor-summary -->
    </div><!-- .contributor-info -->
</div><!-- .contributor -->

        <?php
endforeach;
}

//Contributors