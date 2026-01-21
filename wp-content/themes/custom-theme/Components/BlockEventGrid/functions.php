<?php

namespace Flynt\Components\BlockEventGrid;

use Timber\Timber;

add_filter('Flynt/addComponentData?name=BlockEventGrid', function (array $data): array {
    $args = [
        'post_type'      => 'event',
        'posts_per_page' => $data['postsPerPage'] ?? 3,
    ];

    $wp_query = new \WP_Query($args);
    $query = new \Timber\PostQuery($wp_query);

    $data['events'] = $query;

    return $data;
});

function getACFLayout()
{
    return [
        'name' => 'BlockEventGrid',
        'label' => __('Block: Event Grid', 'flynt'),
        'sub_fields' => [
            [
                'label' => 'Title',
                'name' => 'title',
                'type' => 'group',
                'sub_fields' => [
                    [
                        'label' => 'Text',
                        'name' => 'text',
                        'type' => 'text',
                    ],
                    [
                        'label' => 'Subtext',
                        'name' => 'subtext',
                        'type' => 'textarea',
                    ]
                ],
            ],
            [
                'label' => 'Button Text',
                'name' => 'buttonText',
                'type' => 'text',
            ],
            [
                'label' => 'Events Per Page',
                'name' => 'postsPerPage',
                'type' => 'number',
                'default_value' => 3,
            ],
            [
                'label' => 'Info Box',
                'name' => 'info',
                'type' => 'group',
                'sub_fields' => [
                    [
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                    ],
                    [
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'text',
                    ]
                ],
            ]
        ],
    ];
}
