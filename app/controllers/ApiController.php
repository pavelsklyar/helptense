<?php

namespace controllers;

use base\controllers\Controller;
use base\Page;

class ApiController extends Controller
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

    /**
     *  Добавление данных в таблицу VERBS
     *
     *  Через POST-запрос передаётся:
     *  - firstForm
     *  - secondForm
     *  - thirdForm
     *  - translate
     *  - transcription
     *  - firstFormExampleSingle
     *  - firstFormExampleMultiple
     *  - firstFormExampleNegative
     */
    public function verbsCreate()
    {

    }

    /**
     *  Обновление данных в таблице VERBS
     */
    public function verbsUpdate()
    {

    }

    /**
     *  Добавление данных в таблицу VERBS
     */
    public function verbsDelete()
    {

    }
}