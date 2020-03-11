<?php


namespace app\controllers;


use app\base\BaseController;
use app\components\AuthComponent;
use app\components\LogComponent;
use base\Page;
use base\View\View;

class AdminController extends BaseController
{
    private $component;

    public function __construct(Page &$page, $params)
    {
        parent::__construct($page, $params);
    }

    public function auth()
    {
        $post = $this->page->getPost();

        $this->component = new AuthComponent($this->page);
        if ($this->component->login($post['email'], $post['password']))
            header("Location: /api/admin/");
        else
            echo "Авторизоваться не удалось!";
    }

    public function index()
    {
        if (!isset($_SESSION['auth'])) {
            $view = new View('api/auth', $this->page);
            return;
        }

        $this->component = new LogComponent();
        $log = $this->component->getLastN(15);

        $view = new View('api/admin', $this->page, ['log' => $log]);
    }
}