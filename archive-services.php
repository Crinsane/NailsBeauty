<?php get_header();?>

<div class="main-content">

    <?php get_template_part('section', 'page-header');?>

    <?php get_template_part('section', 'breadcrumbs');?>

    <section id="services" class="img-absolute-parent overflow-visible pb-50">
      <div class="container mt-50">
          <div class="section-title">
              <div class="row">
                  <div class="col-md-6 col-md-offset-3 text-center">
                      <h2 class="font-italic"><span><?php echo get_option('section_services_title', 'Our services');?></span></h2>
                      <p class="subtitle"><?php echo get_option('section_services_subtitle', '');?></p>
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
                              </div>
                          </div>
                      </div>
                  <?php endwhile; endif;?>
              </div>
          </div>
      </div>
    </section>

    <?php get_template_part('section', 'divider');?>

    <?php get_template_part('section', 'newsletter');?>

</div>

<?php get_footer();?>