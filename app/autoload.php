<?php

define('APP', __DIR__ . '/');
define('ROOT', APP . '../');
define('VENDOR', ROOT . 'vendor/');
define('HOME', ROOT . 'public_html/');
define('CONFIG', ROOT . 'config/');
define('LOGS', ROOT . 'logs/');
define('VIEWS', ROOT . 'views/');
define('LAYOUTS', VIEWS . 'layouts/');

require_once VENDOR . 'autoload.php';
require_once CONFIG . "routing.php";

spl_autoload_register(function($name) {
    $params = explode("\\", $name );

    $path = dirname(__DIR__);
    for($i=0; $i< count($params)-1; $i++){
        $path .= "/" .  $params[$i];
    }
    $filename = $path . "/" . $params[count($params)-1] . ".php";

    if(file_exists($filename)){
        require_once $filename;
    }
});