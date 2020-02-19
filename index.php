<?php get_header(); ?>
  <!--wrapper-->
  <div class="container flex-column">
    <div class="row d-md-block">
      <!-- Sidebar widget -->
      <div class="col-md-9 float-left posts-content">
    <h3 class="d-flex justify-content-center"></h3> 
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
      <!-- Top right sidebar widget start -->
      <?php if ( is_active_sidebar( 'info-top-right' ) ) : ?>
          <?php dynamic_sidebar( 'info-top-right' ); ?> 
          <?php else : ?>
          <!-- Time to add some widgets! -->
      <?php endif; ?>     
      <!-- Top right sidebar widget end -->
      <?php if ( is_active_sidebar( 'post-archive' ) ) : ?>
          <?php dynamic_sidebar( 'post-archive' ); ?>
      <?php else : ?>
          <!-- Time to add some widgets! -->
      <?php endif; ?>
       <!-- Top right sidebar widget start -->
       <?php if ( is_active_sidebar( 'social-buttom-right' ) ) : ?>
          <?php dynamic_sidebar( 'social-buttom-right' ); ?> 
          <?php else : ?>
          <!-- Time to add some widgets! -->
      <?php endif; ?>     
      <!-- Top right sidebar widget end -->  

        </div>
    </div> <!-- row -->
  </div> <!-- Container -->
  <!--blog-->
<?php get_footer(); ?>