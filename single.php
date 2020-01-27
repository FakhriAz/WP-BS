<?php get_header(); ?>  
  <div class="container"> 
    <div class="row">
    <div class="col-sm-9">
    <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
        <?php get_template_part('content', get_post_format()); ?>
      <?php endwhile; ?>
      <?php else : ?>
      <p><?php __('No Posts')?></p>
      <?php endif; ?>
      </div><!-- post div  -->
  <div class="col-sm-3 p-2 align-self-start archive-sidebar-widget">
     <!--Archive sidebar   -->
    <!-- <div class="archive-sidebar-widget"> -->
        <h3>Archive</h3>
        <ul>
          <li>Janu</li>
          <li>April</li>
          <li>May</li>
          <li>October</li>
          <li>December</li>
        </ul>
      <!-- </div> -->
    </div><!--  col archive   -->
      </div> <!-- row -->
  </div> <!-- Container -->
  <!--blog-->   
<?php get_footer(); ?>