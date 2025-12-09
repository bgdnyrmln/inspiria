<?php

namespace Flynt\Components\BlockAbout;

add_filter('Flynt/addComponentData?name=BlockAbout', function ($data, $component) {
    return $data;
}, 10, 2);

function getACFLayout()
{
    return [
       'label' => __('Block: About', 'flynt'),
       'name' => 'BlockAbout',
         'sub_fields' => [
                [
                'label' => 'Title',
                'name' => 'title',
                'type' => 'text',
                ],
                [
                 'label' => 'Subtitle',
                 'name' => 'subtitle',
                 'type' => 'textarea',
                ],
                [
                 'label' => 'Description',
                 'name' => 'description',
                 'type' => 'textarea',
                ],
                [
                 'label' => 'Bubble',
                 'name' => 'bubble',
                 'type' => 'text',
                ],
                [
                    'label' => 'Image',
                    'name' => 'image',
                    'type' => 'image',
                ], 
          ],
    ];
}