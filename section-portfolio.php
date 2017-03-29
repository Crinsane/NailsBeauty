<!-- Section Gallery -->
<section id="gallery">
    <div class="container img-absolute-parent overflow-visible pt-50 pb-sm-40">
        <div class="section-title">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center gallery-header">
                    <h2 class="font-italic"><span><?php get_option('section_portfolio_title', 'Portfolio');?></span></h2>
                    <div class="subtitle-divider-2 text-center"><?php get_option('section_portfolio_subtitle', '');?></div>
                </div>
            </div>
        </div>
        <div class="section-content">
            <!-- protfolio items -->
            <div class="megafolio-container" data-padding="15" data-layoutarray="[6]">
                <?php
                    $servicesQuery = new WP_Query(['post_type' => 'portfolio']);

                    if ($servicesQuery->have_posts()) : $i = 1; while ($servicesQuery->have_posts()) : $servicesQuery->the_post();
                ?>
                    <div class="mega-entry cat-all cat-print" id="mega-entry-<?php echo $i;?>"
                         data-src="<?php the_post_thumbnail_url();?>" data-width="504" data-height="700">
                        <div class="mega-hover alone">
                            <div class="mega-hovertitle text-white">what are the hottest nail polish colors right
                                now?
                            </div>
                            <a data-lightbox-gallery="gallery" href="<?php the_post_thumbnail_url();?>">
                                <div class="mega-hoverview"><i class="pe-7s-search"></i></div>
                            </a>
                        </div>
                    </div>
                <?php
                    $i++; endwhile; endif;
                    wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</section>