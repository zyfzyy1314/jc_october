<?php return [
    'plugin' => [
        'name' => 'Up',
        'description' => 'Plugin shows an "up" button, which scrolls the screen up.',
        'author' => 'Andrei Shilov',
    ],
    'permissions' => [
        'settings' => 'Manage Up button settings'
    ],
    'settings' => [
        'label' => 'Up button',
        'description' => 'Up button settings',
    ],
    'config' => [
        'offset' => [
            'title' => 'Offset, px',
            'description' => 'Offset from the edge of the screen'
        ],
        'min_screen_width' => [
            'title' => 'Min screen width, px',
            'description' => 'Do not display a button for screens whose width is less than or equal to the specified value.'
        ],
        'background_color' => [
            'title' => 'Background color',
        ],
        'padding' => [
            'title' => 'Background padding, px',
        ],
        'opacity' => [
            'title' => 'Opacity',
        ],
        'height' => [
            'title' => 'Height, px',
        ],
        'width' => [
            'title' => 'Width, px',
        ],
        'position' => [
            'title' => 'Position',
            'values' => [
                'tl' => 'Top-left',
                'tr' => 'Top-right',
                'bl' => 'Bottom-left',
                'br' => 'Bottom-right',
                'bc' => 'Bottom-center',
            ]
        ],
        'exclude' => [
            'title' => 'Exclude path',
            'description' => 'Each rule is written from a new line. To enter a path by mask, use the symbol "*"',
        ],
        'image' => [
            'title' => 'Arrow image',
        ],
        'tabs' => [
            'display' => 'Display',
            'button' => 'Button',
        ]
    ],
    'selectimage' => [
        'name' => 'Select Image',
        'description' => 'Field for choosing image',
    ]
];