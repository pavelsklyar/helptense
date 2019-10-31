<?php


namespace app\base\interfaces;


use app\base\Page;

interface Controller
{
    public function __construct(Page &$page);
}