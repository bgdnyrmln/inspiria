<?php

namespace Flynt\Components\ContactForm;

use Flynt\Utils\Options;
use Timber\Timber;
use Flynt\Utils\Asset;

add_action('init', function (): void {
    register_nav_menus([
        'contact_form' => __('Contact Form', 'flynt'),
    ]);
});

add_filter('Flynt/addComponentData?name=ContactForm', function (array $data): array {
    $data['menu'] = Timber::get_menu('contact_form') ?? Timber::get_pages_menu();
    return $data;
});


Options::addTranslatable('ContactForm', [
    [
        'label' => 'Form Settings',
        'name' => 'formSettings',
        'type' => 'group',
        'sub_fields' => [
            [
                'label' => 'Form Title',
                'name' => 'formTitle',
                'type' => 'text',
            ],
            [
                'label' => 'Fields',
                'name' => 'fields',
                'type' => 'repeater',
                'sub_fields' => [
                    [
                        'label' => 'Field Label',
                        'name' => 'fieldLabel',
                        'type' => 'text',
                    ],
                    [
                        'label' => 'Field Name',
                        'name' => 'fieldName',
                        'type' => 'text',
                    ],
                    [
                        'label' => 'Field Type',
                        'name' => 'fieldType',
                        'type' => 'select',
                        'choices' => [
                            'text' => 'Text',
                            'email' => 'Email',
                            'tel' => 'Telephone',
                            'textarea' => 'Textarea',
                        ],
                    ],
                    [
                        'label' => 'Required',
                        'name' => 'required',
                        'type' => 'true_false',
                        'ui' => 1,
                    ]
            ],
        ],
        [
            'label' => 'Submit Button Text',
            'name' => 'submitButtonText',
            'type' => 'text',
        ],
        ],
    ],
]);
