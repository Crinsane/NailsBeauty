<!-- Section Contact Us -->
<section id="location" class="img-absolute-parent overflow-visible pt-30">
    <div class="section-title">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
                <h2 class="font-italic"><span><?php get_option('section_contact_title', 'Contact US');?></span></h2>
                <div class="subtitle-divider-2 text-center"><?php get_option('section_contact_subtitle', '');?></div>
            </div>
        </div>
    </div>
    <div class="section-content">
        <div class="container">
            <img class="img-absolute hidden-sm hidden-xs contact-bg-image" alt=""
                 src="<?php echo trailingslashit(get_template_directory_uri());?>images/contact-image-bg.png">
            <div class="row" style="padding: 20px; box-shadow: 0px 0px 6px 3px rgba(199,199,199,1);">
                <div class="col-sm-12 col-md-6 p-0">
                    <div class="contact-wrapper pr-20 pl-20 pb-10 pt-10">
                        <?php echo do_shortcode(get_option('homepage_contact_form'));?>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 bg12 bg-img-center bg-img-cover p-0">
                    <?php echo do_shortcode(get_option('homepage_google_maps'));?>
                </div>
            </div>
        </div>
    </div>
</section>