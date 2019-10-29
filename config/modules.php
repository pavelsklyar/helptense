<?php

use base\Path;
use controllers\common\ErrorController;



$pathObj = new Path();
$path = $pathObj->getPath();

//var_dump($path);

if (count($path) < 5) {
    $controllerName = empty($path[1]) ? "MainController" : $path[1] . "Controller";

    if (!class_exists($controllerName)) {
        $controller = new ErrorController();
        $controller->pageNotFound();

        return;
    }

    $controller = new $controllerName();
    $action = empty($path[2]) ? "index" : $path[2];

    if (!method_exists($controller, $action)) {
        $controller = new ErrorController();
        $controller->pageNotFound();

        return;
    }

    if (!empty($path[3])) {
        $controller->$action($path[3]);
    }
    else {
        $controller->$action();
    }
}