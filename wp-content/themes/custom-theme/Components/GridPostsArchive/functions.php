<?php

namespace Flynt\Components\GridPostsArchive;

use Timber\Timber;
use Timber\PostQuery;

add_filter('Flynt/addComponentData?name=GridPostsArchive', function (array $data): array {
    $paged = get_query_var('paged') ?: 1;

    $args = [
        'post_type'      => 'post',
        'posts_per_page' => $data['postsPerPage'] ?? 8,
        'orderby'        => 'date',
        'order'          => 'DESC',
        'paged'          => $paged,
    ];

    $wp_query = new \WP_Query($args);

    $query = new \Timber\PostQuery($wp_query);

    $data['posts'] = $query;
    $data['pagination'] = $query->pagination();
    return $data;
});

function getACFLayout()
{
    return [
       'label' => __('Component: Grid Posts Archive', 'flynt'),
       'name' => 'GridPostsArchive',
        'sub_fields' => [
            [
                'label' => 'Title',
                'name' => 'title',
                'type' => 'text',
            ],
            [
                'label' => 'Subtitle',
                'name' => 'subtitle',
                'type' => 'text',
            ],
            [
                'label' => 'Posts Per Page',
                'name' => 'postsPerPage',
                'type' => 'number',
                'default_value' => 8,
            ],
        ],
    ];
}
