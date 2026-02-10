<?php

namespace Flynt\Components\BlockSupport;

add_filter('Flynt/addComponentData?name=BlockSupport', function ($data) {
    return $data;
});


function getACFLayout()
{
    return [
        'name' => 'BlockSupport',
        'label' => __('Support', 'flynt'),
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
                'label' => 'List',
                'name' => 'list',
                'type' => 'group',
                'sub_fields' => [
                    [
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text'
                    ],
                    [
                        'label' => 'Rows',
                        'name' => 'rows',
                        'type' => 'repeater',
                        'sub_fields' => [
                            [
                                'label' => 'Text',
                                'name' => 'text',
                                'type' => 'text'
                            ]
                        ]
                    ]
                ]
            ],
            [
                'label' => 'Bank',
                'name' => 'bank',
                'type' => 'group',
                'sub_fields' => [
                    [
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text'
                    ],
                    [
                        'label' => 'Bank',
                        'name' => 'bank',
                        'type' => 'text'
                    ],
                    [
                        'label' => 'Name',
                        'name' => 'name',
                        'type' => 'text'
                    ],
                    [
                        'label' => 'IBAN',
                        'name' => 'iban',
                        'type' => 'text'
                    ],
                    [
                        'label' => 'Swift',
                        'name' => 'swift',
                        'type' => 'text'
                    ],
                ]
            ],
            [
                'label' => 'Message',
                'name' => 'message',
                'type' => 'text'
            ],
            [
                'label' => 'Image',
                'name' => 'image',
                'type' => 'image'
            ]
        ]    ];
}
