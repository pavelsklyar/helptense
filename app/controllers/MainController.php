<?php

namespace controllers;

use base\Page;
use base\View;

class MainController
{
    /**
     * @var $page Page
     */
    private $page;

    /**
     * MainController constructor.
     * @param Page $page
     */
    public function __construct(Page &$page)
    {
        $this->page = $page;
    }


    public function index()
    {
        $view = new View("site/index", $this->page);
    }
}