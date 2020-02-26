<?php get_header(); ?>
  <!--wrapper-->
  <!-- Trying to fix broken layout -->
  <div class="container">
    <!-- <div class="row d-md-block"> -->
      <!-- Sidebar widget -->

      <div class="posts-content">
        <h3>start posts content</h3> 
         <?php if(have_posts()) : ?>
             <?php while(have_posts()) : the_post(); ?>
          <?php get_template_part('content', get_post_format()); ?>
             <?php endwhile; ?>
             <h3>end posts content</h3>
      <!-- Add pagination -->
            <?php pagination_nav(); ?>
             <?php else : ?>
             <p><?php __('No Posts', 'bs-wp')?></p>
        <?php endif; ?>
      </div><!-- posts div  -->

    <div class="sidebar">
      <!-- Top right sidebar widget start -->
      <?php if ( is_active_sidebar( 'info-top-right' ) ) : ?>
          <?php dynamic_sidebar( 'info-top-right' ); ?> 
          <?php else : ?>
          <!-- Time to add some widgets! -->
      <?php endif; ?>     
      <!-- Post archive sidebar widget end -->
      <?php if ( is_active_sidebar( 'post-archive' ) ) : ?>
          <?php dynamic_sidebar( 'post-archive' ); ?>
      <?php else : ?>
          <!-- Time to add some widgets! -->
      <?php endif; ?>
       <!-- Buttom right sidebar widget start -->
       <?php if ( is_active_sidebar( 'social-buttom-right' ) ) : ?>
          <?php dynamic_sidebar( 'social-buttom-right' ); ?> 
          <?php else : ?>
          <!-- Time to add some widgets! -->
      <?php endif; ?>     
      <!-- Top right sidebar widget end -->  
      </div>   <!--sidebars--> 

        <!-- </div> -->
    <!-- </div> row -->
  </div> <!-- Container -->
  <!--blog-->
<?php get_footer(); ?>