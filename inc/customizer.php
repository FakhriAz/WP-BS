<?php
function wpbs_customize_register($wp_customize){
// Showcase section
    $wp_customize->add_section('showcase', array(
        'title' => __('Showcase', 'bs-wp'), 
        'description' => sprintf(__('Options for showcase', 'bs-wp')),
        'priority' => 130
    ));

    $wp_customize->add_setting('showcase_image', array(
        'default'  => get_template_directory_uri().'/showcase.jpg' ,
        'type'     => 'theme_mod',
        'sanitize_callback' =>'esc_url'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array (
        'label'  => __('Showcase Image', 'bs-wp'),
        'section'  => 'showcase', 
        'settings' => 'showcase_image',
        'priority'  => 1
    )));

    $wp_customize->add_setting('showcase_heading', array(
        'default'  => _x('My first WP Theme', 'showcase heading' ,'bs-wp'),
        'type'     => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('showcase_heading', array(
        'label'  => __('Heading', 'bs-wp'),
        'section'  => 'showcase', 
        'priority'  => 2
    ));

    $wp_customize->add_setting('showcase_text', array(
        'default'  => _x('Lorem ipsum showcase text', 'showcase text' , 'bs-wp'),
        'type'     => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('showcase_text', array(
        'label'  => __('Text', 'bs-wp'),
        'section'  => 'showcase', 
        'priority'  => 3
    ));

    $wp_customize->add_setting('btn_url', array(
        'default'  => _x('http://google.com/ncr', 'button url' ,'bs-wp'),
        'type'     => 'theme_mod',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control('btn_url', array(
        'label'  => __('Button URL', 'bs-wp'),
        'section'  => 'showcase', 
        'priority'  => 4
    ));

    $wp_customize->add_setting('btn_text', array(
        'default'  => _x('Read more', 'button text' ,'bs-wp'),
        'type'     => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('btn_text', array(
        'label'  => __('Button Text', 'bs-wp'),
        'section'  => 'showcase', 
        'priority'  => 5
    ));
    }
add_action('customize_register', 'wpbs_customize_register'); 

// Under the fold secondary text
function WP_BS_un_fold_txt($wp_customize) {
    $wp_customize->add_section('WP_BS_un_fold_section', array(
        'title' => 'Under the fold customize menu'
    ));

    $wp_customize->add_setting('WP_BS_un_fold_headline', array(
        'default' => 'Sample headline text',
        'sanitize_callback' => 'sanitize_text_field'
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
 
    $wp_customize->add_setting('WP_BS_linker_headline', array(
        'default' => 'Sample linker headline',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'WP_BS_linker_headline_control', array(
        'label' => 'Headline',
        'section' => 'WP_BS_section_linker',
        'settings' => 'WP_BS_linker_headline'
    )));

    // Paragraph text
    $wp_customize->add_setting('WP_BS_linker_text', array(
        'default' => 'Sample linker paragraph text',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'WP_BS_linker_text_control', array(
        'label' => 'Text',
        'section' => 'WP_BS_section_linker',
        'settings' => 'WP_BS_linker_text',
        'type'  => 'textarea'
    )));


}
add_action('customize_register', 'WP_BS_sec_linker_txt');

// About us text

function WP_BS_about_txt($wp_customize) {
    $wp_customize->add_section('WP_BS_about_us', array(
        'title' => 'About us'
    ));

    $wp_customize->add_setting('WP_BS_about_headline', array(
        'default' => 'Sample linker headline',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'WP_BS_about_headline_control', array(
        'label' => 'Headline',
        'section' => 'WP_BS_about_us',
        'settings' => 'WP_BS_about_headline'
    )));

    // Paragraph text
    $wp_customize->add_setting('WP_BS_about_us_text', array(
        'default' => 'Sample linker paragraph text',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'WP_BS_about_us_text_control', array(
        'label' => 'Text',
        'section' => 'WP_BS_about_us',
        'settings' => 'WP_BS_about_us_text',
        'type'  => 'textarea'
    )));

}
add_action('customize_register', 'WP_BS_about_txt');

?>