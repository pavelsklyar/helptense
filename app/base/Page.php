<?php

namespace base;

class Page
{
    private $meta;
    private $styles;

    private $title;
    private $description;
    private $metaTags;

    private $header;
    private $footer;

    private $data;
    private $content;

    public function __construct()
    {
        $this->meta = LAYOUTS . "head/meta.php";
        $this->styles = LAYOUTS . "head/styles.php";
        $this->header = LAYOUTS . "body/header.php";
        $this->footer = LAYOUTS . "body/footer.php";
    }

    public function generate()
    {
        $generator = new Generate($this);
    }

    /**
     * @param string $meta
     */
    public function setMeta($meta)
    {
        $this->meta = $meta;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @param mixed $metaTags
     */
    public function setMetaTags($metaTags)
    {
        $this->metaTags = $metaTags;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getMeta()
    {
        return $this->meta;
    }

    /**
     * @return string
     */
    public function getStyles()
    {
        return $this->styles;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getMetaTags()
    {
        return $this->metaTags;
    }

    /**
     * @return string
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * @return string
     */
    public function getFooter()
    {
        return $this->footer;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }


}