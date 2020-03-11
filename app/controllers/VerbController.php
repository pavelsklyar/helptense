<?php

namespace app\controllers;

use app\base\BaseController;
use app\components\VerbsComponent;
use base\Page;
use base\View\View;


class VerbController extends BaseController
{
    private $component;
    private $model;

    public function __construct(Page &$page, $params)
    {
        parent::__construct($page, $params);
    }

    public function all()
    {
        $this->component = new VerbsComponent();
        $this->model = $this->component->getAllVerbs();

        $view = new View('verbs/verbs', $this->page, ['model' => $this->model]);
    }

    public function irregular()
    {
        $verb = $this->params['verb'];
        $this->component = new VerbsComponent();

        if ($this->model = $this->component->getVerb($verb))
            new View("verbs/irregular", $this->page, ['model' => $this->model]);
        else
            new View("errors/verb", $this->page, ['model' => $this->model]);
    }

    public function phrasal()
    {
        new View("verbs/phrasal", $this->page, ['model' => $this->model]);
    }
}