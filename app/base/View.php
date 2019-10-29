<?php

namespace base;

class View
{
    private $data = array();
    private $render = false;
    private $page;

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
            echo "template not found!";
            return;
        }

        foreach ($dataArray as $variable => $value) {
            $this->data[$variable] = $value;
        }

        $result = explode("\n", file_get_contents($file));
        $settings = array();

        foreach ($result as $item) {
            if (stristr($item, '$this->'))
                $settings[] = $item;
        }

        unset($result);

        foreach ($settings as $setting) {
            if (stristr($setting, 'title')) {
                preg_match_all('~"([^"]*)"~u', $setting, $matches);
                $param = $matches[1][0];
                $this->page->setTitle($param);
            }
            if (stristr($setting, 'description')) {
                preg_match_all('~"([^"]*)"~u', $setting, $matches);
                $param = $matches[1][0];
                $this->page->setDescription($param);
            }
            if (stristr($setting, 'meta')) {
                preg_match_all('~"([^"]*)"~u', $setting, $matches);
                $param = $matches[1][0];
                $this->page->setMetaTags($param);
            }
        }
    }

    public function __destruct()
    {
        if ($this->render) {
            $this->page->setData($this->data);
            $this->page->setContent($this->render);
//            extract($this->data);
//            include $this->render;
        }
    }
}