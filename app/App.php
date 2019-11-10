<?php

namespace app;

use app\base\Page;
use app\base\Path;
use app\controllers\common\ErrorController;

class App
{
    private $page;
    private $path;

    private $controllerName;
    private $controller;
    private $action;

    /**
     * Routing constructor.
     * @param $page Page;
     */
    public function __construct(&$page)
    {
        $this->page = $page;
        $pathObj = new Path();
        $this->path = $pathObj->getPath();
    }

    public function run()
    {
        if (count($this->path) < 5) {

            if (count($this->path) < 3) {
                $this->controllerName = 'app\\controllers\\MainController';

                $this->controller = new $this->controllerName($this->page);
                $this->action = empty($this->path[1]) ? "index" : $this->path[1];
            }
            else {
                $controllerName = empty($this->path[1]) ? "MainController" : $this->path[1] . "Controller";
                $this->controllerName = 'app\\controllers\\' . $controllerName;

                if (!class_exists($this->controllerName)) {
                    $this->controller = new ErrorController($this->page);
                    $this->controller->pageNotFound();

                    return;
                }

                $this->controller = new $this->controllerName($this->page);
                $this->action = empty($this->path[2]) ? "index" : $this->path[2];
            }

            if (!method_exists($this->controller, $this->action)) {
                $this->controller = new ErrorController($this->page);
                $this->controller->pageNotFound();

                return;
            }

            $controller = $this->controller;
            $action = $this->action;

            if (!empty($path[3])) {
                $controller->$action($path[3]);
            }
            else {
                $controller->$action();
            }
        }
    }
}