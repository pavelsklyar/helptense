<?php


namespace app\controllers;


use app\base\interfaces\Controller;
use app\base\Page;
use app\base\View;
use app\components\VerbsComponent;

class VerbController implements Controller
{
    private $page;
    private $component;
    private $model;
    private $params;

    public function __construct(Page &$page, $params)
    {
        $this->page = $page;
        $this->params = $params;
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