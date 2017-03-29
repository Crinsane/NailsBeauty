<?php get_header();?>

<div class="main-content">

    <section class="inner-header divider" data-bg-img="http://nailsbeauty.dev/wp-content/uploads/2017/03/page_bg_header.jpg">
        <div class="container pt-150 pb-30"></div>
    </section>

    <?php get_template_part('section', 'breadcrumbs');?>

    <section id="gallery">
        <div class="container img-absolute-parent overflow-visible pt-30 pb-0">
            <div class="pb-10">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center gallery-header">
                        <h2 class="font-italic font-Playfair-Display"><span><?php echo get_option('section_portfolio_title', 'Portfolio');?></span></h2>
                        <div class="subtitle-divider-2 text-center"><?php echo get_option('section_portfolio_subtitle', '');?></div>
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

    <?php get_template_part('section', 'divider');?>

    <?php get_template_part('section', 'newsletter');?>

</div>

<?php get_footer();?>