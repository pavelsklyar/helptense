<?php


namespace app\controllers;


use app\base\interfaces\Controller;
use app\base\Page;
use app\base\View;
use app\components\VerbsComponent;

class SearchController implements Controller
{
    private $page;
    private $component;
    private $model;
    private $params;

    public function __construct(Page &$page, $params)
    {
        $this->page = $page;
        $this->params = $params;
    }

    public function verb()
    {
        $verb = $this->page->getPost()['verb'];
        header("Location: /verb/{$verb}/");
    }
}