<?php


namespace app\controllers;


use app\base\BaseController;
use app\components\VerbsComponent;
use base\Page;

class ApiController extends BaseController
{
    /** @var VerbsComponent */
    private $verbsComponent;

    public function __construct(Page &$page, $params)
    {
        parent::__construct($page, $params);

        $this->page->api = true;
        $this->setVerbsComponent();
    }

    public function irregular()
    {
        $post = $this->page->getPost();

//        echo json_encode(['text' => 'hello']);

//        echo json_encode($post);

        $verb = $this->verbsComponent->getVerb($post['first_form']);

        header('Content-Type: application/json');
        if (!is_null($verb)) {
            echo json_encode($verb, JSON_UNESCAPED_UNICODE);
        }
        else {
            echo json_encode(['error' => '404', 'postData' => $_POST, 'getData' => $_GET], JSON_UNESCAPED_UNICODE);
        }
    }

    public function irregularAll()
    {
        $verbs = $this->verbsComponent->getAllVerbs();

        header('Content-Type: application/json');
        echo json_encode($verbs, JSON_UNESCAPED_UNICODE);
    }

    public function setVerbsComponent()
    {
        $this->verbsComponent = new VerbsComponent();
    }
}