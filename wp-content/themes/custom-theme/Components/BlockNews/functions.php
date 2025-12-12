<?php

namespace Flynt\Components\BlockNews;

use Timber\Timber;

add_filter('Flynt/addComponentData?name=BlockNews', function ($data) {
    $data['posts'] = Timber::get_posts([
        'post_type'      => 'post',
        'posts_per_page' => 2,
        'orderby'        => 'date',
        'order'          => 'DESC',
    ]);

    return $data;
});



function getACFLayout()
{
    return [
        'label' => __('Block: News', 'flynt'),
        'name' => 'BlockNews',
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
                'label' => 'Link',
                'name' => 'link',
                'type' => 'link',
            ]
        ],
    ];
}
