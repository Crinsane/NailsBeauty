<?php get_header();?>

<div class="main-content">

    <section class="inner-header divider" data-bg-img="http://nailsbeauty.dev/wp-content/uploads/2017/03/page_bg_header.jpg">
        <div class="container pt-150 pb-30"></div>
    </section>

    <?php get_template_part('section', 'breadcrumbs');?>

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

    <?php get_template_part('section', 'divider');?>

    <?php get_template_part('section', 'newsletter');?>

</div>

<?php get_footer();?>