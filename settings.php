<?php

function theme_settings_page(){}

if (isset($_GET['page']) && $_GET['page'] == 'theme-settings') {
//    add_action('admin_print_scripts', function () {
//        wp_enqueue_script('media-upload');
//        wp_enqueue_script('thickbox');
//        wp_register_script('theme-settings-upload', trailingslashit(get_template_directory_uri()).'js/theme-settings-upload.js', ['jquery', 'media-upload', 'thickbox']);
//        wp_enqueue_script('theme-settings-upload');
//    });
//    add_action('admin_print_styles', function () {
//        wp_enqueue_style('thickbox');
//    });

    add_action('admin_enqueue_scripts', function () {
        wp_enqueue_media();
        wp_register_script('theme-settings-upload', trailingslashit(get_template_directory_uri()).'js/theme-settings-upload.js', ['jquery'], '1.0.0');
        wp_enqueue_script('theme-settings-upload');
    });
}

add_action('admin_menu', function () {
    add_menu_page('Theme Settings', 'Theme Settings', 'manage_options', 'theme-settings', function () {
        ?>
        <div class="wrap">
            <h1>Theme Settings</h1>
            <form method="post" action="options.php">
                <?php
                settings_fields('section');
                do_settings_sections('theme-options');
                submit_button();
                ?>
            </form>
        </div>
        <?php
    }, null, 99);
});

add_action('admin_init', function () {
    add_settings_section('section', 'General Settings', null, 'theme-options');

    /**
     * General settings
     */
    add_settings_field('site_logo', 'Site logo', function () {

        $imageId = get_option('site_logo');
        if (intval($imageId) > 0) {
            // Change with the image size you want to use
            $image = wp_get_attachment_image($imageId, 'medium', false, ['id' => 'myprefix-preview-image']);
        } else {
            // Some default image
            $image = '<img id="myprefix-preview-image" src="https://some.default.image.jpg" />';
        }

        echo $image;

        ?>
<!--            <input id="upload_image" type="text" size="36" name="upload_image" value="" />-->
<!--            <input id="upload_image_button" type="button" value="Upload Image" />-->

        <input type="hidden" name="site_logo" id="myprefix_image_id" value="<?php echo esc_attr( $image_id ); ?>" class="regular-text" />
        <input type='button' class="button-primary" value="Selecteer afbeelding" id="myprefix_media_manager"/>
        <?php
    }, 'theme-options', 'section');

    register_setting('section', 'site_logo');

    /**
     * Social media settings
     */
    add_settings_field('facebook_url', 'Facebook', function () {
        ?><input type="text" name="facebook_url" id="facebook_url" class="regular-text" value="<?php echo esc_attr(get_option('facebook_url'));?>" /><?php
    }, 'theme-options', 'section');

    add_settings_field('twitter_url', 'Twitter', function () {
        ?><input type="text" name="twitter_url" id="twitter_url" class="regular-text" value="<?php echo esc_attr(get_option('twitter_url'));?>" /> <?php
    }, 'theme-options', 'section');

    add_settings_field('youtube_url', 'YouTube', function () {
        ?><input type="text" name="youtube_url" id="youtube_url" class="regular-text" value="<?php echo esc_attr(get_option('youtube_url'));?>" /> <?php
    }, 'theme-options', 'section');

    add_settings_field('linkedin_url', 'LinkedIn', function () {
        ?><input type="text" name="linkedin_url" id="linkedin_url" class="regular-text" value="<?php echo esc_attr(get_option('linkedin_url'));?>" /> <?php
    }, 'theme-options', 'section');

    add_settings_field('google_url', 'Google+', function () {
        ?><input type="text" name="google_url" id="google_url" class="regular-text" value="<?php echo esc_attr(get_option('google_url'));?>" /> <?php
    }, 'theme-options', 'section');

    add_settings_field('pinterest_url', 'Pinterest', function () {
        ?><input type="text" name="pinterest_url" id="pinterest_url" class="regular-text" value="<?php echo esc_attr(get_option('pinterest_url'));?>" /> <?php
    }, 'theme-options', 'section');

    add_settings_field('instagram_url', 'Instagram', function () {
        ?><input type="text" name="instagram_url" id="instagram_url" class="regular-text" value="<?php echo esc_attr(get_option('instagram_url'));?>" /> <?php
    }, 'theme-options', 'section');

    register_setting('section', 'facebook_url');
    register_setting('section', 'twitter_url');
    register_setting('section', 'youtube_url');
    register_setting('section', 'linkedin_url');
    register_setting('section', 'google_url');
    register_setting('section', 'pinterest_url');
    register_setting('section', 'instagram_url');

    /**
     * Home page settings
     */
    add_settings_field('homepage_call_to_action', 'Call-to-action tekst', function () {
        ?><input type="text" name="homepage_call_to_action" id="homepage_call_to_action" class="regular-text" value="<?php echo esc_attr(get_option('homepage_call_to_action'));?>" /> <?php
    }, 'theme-options', 'section');

    add_settings_field('homepage_contact_form', 'Shortcode contact formulier', function () {
        ?><input type="text" name="homepage_contact_form" id="homepage_contact_form" class="regular-text" value="<?php echo esc_attr(get_option('homepage_contact_form'));?>" /> <?php
    }, 'theme-options', 'section');

    add_settings_field('homepage_google_maps', 'Shortcode Google maps', function () {
        ?><input type="text" name="homepage_google_maps" id="homepage_google_maps" class="regular-text" value="<?php echo esc_attr(get_option('homepage_google_maps'));?>" /> <?php
    }, 'theme-options', 'section');

    register_setting('section', 'homepage_call_to_action');
    register_setting('section', 'homepage_contact_form');
    register_setting('section', 'homepage_google_maps');
});