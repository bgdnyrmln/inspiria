<?php

namespace Flynt\Components\BlockTeam;

add_filter('Flynt/addComponentData?name=BlockTeam', function ($data, $component) {
    return $data;
}, 10, 2);

function getACFLayout()
{
    return [
        'label' => __('Block: Team', 'flynt'),
        'name' => 'BlockTeam',
        'sub_fields' => [
            [
                'label' => 'Title',
                'name' => 'title',
                'type' => 'text',
            ],
            [
                'label' => 'subtitle',
                'name' => 'subtitle',
                'type' => 'text',
            ],
            [
                'label' => 'description',
                'name' => 'description',
                'type' => 'textarea',
            ],
            [
                'label' => 'Bubble',
                'name' => 'bubble',
                'type' => 'text',
            ],
            [
                'label' => 'Skills Group',
                'name' => 'skillsgroup',
                'type' => 'group',
                'sub_fields' => [
                    [
                        'label' => 'Skill Title',
                        'name' => 'skilltitle',
                        'type' => 'text',
                    ],
                    [
                        'label' => 'Skills',
                        'name' => 'skills',
                        'type' => 'repeater',
                        'sub_fields' => [
                            [
                                'label' => 'Title',
                                'name' => 'title',
                                'type' => 'text',
                            ],
                        ],
                    ],
                    [
                        'label' => 'Bottom Image',
                        'name' => 'bottomimage',
                        'type' => 'image'
                    ]
                ]
            ]
        ]
    ];
}
