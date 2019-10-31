<?php

namespace app\controllers;

use app\base\interfaces\Controller;
use app\base\Page;
use app\base\View;

class MainController implements Controller
{
    private $page;

    /**
     * MainController constructor.
     * @param $page Page
     */
    public function __construct(Page &$page)
    {
        $this->page = $page;
    }

    public function index()
    {
        $view = new View("site/index", $this->page);
    }

    public function search()
    {
        $data = $this->page->getGet();

        $view = new View("site/search", $this->page);
    }

    public function tense()
    {
        $view = new View("site/tense", $this->page);
    }
}