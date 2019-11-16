<?php


namespace app\base\interfaces;


use app\base\Page;

interface Controller
{
    /**
     * Controller constructor.
     * @param Page $page - объект страницы
     * @param $params - массив параметров из url
     */
    public function __construct(Page &$page, $params);
}