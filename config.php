<?php

use Illuminate\Support\Str;

return [
    'production' => false,
    'baseUrl' => '',
    'collections' => [
        'articles' => [
            'path' => 'blog/{date|Y/m}/{-filename}',
            'author' => 'Jimmy Aldape',
            'sort' => '-date',
            'excerpt' => function ($page, $characters = 50) {
                return substr(strip_tags($page->getContent()), 0, $characters) . ' ...';
            },
        ],
    ],
    'analytics' => [
        'enabled' => false,
    ],
    'current' => function ($page, $section) {
        return Str::contains($page->getPath(), $section) ? 'current' : '';
    },
    'excerpt' => function ($page, $characters = 100) {
        return substr($page->getContent(), 0, $characters);
    }
];
