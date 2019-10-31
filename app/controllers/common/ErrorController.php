<?php

namespace app\controllers\common;

use app\base\Page;
use app\base\View;

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