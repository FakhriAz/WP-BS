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

// Customizer file

require get_template_directory(). '/inc/customizer.php'; 

// Under the fold secondary text
function WP_BS_un_fold_txt($wp_customize) {
    $wp_customize->add_section('WP_BS_un_fold_section', array(
        'title' => 'Under the fold customize menu'
    ));

    $wp_customize->add_setting('WP_BS_un_fold_display', array(
        'default' => 'No'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'WP_BS_un_fold_display_control', array(
        'label' => 'Do you want to display this?',
        'section' => 'WP_BS_un_fold_section',
        'settings' => 'WP_BS_un_fold_display',
        'type' => 'select',
        'choices' => array('No' => 'No', 'Yes' => 'Yes')

    )));

    $wp_customize->add_setting('WP_BS_un_fold_headline', array(
        'default' => 'Sample headline text'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'WP_BS_un_fold_headline_control', array(
        'label' => 'Headline',
        'section' => 'WP_BS_un_fold_section',
        'settings' => 'WP_BS_un_fold_headline'
    )));
}
add_action('customize_register', 'WP_BS_un_fold_txt');

// Linker section
function WP_BS_sec_linker_txt($wp_customize) {
    $wp_customize->add_section('WP_BS_section_linker', array(
        'title' => 'Section linker'
    ));
    $wp_customize->add_setting('WP_BS_linker_display', array(
        'default' => 'Yes'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'WP_BS_un_linker_control', array(
        'label' => 'Do you want to display this?',
        'section' => 'WP_BS_section_linker',
        'settings' => 'WP_BS_linker_display',
        'type' => 'select',
        'choices' => array('No' => 'No', 'Yes' => 'Yes')

    )));

    $wp_customize->add_setting('WP_BS_linker_headline', array(
        'default' => 'Sample linker headline'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'WP_BS_linker_headline_control', array(
        'label' => 'Headline',
        'section' => 'WP_BS_section_linker',
        'settings' => 'WP_BS_linker_headline'
    )));

    // Paragraph text
    $wp_customize->add_setting('WP_BS_linker_text', array(
        'default' => 'Sample linker paragraph text'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'WP_BS_linker_text_control', array(
        'label' => 'Text',
        'section' => 'WP_BS_section_linker',
        'settings' => 'WP_BS_linker_text',
        'type'  => 'textarea'
    )));


}
add_action('customize_register', 'WP_BS_sec_linker_txt');