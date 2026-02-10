<?php

namespace Flynt\Components\BlockResources;

add_filter('Flynt/addComponentData?name=BlockResources', function ($data) {
    return $data;
});


function getACFLayout()
{
    return [
        'name' => 'BlockResources',
        'label' => __('Resources', 'flynt'),
        'sub_fields' => [
            [
                'label' => 'Title',
                'name' => 'title',
                'type' => 'text'
            ],
            [
                'label' => 'Subtitle',
                'name' => 'subtitle',
                'type' => 'textarea'
            ],
            [
                'label' => 'Group names',
                'name' => 'groups',
                'type' => 'group',
                'sub_fields' => [
                    [
                        [
                            'label' => 'Links',
                            'name' => 'links',
                            'type' => 'text'
                        ],
                        [
                            'label' => 'Videos',
                            'name' => 'videos',
                            'type' => 'text'
                        ],
                        [
                            'label' => 'Downloadable content',
                            'name' => 'dl_content',
                            'type' => 'text'
                        ]
                    ]
                ]
            ],
            [
                'label' => 'Links',
                'name' => 'links',
                'type' => 'repeater',
                'sub_fields' => [
                    [
                        [
                            'label' => 'Title',
                            'name' => 'title',
                            'type' => 'text'
                        ],
                        [
                            'label' => 'Subtitle',
                            'name' => 'subtitle',
                            'type' => 'textarea'
                        ],
                        [
                            'label' => 'Link text',
                            'name' => 'text',
                            'type' => 'text',
                            'default_value' => 'Apskatīt'
                        ],
                        [
                            'label' => 'URL',
                            'name' => 'url',
                            'type' => 'url'
                        ]
                    ]
                ]
            ],
            [
                'label' => 'Videos',
                'name' => 'videos',
                'type' => 'repeater',
                'sub_fields' => [
                    [
                        [
                            'label' => 'Title',
                            'name' => 'title',
                            'type' => 'text'
                        ],
                        [
                            'label' => 'Subtitle',
                            'name' => 'subtitle',
                            'type' => 'textarea'
                        ],
                        [
                            'label' => 'Link text',
                            'name' => 'text',
                            'type' => 'text',
                            'default_value' => 'Apskatīt'

                        ],
                        [
                            'label' => 'URL',
                            'name' => 'url',
                            'type' => 'oembed'
                        ]
                    ]
                ]
            ],
            [
                'label' => 'Downloadable Content',
                'name' => 'dl_content',
                'type' => 'repeater',
                'sub_fields' => [
                    [
                        [
                            'label' => 'Title',
                            'name' => 'title',
                            'type' => 'text'
                        ],
                        [
                            'label' => 'Subtitle',
                            'name' => 'subtitle',
                            'type' => 'textarea'
                        ],
                        [
                            'label' => 'Link text',
                            'name' => 'text',
                            'type' => 'text',
                            'default_value' => 'Lejupielādē'
                        ],
                        [
                            'label' => 'File',
                            'name' => 'file',
                            'type' => 'file',
                            'return_format' => 'array',
                            'library' => 'all'
                        ]
                    ]
                ]
            ],
        ]
    ];
}
