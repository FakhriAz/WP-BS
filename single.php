<?php get_header(); ?>  
  <div class="container"> 
    <div class="row">
    <div class="col-sm-9">
    <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>
        <?php get_template_part('content', get_post_format()); ?>
        <!-- Adding post class function -->
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <!-- Post class function code ends here -->
        <p><?php the_tags(); ?></p>
        <!-- wp link pages starts-->
        <?php wp_link_pages( array(
                          'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bs-wp' ) . '</span>',
                          'after'       => '</div>',
                          'link_before' => '<span>',
                          'link_after'  => '</span>',
                          ) );
                        ?>
                    <!-- wp link pages finishes -->
      <?php endwhile; ?>
      <!-- Add pagination -->
      <?php pagination_nav(); ?>
      <?php else : ?>
      <p><?php __('No Posts', 'bs-wp')?></p>
      <?php endif; ?>
      </div><!-- post div  -->
  <div class="col-sm-3 p-2 align-self-start archive-sidebar-widget">
     <!--Archive sidebar   -->
    <?php if ( is_active_sidebar( 'post-archive' ) ) : ?>
        <?php dynamic_sidebar( 'post-archive' ); ?>
    <?php else : ?>
        <!-- Time to add some widgets! -->
    <?php endif; ?>
    </div>
    <!--  col archive   -->
      </div> <!-- row -->
  </div> <!-- Container -->
  <!--blog-->   
<?php get_footer(); ?>