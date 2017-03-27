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

    add_settings_field('facebook_url', 'Facebook', function () {
        ?><input type="text" name="facebook_url" id="facebook_url" value="<?php echo get_option('facebook_url');?>" /><?php
    }, 'theme-options', 'section');

    add_settings_field('twitter_url', 'Twitter', function () {
        ?><input type="text" name="twitter_url" id="twitter_url" value="<?php echo get_option('twitter_url');?>" /> <?php
    }, 'theme-options', 'section');

    add_settings_field('youtube_url', 'YouTube', function () {
        ?><input type="text" name="youtube_url" id="youtube_url" value="<?php echo get_option('youtube_url');?>" /> <?php
    }, 'theme-options', 'section');

    add_settings_field('linkedin_url', 'LinkedIn', function () {
        ?><input type="text" name="linkedin_url" id="linkedin_url" value="<?php echo get_option('linkedin_url');?>" /> <?php
    }, 'theme-options', 'section');

    add_settings_field('google_url', 'Google+', function () {
        ?><input type="text" name="google_url" id="google_url" value="<?php echo get_option('google_url');?>" /> <?php
    }, 'theme-options', 'section');

    add_settings_field('pinterest_url', 'Pinterest', function () {
        ?><input type="text" name="pinterest_url" id="pinterest_url" value="<?php echo get_option('pinterest_url');?>" /> <?php
    }, 'theme-options', 'section');

    add_settings_field('instagram_url', 'Instagram', function () {
        ?><input type="text" name="instagram_url" id="instagram_url" value="<?php echo get_option('instagram_url');?>" /> <?php
    }, 'theme-options', 'section');

    register_setting('section', 'facebook_url');
    register_setting('section', 'twitter_url');
    register_setting('section', 'youtube_url');
    register_setting('section', 'linkedin_url');
    register_setting('section', 'google_url');
    register_setting('section', 'pinterest_url');
    register_setting('section', 'instagram_url');
});