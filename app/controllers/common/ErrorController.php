<?php

namespace app\controllers\common;

use base\Page;
use base\View\View;

class ErrorController
{
    private $page;

    /**
     * ErrorController constructor.
     * @param $page Page
     */
    public function __construct(Page &$page)
    {
        $this->page = $page;
    }

    public function pageNotFound()
    {
        $view = new View('errors/404', $this->page);
    }

    public function userNotFound()
    {
        $view = new View('errors/nouser', $this->page);
    }
}