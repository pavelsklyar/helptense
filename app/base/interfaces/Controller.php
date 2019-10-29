<?php


namespace base\interfaces;


use base\Page;

interface Controller
{
    public function __construct(Page &$page);
}