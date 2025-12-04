<?php

namespace Flynt\Components\NavigationTop;

use Flynt\Utils\Options;
use Timber\Timber;
use Flynt\Utils\Asset;


add_filter('Flynt/addComponentData?name=NavigationTop', function (array $data): array {
    return $data;
});


Options::addTranslatable('NavigationTop', [
    [
        'label' => __('Content', 'flynt'),
        'name' => 'contentTab',
        'type' => 'tab',
        'placement' => 'top',
        'endpoint' => 0
    ],
    [
        'label' => 'Label',
        'name' => 'label',
        'type' => 'text',
        'default_value' => 'Vieta svarīgai informācijai jeb paziņojuma tekstam'
    ],
    [
        'label' => 'Button',
        'name' => 'button',
        'type' => 'link',
        'return_format' => 'array'
    ]
]);
