<?php

return [
    'production' => false,
    'baseUrl' => '',
    'collections' => [
        'posts' => [
            'path' => 'blog/{date|Y/m}/{-filename}',
            'author' => 'Jimmy Aldape'
        ],
    ],
    'analytics' => [
        'enabled' => false,
    ]
];
