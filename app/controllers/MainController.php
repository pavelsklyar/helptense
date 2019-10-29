<?php

namespace controllers;

use base\interfaces\Controller;
use base\Page;
use base\View;

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

    public function tense()
    {
        $view = new View("site/tense", $this->page);
    }
}