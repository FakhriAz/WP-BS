<?php get_header(); ?>
  <div class="bg">
    <div class="bg-txt h1">
      Dedicated WP Support
    </div>
  </div>
  <!-- remove font awesome add heading -->
  <div class="services_title">The main services I offer</div>
  <div class="seperator">__________________</div>
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <div class="card">
          <i class="far fa-file-alt fa-5x"> </i>
          <div class="card-body text-center">
            <h5 class="card-title">Services Title 1</h5>
            <p class="card-text text-left">Place some text for the service 1 here. </p>
            <a href="#" class="btn btn-warning">More info</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <i class="far fa-life-ring fa-5x"></i>
          <div class="card-body text-center">
            <h5 class="card-title">Services Title 2</h5>
            <p class="card-text text-left">Place some text for the service 2 here. </p>
            <a href="#" class="btn btn-warning">More info</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <i class="far fa-play-circle fa-5x"></i>
          <div class="card-body text-center">
            <h5 class="card-title text-center">Services Title 3</h5>
            <p class="card-text text-left">Place some text for the service 3 here. </p>
            <a href="#" class="btn btn-warning text-right">More info</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="about_heading">
    <div class="about-title">
      My story
    </div>
    <div class="about-subtitle">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    </div>
  </div><!-- about_heading section -->

  <div class="hr-wrap">
    <div class="divider div-transparent div-arrow-down"></div>
  </div>

  <div class="about-paragraph">
    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
      aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo
      enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui
      ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
      adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
      voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem</p>
  </div>

  <div class="wrapper light-blue">
    <div class="team container">
      <div class="row">
        <img class="img-team col-md-6 col-sm-12" src="profile-pict.jpg">
        <div class="team-memb col-md-6 col-sm-12">
          <h3>Name & position</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
            aperiam,</p>
        </div>
      </div>
      <!--row-->
    </div>
    <!--container-->
  </div>
  <!--wrapper-->

  <div class="wrapper white">
    <div class="team white container">
      <div class="row">
        <div class="team-memb col-md-6 col-sm-12">
          <h3>Name & position</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
            aperiam,</p>
        </div>
        <img class="img-team col-md-6 col-sm-12" src="profile-pict.jpg">
      </div>
      <!--row-->
    </div>
    <!--container-->
  </div>
  <!--wrapper-->
  <div class="wrapper light-blue">
    <div class="team container">
      <div class="row">
        <img class="img-team col-md-6 col-sm-12" src="profile-pict.jpg">
        <div class="team-memb col-md-6 col-sm-12">
          <h3>Name & position</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
            aperiam,</p>
        </div>
      </div>
      <!--row-->
    </div>
    <!--container-->
  </div>
  <!--wrapper-->
  <div class="blog-main"> 
  <h3 class="d-flex justify-content-center">Lastest blog posts</h3> 

  <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
        <div class="blog-post">
            <h2 class="blog-post-title">
               <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
              </a>
            </h2>
        <p class="blog-post-meta">
          <?php the_time('F j, Y g: i a'); ?>
          by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>">
            <?php the_author(); ?>
          </a>
        </p>
        <?php the_excerpt(); ?> <!-- can also use less convenient: the_content()-->
      </div><!--  blog post  -->
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