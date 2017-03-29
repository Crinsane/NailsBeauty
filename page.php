<?php get_header();?>

<div class="main-content">

    <section class="inner-header divider" data-bg-img="http://nailsbeauty.dev/wp-content/uploads/2017/03/page_bg_header.jpg">
        <div class="container pt-150 pb-30"></div>
    </section>

    <?php get_template_part('section', 'breadcrumbs');?>

    <section>
        <div class="container pt-sm-10">
            <?php if (have_posts()) : while (have_posts()) : the_post();?>
                <?php the_content();?>
            <?php endwhile; endif;?>
        </div>
    </section>

    <?php get_template_part('section', 'divider');?>

    <?php get_template_part('section', 'newsletter');?>

</div>

<?php get_footer();?>