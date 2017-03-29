<!-- Section: Services -->
<section id="services" class="img-absolute-parent overflow-visible">
    <div class="container">
        <div class="section-title">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <h2 class="font-italic"><span><?php echo get_option('section_services_title', 'Our services');?></span></h2>
                    <div class="subtitle-divider-2 text-center divider-service-2"><?php echo get_option('section_services_subtitle', '');?></div>
                </div>
            </div>
            <img class="img-absolute hidden-sm hidden-xs service-bg-image" alt="" src="<?php echo trailingslashit(get_template_directory_uri());?>images/service-bg.png">
        </div>
        <div class="section-content">
            <div class="row">
                <?php
                $servicesQuery = new WP_Query(['post_type' => 'services']);

                if ($servicesQuery->have_posts()) : while ($servicesQuery->have_posts()) : $servicesQuery->the_post();
                    ?>
                    <div class="col-md-6 text-center p-0">
                        <?php $boxColor = get_post_meta(get_the_ID(), '_box_color', true);?>
                        <div class="services-items overlay-<?php echo $boxColor;?> divider">
                            <div class="p-30 pl-40 pr-40">
                                <h4><a href="#" class="service-title"><?php the_title();?></a></h4>
                                <p class="text-black"><?php the_content();?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile; endif;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</section>