<?php

use Illuminate\Support\Str;

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
    ],
    'current' => function ($page, $section) {
        return Str::contains($page->getPath(), $section) ? 'current' : '';
    },
];
