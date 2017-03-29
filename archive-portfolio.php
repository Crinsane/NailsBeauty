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

<section id="gallery">
    <div class="container img-absolute-parent overflow-visible pt-30 pb-0">
        <div class="pb-10">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center gallery-header">
                    <h2 class="font-italic font-Playfair-Display"><span>Portfolio</span></h2>
                    <div class="subtitle-divider-2 text-center"></div>
                </div>
            </div>
        </div>
        <div class="section-content">
            <!-- protfolio nav -->
<!--            <div class="filter_padder pb-30">-->
<!--                <div class="filter_wrapper" style="max-width:650px;">-->
<!--                    <div class="filter selected active font-Oswald" data-category="cat-all">All</div>-->
<!--                    <div class="filter mt-sm-10 font-Oswald" data-category="cat-branding">Zebra</div>-->
<!--                    <div class="filter mt-sm-10 font-Oswald" data-category="cat-print">Brookline</div>-->
<!--                    <div class="filter mt-sm-10 font-Oswald" data-category="cat-photoshop">Clear</div>-->
<!--                    <div class="filter last-child mt-sm-10 font-Oswald" data-category="cat-photography">Cute Easy</div>-->
<!--                    <div class="clear"></div>-->
<!--                </div>-->
<!--            </div>-->

            <!-- protfolio items -->
            <div class="megafolio-container" data-padding="15" data-layoutarray="[10]">

                <?php if (have_posts()) : $i = 1; while (have_posts()) : the_post();?>
                    <div class="mega-entry cat-all cat-print" id="mega-entry-<?php echo $i;?>" data-src="<?php the_post_thumbnail_url();?>" data-width="504" data-height="400">
                        <div class="mega-hover alone">
                            <div class="mega-hovertitle text-white">Beautiful nail starts here</div>
                            <a data-lightbox-gallery="gallery" href="<?php the_post_thumbnail_url();?>">
                                <div class="mega-hoverview"><i class="pe-7s-search"></i></div>
                            </a>
                        </div>
                    </div>
                <?php $i++; endwhile; endif;?>
            </div>
        </div>
    </div>
</section>

<!-- Section: Divider -->
<section class="divider parallax layer-overlay text-left overflow-visible img-absolute-parent"
         data-bg-img="http://themes.sumerianparadise.com/demo/html/nailsbeauty/images/home_page_book_now_bg.jpg" style="border-top: thick solid black;">
    <div class="container sm-text-center pt-30 pb-30">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="booknow-header"><?php echo get_option('homepage_call_to_action');?></h2>
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