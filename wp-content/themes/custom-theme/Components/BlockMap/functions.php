<?php

namespace Flynt\Components\BlockMap;

use Flynt\ComponentManager;
use Timber\Timber;

add_filter('Flynt/addComponentData?name=BlockMap', function (array $data): array {
    return $data;
});

function getACFLayout(): array
{
    return [
        'name' => 'BlockMap',
        'label' => __('Block: Map', 'flynt'),
        'sub_fields' => [
            [
                'label' => 'Title',
                'name' => 'title',
                'type' => 'text'
            ],
            [
                'label' => 'Subtitle',
                'name' => 'subtitle',
                'type' => 'text'
            ],
            [
                'label' => 'Socials',
                'name' => 'socials',
                'type' => 'repeater',
                'button_label' => 'Add Social Link',
                'sub_fields' => [
                    [
                        'label' => 'Icon',
                        'name' => 'icon',
                        'type' => 'image',
                        'return_format' => 'array',
                        'preview_size' => 'thumbnail',
                        'library' => 'all',
                    ],
                    [
                        'label' => 'Link',
                        'name' => 'link',
                        'type' => 'url',
                    ],
                ]
            ]
        ]
    ];
}
