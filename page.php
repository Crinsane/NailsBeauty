<?php get_header();?>

<div class="main-content">

    <?php get_template_part('section', 'page-header');?>

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