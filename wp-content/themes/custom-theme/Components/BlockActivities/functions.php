<?php

namespace Flynt\Components\BlockActivities;

add_filter('Flynt/addComponentData?name=BlockActivities', function ($data, $component) {
    return $data;
}, 10, 2);

function getACFLayout()
{
    return [
       'label' => __('Block: Activities', 'flynt'),
       'name' => 'BlockActivities',
         'sub_fields' => [
                [
                    'label' => 'Title',
                    'name' => 'title',
                    'type' => 'text'
                ],
                [
                    'label' => 'Description',
                    'name' => 'description',
                    'type' => 'textarea'
                ],
                [
                    'label' => 'Activities',
                    'name' => 'activities',
                    'type' => 'repeater',
                    'sub_fields' => [
                        [
                            'label' => 'Activity Title',
                            'name' => 'title',
                            'type' => 'text',
                        ],
                        [
                            'label' => 'Activity Description',
                            'name' => 'description',
                            'type' => 'textarea',
                        ],
                    ]
                ],
                [
                    'label' => 'Bottom Text',
                    'name' => 'bottomText',
                    'type' => 'text',
                ]
          ],
    ];
}
