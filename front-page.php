<?php get_header(); ?>
  <!-- copied from index.html -->
  <div class="bg">
    <div class="bg-txt h1">
      Dedicated WP Support
    </div>
  </div>
    <div class="services_title">The main services I offer</div>
    <div class="separator">__________________</div>
    <div class="container">
        <div class="row">
        <div class="col-sm-4">
            <div class="card box">
                <?php if(is_active_sidebar('box1')) : ?>
                    <?php dynamic_sidebar('box1') ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card box">
                <?php if(is_active_sidebar('box2')) : ?>
                    <?php dynamic_sidebar('box2') ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card box">
            <?php if(is_active_sidebar('box3')) : ?>
                    <?php dynamic_sidebar('box3') ?>
                <?php endif; ?>
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
  <!-- copied from index.html -->

<?php get_footer(); ?>  