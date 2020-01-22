<?php

return [
    'name' => 'HelpTense',
    'homeUrl' => '/',

    'database' => [
        'default' => [
            'host' => 'localhost',
            'user' => 'homestead',
            'password' => 'secret',
            'database' => 'helptense'
        ]
    ],

    'styles' => [
        'main.css',
        'fonts.css',
        'media.css'
    ],

    'scripts' => [

    ],

    'favicon' => 'favicon.ico',

    'errors' => [
        404 => 'errors/404'
    ],
];