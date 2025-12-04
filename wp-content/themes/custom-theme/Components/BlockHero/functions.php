<?php

namespace Flynt\Components\BlockHero;

add_filter('Flynt/addComponentData?name=BlockHero', function ($data, $component) {
    return $data;
}, 10, 2);

function getACFLayout()
{
    return [
       
    ];
}