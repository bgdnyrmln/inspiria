<?php

namespace Flynt\Components\GridPostsArchive;

use Timber\Timber;

add_filter('Flynt/addComponentData?name=GridPostsArchive', function (array $data): array {
    $data['posts'] = Timber::get_posts([
        'post_type'      => 'post',
        'posts_per_page' => $data['postsPerPage'] ?? 8,
        'orderby'        => 'date',
        'order'          => 'DESC',
    ]);

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
                'default_value' => 6,
            ],
        ],
    ];
}