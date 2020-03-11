<?php

namespace app\controllers;

use app\base\BaseController;
use base\Page;

class AuthController extends BaseController
{
    private $component;
    private $model;

    /**
     * Controller constructor.
     * @param Page $page - объект страницы
     * @param $params - массив параметров из url
     */
    public function __construct(Page &$page, $params)
    {
        parent::__construct($page, $params);
    }

    public function index()
    {

    }

    public function login()
    {
        $data = $this->page->getPost();
    }

    public function register()
    {
        $data = $this->page->getPost();
    }
}