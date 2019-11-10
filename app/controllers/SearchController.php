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

    public function __construct(Page &$page)
    {
        $this->page = $page;
    }

    public function index()
    {
        $get = $this->page->getGet();
        $verb = $get['verb'];

        $this->component = new VerbsComponent();
        $this->model = $this->component->getVerb($verb);

        $view = new View("site/verb", $this->page, ['model' => $this->model]);
    }
}