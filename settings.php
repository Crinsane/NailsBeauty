<?php

function theme_settings_page(){}

add_action('admin_menu', function () {
    add_menu_page('Theme Settings', 'Theme Settings', 'manage_options', 'theme-settings', function () {
        ?>
        <div class="wrap">
            <h1>Theme Settings</h1>
            <form method="post" action="options.php">
                <?php
                settings_fields('section');
                settings_fields('homepage');
                settings_fields('sections');
                do_settings_sections('theme-options');
                submit_button();
                ?>
            </form>
        </div>
        <?php
    }, null, 99);
});

add_action('admin_init', function () {
    add_settings_section('section', 'All Settings', null, 'theme-options');
    add_settings_section('homepage', 'Homepage Settings', null, 'theme-options');
    add_settings_section('sections', 'Sections Settings', null, 'theme-options');

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

    add_settings_field('homepage_call_to_action', 'Call-to-action tekst', function () {
        ?><input type="text" name="homepage_call_to_action" id="homepage_call_to_action" class="regular-text" value="<?php echo esc_attr(get_option('homepage_call_to_action'));?>" /> <?php
    }, 'theme-options', 'homepage');

    add_settings_field('homepage_contact_form', 'Shortcode contact formulier', function () {
        ?><input type="text" name="homepage_contact_form" id="homepage_contact_form" class="regular-text" value="<?php echo esc_attr(get_option('homepage_contact_form'));?>" /> <?php
    }, 'theme-options', 'homepage');

    add_settings_field('homepage_google_maps', 'Shortcode Google maps', function () {
        ?><input type="text" name="homepage_google_maps" id="homepage_google_maps" class="regular-text" value="<?php echo esc_attr(get_option('homepage_google_maps'));?>" /> <?php
    }, 'theme-options', 'homepage');

    add_settings_field('homepage_mailchimp_form', 'Shortcode Mailchimp', function () {
        ?><input type="text" name="homepage_mailchimp_form" id="homepage_mailchimp_form" class="regular-text" value="<?php echo esc_attr(get_option('homepage_mailchimp_form'));?>" /> <?php
    }, 'theme-options', 'homepage');

    register_setting('homepage', 'homepage_call_to_action');
    register_setting('homepage', 'homepage_contact_form');
    register_setting('homepage', 'homepage_google_maps');
    register_setting('homepage', 'homepage_mailchimp_form');

    add_settings_field('section_services_title', 'Services section title', function () {
        ?><input type="text" name="section_services_title" id="section_services_title" class="regular-text" value="<?php echo esc_attr(get_option('section_services_title'));?>" /> <?php
    }, 'theme-options', 'sections');

    add_settings_field('section_services_subtitle', 'Services section subtitle', function () {
        ?><input type="text" name="section_services_subtitle" id="section_services_subtitle" class="regular-text" value="<?php echo esc_attr(get_option('section_services_subtitle'));?>" /> <?php
    }, 'theme-options', 'sections');

    add_settings_field('section_portfolio_title', 'Portfolio section title', function () {
        ?><input type="text" name="section_portfolio_title" id="section_portfolio_title" class="regular-text" value="<?php echo esc_attr(get_option('section_portfolio_title'));?>" /> <?php
    }, 'theme-options', 'sections');

    add_settings_field('section_portfolio_subtitle', 'Portfolio section subtitle', function () {
        ?><input type="text" name="section_portfolio_subtitle" id="section_portfolio_subtitle" class="regular-text" value="<?php echo esc_attr(get_option('section_portfolio_subtitle'));?>" /> <?php
    }, 'theme-options', 'sections');

    add_settings_field('section_contact_title', 'Contact section title', function () {
        ?><input type="text" name="section_contact_title" id="section_contact_title" class="regular-text" value="<?php echo esc_attr(get_option('section_contact_title'));?>" /> <?php
    }, 'theme-options', 'sections');

    add_settings_field('section_contact_subtitle', 'Contact section subtitle', function () {
        ?><input type="text" name="section_contact_subtitle" id="section_contact_subtitle" class="regular-text" value="<?php echo esc_attr(get_option('section_contact_subtitle'));?>" /> <?php
    }, 'theme-options', 'sections');

    register_setting('sections', 'section_services_title');
    register_setting('sections', 'section_services_subtitle');
    register_setting('sections', 'section_portfolio_title');
    register_setting('sections', 'section_portfolio_subtitle');
    register_setting('sections', 'section_contact_title');
    register_setting('sections', 'section_contact_subtitle');
});