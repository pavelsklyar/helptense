<?php


namespace app\controllers;


use app\base\BaseController;
use base\View\View;

class UsersController extends BaseController
{
    public function profile()
    {
        $view = new View("profile/index", $this->page);
    }
}