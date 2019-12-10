<?php

namespace app\controllers;

use base\controllers\Controller;
use base\Page;

class SearchController extends Controller
{
    private $component;
    private $model;

    public function __construct(Page &$page, $params)
    {
        parent::__construct($page, $params);
    }

    public function verb()
    {
        $verb = $this->page->getPost()['verb'];
        header("Location: /irregular/{$verb}/");
    }
}