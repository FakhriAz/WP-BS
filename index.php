<?php get_header(); ?>
  
  <!-- remove font awesome add heading -->
  
  <!--wrapper-->
  <div class="blog-main"> 
  <h3 class="d-flex justify-content-center">Lastest blog posts</h3> 

  <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>
          <?php get_template_part('content', get_post_format()); ?>
      <?php endwhile; ?>
      <?php else : ?>
      <p><?php __('No Posts')?></p>
      <?php endif; ?>
  </div>
  <!--blog-->

  <!-- <div > -->

  <div class="container contact-form">
    <form method="post">
      <h3>Drop Us a Message</h3>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" />
          </div>
          <div class="form-group">
            <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value="" />
          </div>
          <div class="form-group">
            <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" />
          </div>
          <div class="form-group">
            <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <textarea name="txtMsg" class="form-control" placeholder="Your Message *"
              style="width: 100%; height: 150px;"></textarea>
          </div>
        </div>
      </div>
    </form>
  </div>

<?php get_footer(); ?>