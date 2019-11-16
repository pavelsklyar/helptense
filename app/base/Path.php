<?php

namespace app\base;

class Path
{
    private $url;
    private $path;
    private $params = array();

    /**
     * Path constructor.
     */
    public function __construct()
    {
        $this->url = $_SERVER['REQUEST_URI'];

        if ($cleanURL = stristr($this->url, '?', true)) {
            $this->path = explode('/', $cleanURL);
        } else {
            $this->path = explode('/', $this->url);
        }

        if (strpos($this->url, "?")) {
            $stringWithParams = explode("?", $this->url)[1];

            parse_str($stringWithParams, $this->params);

        }
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return array
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @return array
     */
    public function getParams()
    {
        return $this->params;
    }


}