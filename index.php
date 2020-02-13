<?php get_header(); ?>
  <!--wrapper-->
  <div class="container flex-column">
    <div class="row">
      <!-- Sidebar widget -->
      <div class="col-sm-9">
    <h3 class="d-flex justify-content-center">Lastest blog posts</h3> 
    <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>
          <?php get_template_part('content', get_post_format()); ?>
      <?php endwhile; ?>
      <!-- Add pagination -->
      <?php pagination_nav(); ?>
      <?php else : ?>
      <p><?php __('No Posts', 'bs-wp')?></p>
    <?php endif; ?>
    </div><!-- posts div  -->
          <?php if ( is_active_sidebar( 'post-archive' ) ) : ?>
          <?php dynamic_sidebar( 'post-archive' ); ?>
      <?php else : ?>
          <!-- Time to add some widgets! -->
      <?php endif; ?>
        </div>
    </div> <!-- row -->
  </div> <!-- Container -->
  <!--blog-->
 
<?php get_footer(); ?>