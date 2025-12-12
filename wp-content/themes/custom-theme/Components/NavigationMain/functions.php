<?php

namespace Flynt\Components\NavigationMain;

use Flynt\Utils\Asset;
use Flynt\Utils\Options;
use Timber\Timber;

add_action('init', function (): void {
    register_nav_menus([
        'navigation_main' => __('Navigation Main', 'flynt')
    ]);
});

add_filter('Flynt/addComponentData?name=NavigationMain', function (array $data): array {
    $data['languages'] = apply_filters('wpml_active_languages', null, 'orderby=id&order=asc');
    $data['menu'] = Timber::get_menu('navigation_main') ?? Timber::get_pages_menu();
    $data['logo'] = [
        'src' => Asset::requireUrl('assets/images/logo.svg'),
    ];
    return $data;
});

Options::addTranslatable('NavigationMain', [
    [
        'label' => __('Content', 'flynt'),
        'name' => 'contentTab',
        'type' => 'tab',
        'placement' => 'top',
        'endpoint' => 0
    ],
    [
        'label' => 'Featured',
        'name' => 'featured',
        'type' => 'link',
        'return_format' => 'array'
    ],
]);
