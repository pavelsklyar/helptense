<?php

namespace app\controllers;

use app\base\BaseController;
use base\Page;

class SearchController extends BaseController
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