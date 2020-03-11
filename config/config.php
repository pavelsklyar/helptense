<?php

//$database = (file_exists(__DIR__ . "/dblocal.php")) ? require __DIR__ . "/dblocal.php" : require __DIR__ . "/database.php";
$database = require __DIR__ . "/database.php";

return [
    'name' => 'HelpTense',
    'homeUrl' => '/',
    'authUrl' => '/auth/',

    'database' => $database,

    /** Названия файлов стилей из public_html/css/, которые нужно подключить */
    'styles' => [
        'main.css',
        'fonts.css',
        'media.css',
        'live.css'
    ],

    /** Названия скриптовых файлов из public_html/js/, которые нужно подключить */
    'scripts' => [
        "jquery-3.4.1.min.js",
        "live.js"
    ],

    /** Ссылка на favicon относительно public_html/ */
    'favicon' => 'favicon.ico',

    'errors' => [
        404 => 'errors/404'
    ],
];