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
<!--                        -->
<!--                    <li><a href="javascript:void(0)" class="breadcrumb-title">HOME</a></li>-->
<!--                    <li class="active breadcrumb-title-active"><span class="arrow"></span> ABOUT US</li>-->
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

  <!-- Section: about us -->
  <section>
    <div class="container pt-sm-10">
        <?php if (have_posts()) : while (have_posts()) : the_post();?>
            <?php the_content();?>
        <?php endwhile; endif;?>
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