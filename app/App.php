<?php

namespace app;

use app\base\Page;
use app\base\Path;
use app\controllers\common\ErrorController;
use base\Routing;

class App
{
    private $page;
    private $path;
    private $routing;
    private $params;

    private $controllerName;
    private $controller;
    private $action;

    /**
     * Routing constructor.
     * @param $page Page;
     * @param $routing Routing;
     */
    public function __construct(&$page, $routing)
    {
        $this->page = $page;
        $this->path = new Path();
        $this->routing = $routing;
        $this->params = array();
    }

    public function run()
    {
        if (!empty($this->routing->rules)) {
//            var_dump($_SERVER['REQUEST_METHOD']);
            foreach ($this->routing->rules as $rule) {
                // проверяем метод
                if (strtoupper($rule->getMethod()) != 'ALL' && strtoupper($rule->getMethod()) !== strtoupper($_SERVER['REQUEST_METHOD'])) {
                    continue;
                }

                // проверяем полное совпадение пути
                if ($this->path->getUrl() === $rule->getLink()) {
                    $this->controllerName = $rule->getController();
                    $this->controller = new $this->controllerName($this->page, $this->params);
                    $this->action = $rule->getAction();

                    $controller = $this->controller;
                    $action = $this->action;

                    $controller->$action();

                    continue;
                }

                // проверяем количество элементов массива пути
                if (count($this->path->getPath()) != $rule->countOfPath) {
                    continue;
                }

                $temp = 1;

                // сверяем элементы массива
                foreach ($this->path->getPath() as $key => $item) {

                    if (substr($rule->path[$key], 0, 1) === '{' && substr($rule->path[$key], -1) === '}') {
                        $rule->path[$key] = str_replace("{", "", $rule->path[$key]);
                        $rule->path[$key] = str_replace("}", "", $rule->path[$key]);
                        $this->params[$rule->path[$key]] = $this->path->getPath()[$key];
                    }
                    else if ($rule->path[$key] !== $this->path->getPath()[$key]) {
                        $temp = 0;
                        continue;
                    }
                }

                if ($temp) {
                    $this->controllerName = $rule->getController();
                    $this->controller = new $this->controllerName($this->page, $this->params);
                    $this->action = $rule->getAction();
                }

                if (isset($this->controller) && isset($this->action)) {
                    $action = $this->action;
                    $this->controller->$action();
                }
            }
        }

        if (empty($this->controller)) {
            $this->controller = new ErrorController($this->page);
            $this->controller->pageNotFound();

            return;
        }

        /*
        if (empty($this->controller)) {
            if (count($this->path->getPath()) <= 3) {
                $this->controllerName = 'app\\controllers\\MainController';

                $this->controller = new $this->controllerName($this->page, $this->params);
                $this->action = empty($this->path->getPath()[1]) ? "index" : $this->path->getPath()[1];
            }
            else {
                $controllerName = empty($this->path->getPath()[1]) ? "MainController" : $this->path->getPath()[1] . "Controller";
                $this->controllerName = 'app\\controllers\\' . $controllerName;

                if (!class_exists($this->controllerName)) {
                    $this->controller = new ErrorController($this->page);
                    $this->controller->pageNotFound();

                    return;
                }

                $this->controller = new $this->controllerName($this->page, $this->params);
                $this->action = empty($this->path->getPath()[2]) ? "index" : $this->path->getPath()[2];
            }

            if (!method_exists($this->controller, $this->action)) {
                $this->controller = new ErrorController($this->page);
                $this->controller->pageNotFound();

                return;
            }

            $controller = $this->controller;
            $action = $this->action;

            if (!empty($this->path->getPath()[3])) {
                $controller->$action($this->path->getPath()[3]);
            }
            else {
                $controller->$action();
            }
        }
        */
    }
}