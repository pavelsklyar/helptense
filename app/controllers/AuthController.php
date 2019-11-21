<?php


namespace app\controllers;


use app\base\interfaces\Controller;
use app\base\Page;

class AuthController implements Controller
{
    private $page;
    private $params;

    /**
     * Controller constructor.
     * @param Page $page - объект страницы
     * @param $params - массив параметров из url
     */
    public function __construct(Page &$page, $params)
    {
        $this->page = $page;
        $this->params = $params;
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