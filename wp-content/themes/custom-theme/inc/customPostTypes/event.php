<?php

namespace Flynt\CustomPostTypes;

add_action('init', function (): void {
    $labels = [
        'name'               => __('Events', 'flynt'),
        'singular_name'      => __('Event', 'flynt'),
        'menu_name'          => __('Events', 'flynt'),
        'add_new'            => __('Add Event', 'flynt'),
        'add_new_item'       => __('Add New Event', 'flynt'),
        'edit_item'          => __('Edit Event', 'flynt'),
        'new_item'           => __('New Event', 'flynt'),
        'view_item'          => __('View Event', 'flynt'),
        'search_items'       => __('Search Events', 'flynt'),
        'not_found'          => __('No events found', 'flynt'),
        'not_found_in_trash' => __('No events found in Trash', 'flynt'),
    ];
    $args = [
        'label'               => __('Event', 'flynt'),
        'labels'              => $labels,
        'public'              => true,
        'show_in_rest'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-calendar',
        'supports'            => ['title', 'editor', 'thumbnail', 'revisions'],
        'has_archive'         => true,
        'rewrite'             => [
            'slug' => 'events',
        ],
    ];
    register_post_type('event', $args);
});
