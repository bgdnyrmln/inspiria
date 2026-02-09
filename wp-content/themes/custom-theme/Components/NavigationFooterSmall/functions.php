<?php

namespace Flynt\Components\NavigationFooterSmall;

use Flynt\Utils\Options;
use Timber\Timber;
use Flynt\Utils\Asset;

add_filter('Flynt/addComponentData?name=NavigationFooterSmall', function (array $data): array {
    $data['legal']['copyright'] = str_replace("{{year}}", date_i18n('Y'), $data['legal']['copyright']);
    $data['menu'] = Timber::get_menu('navigation_footer') ?? Timber::get_pages_menu();
    $data['logo'] = [
        'src' => Asset::requireUrl('assets/images/logo.svg'),
        'alt' => get_bloginfo('name')
    ];
    $data['dev'] = Asset::requireUrl('assets/images/logo-dev.svg');
    return $data;
});


function getACFLayout(): array
{
    return [
        'name' => 'NavigationFooterSmall',
        'label' => __('NavigationFooterSmall', 'flynt'),
        'sub_fields' => [
        [
            'label' => __('Content', 'flynt'),
            'name' => 'contentTab',
            'type' => 'tab',
            'placement' => 'top',
            'endpoint' => 0
        ],
        [
            'label' => 'background image',
            'name' => 'backgroundImage',
            'type' => 'image',
            'return_format' => 'array',
            'preview_size' => 'thumbnail',
        ],
        [
            'label' => 'Links',
            'name' => 'links',
            'type' => 'repeater',
            'button_label' => 'Add a Link',
            'sub_fields' => [
                [
                    'label' => 'Text',
                    'name' => 'text',
                    'type' => 'text'
                ],
                [
                    'label' => 'Link',
                    'name' => 'link',
                    'type' => 'link',
                ],
            ]
        ],
        [
            'label' => 'Privacy',
            'name' => 'privacy',
            'type' => 'link',
            'return_format' => 'array'
        ],
        [
            'label' => 'Cookies',
            'name' => 'cookies',
            'type' => 'link',
            'return_format' => 'array'
        ],
        [
            'label' => 'Legal',
            'name' => 'legal',
            'type' => 'group',
            'sub_fields' => [
                [
                    'label' => 'Copyright',
                    'name' => 'copyright',
                    'type' => 'text',
                    'default_value' => '©&nbsp;' . date_i18n('Y') . ' ' . get_bloginfo('name'),
                ],
            ]
        ],
    ]
];
};
