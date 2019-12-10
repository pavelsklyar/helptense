<?php

namespace app\controllers;

use app\components\VerbsComponent;
use base\controllers\Controller;
use base\Page;
use base\View\View;


class VerbController extends Controller
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
            $view = new View("verbs/irregular", $this->page, ['model' => $this->model]);
        else
            $view = new View("errors/verb", $this->page, ['model' => $this->model]);
    }

    public function phrasal()
    {
        $view = new View("verbs/phrasal", $this->page, ['model' => $this->model]);
    }
}