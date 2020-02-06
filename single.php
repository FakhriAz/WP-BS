<?php get_header(); ?>  
  <div class="container"> 
    <div class="row">
    <div class="col-sm-9">
    <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>
        <?php get_template_part('content', get_post_format()); ?>
        <p><?php the_tags(); ?></p>
      <?php endwhile; ?>
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