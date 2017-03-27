<?php

add_action('init', function () {
    $labels = array(
        'name'               => 'Behandelingen',
        'singular_name'      => 'Behandeling',
        'menu_name'          => 'Behandelingen',
        'name_admin_bar'     => 'Behandeling',
        'add_new'            => 'Nieuwe behandeling',
        'add_new_item'       => 'Nieuwe behandeling toevoegen',
        'new_item'           => 'Nieuwe behandeling',
        'edit_item'          => 'Behandeling wijzigen',
        'view_item'          => 'Behandeling bekijken',
        'all_items'          => 'Alle behandelingen',
        'search_items'       => 'Zoek behandelingen',
        'parent_item_colon'  => 'Parent behandeling:',
        'not_found'          => 'Geen behandelingen gevonden',
        'not_found_in_trash' => 'Geen behandelingen gevonden in de prullenbak.',
    );

    $args = [
        'labels'             => $labels,
        'description'        => 'Beschrijving',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => ['slug' => 'services'],
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_icon'          => 'dashicons-screenoptions',
        'menu_position'      => null,
        'supports'           => ['title', 'editor', 'thumbnail', 'excerpt'],
        'register_meta_box_cb' => function () {
            add_meta_box('services_box_color', 'Kleur', function ($post) {
                $boxColor = get_post_meta($post->ID, '_box_color', true);
                ?>
                    <select class="widefat" name="_box_color">
                        <option value="lightgray" <?php selected($boxColor, 'lightgray'); ?>>Lichtgrijs</option>
                        <option value="lightblue" <?php selected($boxColor, 'lightblue'); ?>>Lichtblauw</option>
                    </select>
                <?php
            }, 'services', 'side', 'default');
        }
    ];

    register_post_type('services', $args);
});

add_action('save_post', function ($post_id, $post) {
    // Is the user allowed to edit the post or page?
    if (! current_user_can('edit_post', $post->ID)) {
        return $post->ID;
    }

    // OK, we're authenticated: we need to find and save the data
    // We'll put it into an array to make it easier to loop though.

    $services_meta['_box_color'] = $_POST['_box_color'];

    // Add values of $events_meta as custom fields

    foreach ($services_meta as $key => $value) { // Cycle through the $services_meta array!
        if ($post->post_type == 'revision') return; // Don't store custom data twice
        $value = implode(',', (array)$value); // If $value is an array, make it a CSV (unlikely)
        if (get_post_meta($post->ID, $key, FALSE)) { // If the custom field already has a value
            update_post_meta($post->ID, $key, $value);
        } else { // If the custom field doesn't have a value
            add_post_meta($post->ID, $key, $value);
        }
        if (! $value) delete_post_meta($post->ID, $key); // Delete if blank
    }
}, 1, 2);
