<?php get_header(); ?>
  
    <div class="container">
        <h1 class="entry-title"><?php _e( 'This is somewhat embarrassing, isn&apos;t it?', 'BS-WP01' ); ?></h1>
        <div class="entry-content">
        <?php dynamic_sidebar( '404' ); ?>
    </div><!-- container -->

<?php get_footer(); ?>