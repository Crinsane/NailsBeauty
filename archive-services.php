<?php get_header();?>

<!-- Start main-content -->
<div class="main-content">

<!-- Section: inner-header -->
<section class="inner-header divider" data-bg-img="http://nailsbeauty.dev/wp-content/uploads/2017/03/page_bg_header.jpg">
    <div class="container pt-150 pb-30"></div>
</section>

<!-- Section: breadcrumb -->
<section id="breadcrumb">
    <div class="container pt-0 pb-0">
        <div class="section-content">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb text-left mt-5 white">
                        <?php if (function_exists('bcn_display')) :?>
                            <?php bcn_display();?>
                        <?php endif;?>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section: about us -->
<section id="services" class="img-absolute-parent overflow-visible pb-50">
  <div class="container mt-50">
      <div class="section-title">
          <div class="row">
              <div class="col-md-6 col-md-offset-3 text-center">
                  <h2 class="font-italic"><span>Our Services</span></h2>
                  <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, quasi! Beatae quidem modi mollitia explicabo.</p>
                  <div class="subtitle-divider-2 text-center divider-service-2"></div>
              </div>
          </div>
      </div>
      <div class="section-content">
          <div class="row">
              <?php if (have_posts()) : while (have_posts()) : the_post();?>
                  <div class="col-md-6 text-center p-0">
                      <?php $boxColor = get_post_meta(get_the_ID(), '_box_color', true);?>
                      <div class="services-items overlay-<?php echo $boxColor;?> divider">
                          <div class="p-30 pl-40 pr-40">
                              <h4><a href="#" class="service-title"><?php the_title();?></a></h4>
                              <p class="text-black"><?php the_content();?></p>
                              <a href="<?php the_permalink();?>" class="btn btn-colored btn-text-black-hover-blue">READ MORE</a>
                          </div>
                      </div>
                  </div>
              <?php endwhile; endif;?>
          </div>
      </div>
  </div>
</section>

<!-- Section: Divider -->
<section class="divider parallax layer-overlay text-left overflow-visible img-absolute-parent" data-bg-img="http://nailsbeauty.dev/wp-content/uploads/2017/03/home_page_book_now_bg.jpg" style="border-top: thick solid black;">
    <div class="container sm-text-center pt-30 pb-30">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="booknow-header">Book with us today</h2>
                <a class="btn btn-colored btn-true-black btn-light-blue-hover hvr-shutter-out-horizontal mt-20" href="page-booknow.html" data-border="medium none transparent" data-mouseover-color="#fff" data-mouseout-color="#fff">BOOK NOW</a>
            </div>
        </div>
    </div>
</section>

<!-- Section newsletter -->
<section id="newsletter" class="contact img-absolute-parent overflow-visible mb-sm-50">
    <div class="container pb-10">
        <img class="img-absolute img-pos-left hidden-sm hidden-xs newsletter-bg-image" alt="" src="http://nailsbeauty.dev/wp-content/uploads/2017/03/newsletter-image-bg.png">
        <div class="section-content">
            <div class="row pt-10">
                <div class="col-md-10 col-md-offset-1">
                    <?php echo do_shortcode('[mc4wp_form id="44"]');?>
                </div>
            </div>
        </div>
    </div>
</section>

</div>
<!-- end main-content -->

<?php get_footer();?>