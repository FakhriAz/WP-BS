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
      <?php else : ?>
      <p><?php __('No Posts')?></p>
    <?php endif; ?>
    </div><!-- posts div  -->
      <div class="col-sm-3 p-2 align-self-start archive-sidebar-widget">
        <h3>Archive</h3>
        <ul>
          <li>Janu</li>
          <li>April</li>
          <li>May</li>
          <li>October</li>
          <li>December</li>
        </ul>
      </div>
    </div> <!-- row -->
  </div> <!-- Container -->
  <!--blog-->
 
<?php get_footer(); ?>