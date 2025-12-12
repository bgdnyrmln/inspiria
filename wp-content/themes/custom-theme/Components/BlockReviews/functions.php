<?php

namespace Flynt\Components\BlockReviews;

add_filter('Flynt/addComponentData?name=BlockReviews', function ($data, $component) {
    return $data;
}, 10, 2);


function getACFLayout()
{
    return [
       'label' => __('Block: Reviews', 'flynt'),
       'name' => 'BlockReviews',
        'sub_fields' => [
            [
                'label' => 'Title',
                'name' => 'title',
                'type' => 'text',
            ],
            [
                'label' => 'Reviews',
                'name' => 'reviews',
                'type' => 'repeater',
                'sub_fields' => [
                    [
                        'label' => 'Reviewer Name',
                        'name' => 'reviewer_name',
                        'type' => 'text',
                    ],
                    [
                        'label' => 'Review Text',
                        'name' => 'review_text',
                        'type' => 'textarea',
                    ],
                    [
                        'label' => 'Place',
                        'name' => 'place',
                        'type' => 'text',
                    ],
                    [
                        'label' => 'Comment',
                        'name' => 'comment',
                        'type' => 'textarea',
                    ]
                ],
            ]
        ],
    ];
}
