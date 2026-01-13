<?php

namespace Flynt\Components\BlockHero;

add_filter('Flynt/addComponentData?name=BlockHero', function ($data, $component) {
    return $data;
}, 10, 2);

function getACFLayout()
{
    return [
       'name' => 'BlockHero',
       'label' => __('Block: Hero', 'flynt'),
       'sub_fields' => [
            [
                'label' => 'Image',
                'name' => 'image',
                'type' => 'image',
            ],
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
                'label' => 'Description',
                'name' => 'description',
                'type' => 'textarea',
            ],
            [
                'label' => 'Button',
                'name' => 'button',
                'type' => 'link',
                'return_format' => 'array'
            ],
            [
                'label' => 'Bubble',
                'name' => 'bubble',
                'type' => 'repeater',
                'sub_fields' => [
                    [
                        'label' => 'Bubble Content',
                        'name' => 'content',
                        'type' => 'text',
                    ],
                ],
            ],
        ],
    ];
}
