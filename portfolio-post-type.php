<?php

add_action('init', function () {
    $labels = [
        'name'               => 'Portfolio',
        'singular_name'      => 'Portfolio item',
        'menu_name'          => 'Portfolio',
        'name_admin_bar'     => 'Portfolio',
        'add_new'            => 'Nieuw item',
        'add_new_item'       => 'Nieuw item toevoegen',
        'new_item'           => 'Nieuw item',
        'edit_item'          => 'Item wijzigen',
        'view_item'          => 'Item bekijken',
        'all_items'          => 'Portfolio',
        'search_items'       => 'Zoeken in portfolio',
        'parent_item_colon'  => 'Parent item:',
        'not_found'          => 'Geen portfolio items gevonden',
        'not_found_in_trash' => 'Geen portfolio items gevonden in de prullenbak.',
    ];

    $args = [
        'labels'             => $labels,
        'description'        => 'Portfolio',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => ['slug' => 'portfolio'],
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_icon'          => 'dashicons-screenoptions',
        'menu_position'      => null,
        'supports'           => ['title', 'editor', 'thumbnail'],
    ];

    register_post_type('portfolio', $args);
});