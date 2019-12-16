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
  <title>
    <?php bloginfo('name') ?> |
    <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    <?php wp_title(); ?>
  </title>
  <?php wp_head(); ?>
    <style>
        .showcase {
            background:url (<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/showcase.jpg'); ?>);
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
    <div class="services_title">
      <h2><?php echo get_theme_mod('WP_BS_un_fold_headline') ?></h2>
    </div>
    <div class="container">
        <div class="row">
        <div class="col-sm-4">
            <div class="card box">
                <?php if(is_active_sidebar('box1')) : ?>
                    <?php dynamic_sidebar('box1') ?>
                <?php endif; ?>
            </div>
        </div>  
        <div class="col-sm-4">
            <div class="card box">
                <?php if(is_active_sidebar('box2')) : ?>
                    <?php dynamic_sidebar('box2') ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card box">
            <?php if(is_active_sidebar('box3')) : ?>
                    <?php dynamic_sidebar('box3') ?>
                <?php endif; ?>
            </div>
        </div>
        </div>
    </div>
    <div class="about_heading">
        <div class="about-title">
        My story
        </div>
        <div class="about-subtitle">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </div>
    </div><!-- about_heading section -->

    <div class="hr-wrap">
        <div class="divider div-transparent div-arrow-down"></div>
    </div>

    <div class="about-paragraph">
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
        aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo
        enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui
        ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
        adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
        voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem</p>
    </div>

    <div class="wrapper light-blue">
        <div class="team container">
        <div class="row">
            <img class="img-team col-md-6 col-sm-12" src="profile-pict.jpg">
            <div class="team-memb col-md-6 col-sm-12">
            <h3>Name & position</h3>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
                aperiam,</p>
            </div>
        </div>
        <!--row-->
        </div>
        <!--container-->
    </div>
    <!--wrapper-->

    <div class="wrapper white">
        <div class="team white container">
        <div class="row">
            <div class="team-memb col-md-6 col-sm-12">
            <h3>Name & position</h3>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
                aperiam,</p>
            </div>
            <img class="img-team col-md-6 col-sm-12" src="profile-pict.jpg">
        </div>
        <!--row-->
        </div>
        <!--container-->
    </div>
    <!--wrapper-->
    <div class="wrapper light-blue">
        <div class="team container">
        <div class="row">
            <img class="img-team col-md-6 col-sm-12" src="profile-pict.jpg">
            <div class="team-memb col-md-6 col-sm-12">
            <h3>Name & position</h3>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
                aperiam,</p>
            </div>
        </div>
        <!--row-->
        </div>
        <!--container-->
    </div>
  <!-- copied from index.html -->

<?php get_footer(); ?>  