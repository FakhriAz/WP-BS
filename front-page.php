<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <!-- Required meta tags -->
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- Custom CSS -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
  <!-- Font awesome5  -->
  <script src="https://kit.fontawesome.com/59e8cbdc1f.js"></script>
  <?php wp_head(); ?>
    <style>
        .showcase {
            background: url(<?php echo get_theme_mod('showcase_image', get_template_directory_uri().'/showcase.jpg'); ?>);
        }
    </style>
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">Navbar</a>
      <?php
      wp_nav_menu(array(
        'theme_location'    => 'primary',
        'depth'             => 2,
        'container'         => 'div',
        'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'bs-example-navbar-collapse-1',
        'menu_class'        => 'nav navbar-nav',
        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
        'walker'            => new WP_Bootstrap_Navwalker(),
      ));
      ?>
    </div>
  </nav>
  <!-- copied from index.html -->
  <section class="showcase">
    <div class="container">  
        <h1><?php echo get_theme_mod('showcase_heading', 'My first WP Theme') ?></h1>
        <p><?php echo get_theme_mod('showcase_text', 'Custom WP theme') ?></p>
        <a href="<?php echo get_theme_mod('btn_url', 'http://www.google.com/ncr') ?>" class="btn btn-primary btn-lg"><?php echo get_theme_mod('btn_text', 'Get Started') ?></a>  
    </div>
  </section>
    <hr>
    <?php if (get_theme_mod('WP_BS_un_fold_display') == 'Yes') { ?>
        <div class="services_title">
        <h2><?php echo get_theme_mod('WP_BS_un_fold_headline') ?></h2>
        </div>
    <?php } ?>    
    <div class="container">
        <div class="row">
        <div class="col-sm-4 text-center">
            <div class="card_box">
                <?php if(is_active_sidebar('box1')) : ?>
                    <?php dynamic_sidebar('box1') ?>
                <?php endif; ?>
            </div>
        </div>  
        <div class="col-sm-4 text-center">
            <div class="card_box">
                <?php if(is_active_sidebar('box2')) : ?>
                    <?php dynamic_sidebar('box2') ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-sm-4 text-center">
            <div class="card_box">
            <?php if(is_active_sidebar('box3')) : ?>
                    <?php dynamic_sidebar('box3') ?>
                <?php endif; ?>
            </div>
        </div>
        </div>
    </div>
    <?php if (get_theme_mod('WP_BS_linker_display') == 'Yes') { ?>
        <div class="linker_heading">
            <div class="linker-title">
                <?php echo get_theme_mod('WP_BS_linker_headline') ?>
            </div>
            <div class="linker-subtitle">
            <?php echo get_theme_mod('WP_BS_linker_text') ?>
            </div> 
        </div><!-- linker_heading section -->
    <?php } ?>  
    <div class="hr-wrap">
        <div class="divider div-transparent div-arrow-down"></div>
    </div>

    <section class="about_us">
        <div class="about-paragraph">
            <h2><?php echo get_theme_mod('WP_BS_about_headline', 'About us default headline')?></h2>
            <p><?php echo get_theme_mod('WP_BS_about_us_text', 'About us default text')?></p>
        </div>
    </section>
  <!-- copied from index.html -->
<?php get_footer(); ?>  