<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <!-- Required meta tags -->
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- Custom CSS -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>">
  <!-- Font awesome5  -->
  <script src="https://kit.fontawesome.com/59e8cbdc1f.js"></script>
  <title>
    <?php bloginfo('name') ?> | 
    <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    <?php wp_title(); ?>
  </title>
  <?php wp_head(); ?>

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand h3" href="#">BS for WP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link h3" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link h3" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link h3" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link h3" href="#">Blog</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>