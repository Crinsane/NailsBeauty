<!-- Section newsletter -->
<section id="newsletter" class="contact img-absolute-parent overflow-visible mb-sm-50">
    <div class="container pb-10">
        <img class="img-absolute img-pos-left hidden-sm hidden-xs newsletter-bg-image" alt="" src="<?php echo get_option('section_newsletter_background');?>">
        <div class="section-content">
            <div class="row pt-10">
                <div class="col-md-10 col-md-offset-1">
                    <?php echo do_shortcode(get_option('homepage_mailchimp_form'));?>
                </div>
            </div>
        </div>
    </div>
</section>