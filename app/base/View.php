<?php

namespace app\base;

class View
{
    private $data = array();
    private $render = false;
    private $page;

    private $pageNotFound = VIEWS . "errors/404.php";

    /**
     * View constructor.
     * @param $template
     * @param $page Page
     * @param array $dataArray
     */
    public function __construct($template, &$page, $dataArray = [])
    {
        $this->page = $page;
        $file = VIEWS . strtolower($template) . ".php";

        if (file_exists($file)) {
            $this->render = $file;
        }
        else {
            $this->render = $this->pageNotFound;
            return;
        }

//        foreach ($dataArray as $variable => $value) {
//            $this->data[$variable] = $value;
//        }
//        array_merge($this->data, $dataArray);
        $this->data = $dataArray;

        $this->data['page'] = $page;

        $page->setData($this->data);

        ob_start();
        extract($this->data);
        require $file;

        $page->setContent(ob_get_clean());
    }

    public function __destruct()
    {
//        if ($this->render) {
//            $this->page->setData($this->data);
//            $this->page->setContent($this->render);
//            extract($this->data);
//            include $this->render;
//        }
    }
}