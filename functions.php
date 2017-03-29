<?php

require_once __DIR__ . '/settings.php';
require_once __DIR__ . '/service-post-type.php';
require_once __DIR__ . '/portfolio-post-type.php';

/**
 * Register styles
 */
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('bootstrap', trailingslashit(get_template_directory_uri()).'css/bootstrap.min.css', [], '3.3.6');
    wp_enqueue_style('css-plugin-collections', trailingslashit(get_template_directory_uri()).'css/css-plugin-collections.css', [], '1.0.0');
    wp_enqueue_style('jquery-ui', trailingslashit(get_template_directory_uri()).'css/jquery-ui.min.css', [], '1.11.4');
    wp_enqueue_style('menuzord', trailingslashit(get_template_directory_uri()).'css/menuzord-skins/menuzord-border-top.css');

    wp_enqueue_style('revolution-slider-settings', trailingslashit(get_template_directory_uri()).'js/revolution-slider/css/settings.css', [], '5.0.0');
    wp_enqueue_style('revolution-slider-layers', trailingslashit(get_template_directory_uri()).'js/revolution-slider/css/layers.css', [], '5.0.0');
    wp_enqueue_style('revolution-slider-navigation', trailingslashit(get_template_directory_uri()).'js/revolution-slider/css/navigation.css', [], '5.0.0');
    wp_enqueue_style('custom-bootstrap-margin-padding', trailingslashit(get_template_directory_uri()).'css/custom-bootstrap-margin-padding.css', [], '1.0.0');

    wp_enqueue_style('common-style', trailingslashit(get_template_directory_uri()).'css/common-style.css', [], '1.0.0');
    wp_enqueue_style('main-style', trailingslashit(get_template_directory_uri()).'css/main-style.css', [], '1.0.0');
    wp_enqueue_style('responsive', trailingslashit(get_template_directory_uri()).'css/responsive.css', [], '1.0.0');
    wp_enqueue_style('style-css', get_stylesheet_uri(), [], '1.0.0');

    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', trailingslashit(get_template_directory_uri()).'js/jquery-2.1.4.min.js', [], '2.1.4', true);
    wp_enqueue_script('jquery-ui', trailingslashit(get_template_directory_uri()).'js/jquery-ui.min.js', [], '1.11.4', true);
    wp_enqueue_script('bootstrap', trailingslashit(get_template_directory_uri()).'js/bootstrap.min.js', [], '3.3.6', true);

    wp_enqueue_script('jquery-themepunch-tools', trailingslashit(get_template_directory_uri()).'js/revolution-slider/js/jquery.themepunch.tools.min.js', [], '5.0.0', true);
    wp_enqueue_script('jquery-themepunch-revolution', trailingslashit(get_template_directory_uri()).'js/revolution-slider/js/jquery.themepunch.revolution.min.js', [], '5.0.0', true);
    wp_enqueue_script('custom-rev-slider', trailingslashit(get_template_directory_uri()).'js/custom-rev-slider.js', [], '5.0.0', true);

    wp_enqueue_script('revolution-extension-slideanims', trailingslashit(get_template_directory_uri()).'js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js', [], '5.0.0', true);
    wp_enqueue_script('revolution-extension-layeranimation', trailingslashit(get_template_directory_uri()).'js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js', [], '5.0.0', true);
    wp_enqueue_script('revolution-extension-navigation', trailingslashit(get_template_directory_uri()).'js/revolution-slider/js/extensions/revolution.extension.navigation.min.js', [], '5.0.0', true);
    wp_enqueue_script('revolution-extension-parallax', trailingslashit(get_template_directory_uri()).'js/revolution-slider/js/extensions/revolution.extension.parallax.min.js', [], '5.0.0', true);

    wp_enqueue_script('google-map-js', 'http://maps.google.com/maps/api/js', [], false, true);
    wp_enqueue_script('google-map-init', trailingslashit(get_template_directory_uri()).'js/google-map-init.js', [], false, true);

    wp_enqueue_script('jquery-plugin-collection', trailingslashit(get_template_directory_uri()).'js/jquery-plugin-collection.js', ['jquery'], false, true);
    wp_enqueue_script('custom', trailingslashit(get_template_directory_uri()).'js/custom.js', [], false, true);
});

/**
 * Add default posts and comments RSS feed links to head.
 */
add_theme_support('automatic-feed-links');

/**
 * Let WordPress manage the document title.
 */
add_theme_support('title-tag');

/**
 * Enable support for Post Thumbnails on posts and pages.
 */
add_theme_support('post-thumbnails');

add_action('wp_head', function () {
    ?>
    <link href="<?php echo trailingslashit(get_template_directory_uri());?>images/favicon.png" rel="shortcut icon" type="image/png">
    <link href="<?php echo trailingslashit(get_template_directory_uri());?>images/apple-touch-icon-32x32.png" rel="apple-touch-icon">
    <link href="<?php echo trailingslashit(get_template_directory_uri());?>images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
    <link href="<?php echo trailingslashit(get_template_directory_uri());?>images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
    <link href="<?php echo trailingslashit(get_template_directory_uri());?>images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">
    <?php
});

remove_action('wp_head', 'wp_generator');

add_action('widgets_init', function () {
    register_sidebar([
        'name' => 'Footer',
        'id' => 'sidebar-footer',
        'description' => 'Sidebar voor de footer',
        'before_widget' => '<div class="col-sm-6 col-md-4 mt-30"><div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ]);
});

add_action('after_setup_theme', function () {
    register_nav_menu('primary', 'Primary Menu');
});

add_filter('post_thumbnail_html', 'remove_width_attribute', 10);
add_filter('image_send_to_editor', 'remove_width_attribute', 10);

function remove_width_attribute($html) {
    return preg_replace('/(width|height)="\d*"\s/', '', $html);
}