<?php

namespace Flynt\Components\BlockPrivacy;

add_filter('Flynt/addComponentData?name=BlockPrivacy', function ($data) {
    return $data;
});


function getACFLayout()
{
    return [
        'name' => 'BlockPrivacy',
        'label' => __('Privacy', 'flynt'),
        'sub_fields' => [
            [
                'label' => 'Title',
                'name' => 'title',
                'type' => 'text'
            ],

            [
                'label' => 'Tabs',
                'name' => 'tabs',
                'type' => 'repeater',
                'sub_fields' => [
                    [
                        'label' => 'Button',
                        'name' => 'button',
                        'type' => 'text'
                    ],
                    [
                        'label' => 'Content',
                        'name' => 'content',
                        'type' => 'group',
                        'sub_fields' => [
                            [
                                'label' => 'Title',
                                'name' => 'title',
                                'type' => 'text'
                            ],
                            [
                                'label' => 'Paragraph',
                                'name' => 'paragraph',
                                'type' => 'textarea'
                            ],
                            [
                                'label' => 'Title 2',
                                'name' => 'title2',
                                'type' => 'text'
                            ],
                            [
                                'label' => 'Paragraph 2',
                                'name' => 'paragraph2',
                                'type' => 'textarea'
                            ],
                            [
                                'label' => 'List',
                                'name' => 'list',
                                'type' => 'repeater',
                                'sub_fields' => [
                                    [
                                        'label' => 'Content',
                                        'name' => 'content',
                                        'type' => 'text'
                                    ]
                                ]
                            ],
                        ]
                    ]
                ]
            ]
        ]
    ];
}
