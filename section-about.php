<!-- Section: About US -->
<section id="features" class="overflow-visible">
    <div class="container pt-0">
        <div class="section-content pt-0">
            <div class="row">
                <div class="col-md-12">
                    <div class="features-health p-30 pb-10 pr-sm-15 pl-xs-15" data-bg-color="#FFF">
                        <h2 class="text-center font-italic"><span><?php echo get_option('section_about_title', 'About Our Salon');?></span></h2>
                        <div class="subtitle-divider-2 text-center divider-about-us"><?php echo get_option('section_about_subtitle', '');?></div>
                        <div class="icon-box left media mt-30">
                            <?php if (have_posts()) : while(have_posts()) : the_post();?>
                                <div class="col-md-6">
                                    <?php the_post_thumbnail();?>
                                </div>
                                <div class="col-md-6 mt-sm-30">
                                    <?php the_content();?>
                                </div>
                            <?php endwhile; endif;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>