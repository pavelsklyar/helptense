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
        'main.css'
    ],

    'scripts' => [
        'jquery.min.js',
        'click.js'
    ],

    'favicon' => 'favicon.ico',

    'errors' => [
        404 => 'errors/404',
        'access' => ''
    ],
];