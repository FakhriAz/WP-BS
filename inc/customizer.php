<?php
function wpbs_customize_register($wp_customize){
// Showcase section
    $wp_customize->add_section('showcase', array(
        'title' => __('Showcase', 'BS-WP'), 
        'description' => sprintf(__('Options for showcase', 'BS-WP')),
        'priority' => 130
    ));

    $wp_customize->add_setting('showcase_image', array(
        'default'  => get_bloginfo('template_directory').'/img/showcase.jpg' ,
        'type'     => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array (
        'label'  => __('Showcase Image', 'BS-WP'),
        'section'  => 'showcase', 
        'settings' => 'showcase_image',
        'priority'  => 1
    )));

    $wp_customize->add_setting('showcase_heading', array(
        'default'  => _x('My first WP Theme', 'BS-WP'),
        'type'     => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_heading', array(
        'label'  => __('Heading', 'BS-WP'),
        'section'  => 'showcase', 
        'priority'  => 2
    ));

    $wp_customize->add_setting('showcase_text', array(
        'default'  => _x('Lorem ipsum showcase text', 'BS-WP'),
        'type'     => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_text', array(
        'label'  => __('Text', 'BS-WP'),
        'section'  => 'showcase', 
        'priority'  => 3
    ));

    $wp_customize->add_setting('btn_url', array(
        'default'  => _x('http://google.com/ncr', 'BS-WP'),
        'type'     => 'theme_mod'
    ));

    $wp_customize->add_control('btn_url', array(
        'label'  => __('Button URL', 'BS-WP'),
        'section'  => 'showcase', 
        'priority'  => 4
    ));

    $wp_customize->add_setting('btn_text', array(
        'default'  => _x('Read more', 'BS-WP'),
        'type'     => 'theme_mod'
    ));

    $wp_customize->add_control('btn_text', array(
        'label'  => __('Button Text', 'BS-WP'),
        'section'  => 'showcase', 
        'priority'  => 5
    ));
    }
add_action('customize_register', 'wpbs_customize_register') 
?>