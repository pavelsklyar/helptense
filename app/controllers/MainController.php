<?php

namespace app\controllers;

use app\base\BaseController;
use app\database\VerbsTable;
use base\Page;
use base\View\View;

class MainController extends BaseController
{
    private $component;
    private $model;

    /**
     * MainController constructor.
     * @param $page Page
     * @param $params array
     */
    public function __construct(Page &$page, $params)
    {
        parent::__construct($page, $params);
    }

    public function index()
    {
        $view = new View("site/index", $this->page);
    }

    public function tense()
    {
        $view = new View("site/tense", $this->page);
    }

    public function grammar()
    {
        $view = new View("site/grammar", $this->page);
    }

    public function live()
    {
        $view = new View("site/live", $this->page);
    }

    public function liveSearch()
    {
        $post = $this->page->getPost();
        $table = new VerbsTable();

        $res = $table->search($post['search']);

        if ($res) {

        }
    }

//    public function search()
//    {
//        $get = $this->page->getGet();
//        $verb = $get['verb'];
//
//        $this->component = new VerbsComponent();
//
//        if ($this->model = $this->component->getVerb($verb))
//            $view = new View("site/verb", $this->page, ['model' => $this->model]);
//        else
//            $view = new View("errors/verb", $this->page, ['model' => $this->model]);
//    }
}