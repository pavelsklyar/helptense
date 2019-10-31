<?php


namespace app\components;


use app\base\interfaces\Component;
use app\model\Verb;

class VerbsComponent implements Component
{
    public function getVerbs()
    {
        $model = new Verb('', '', '', '', '', '', '', '', '', '', '', '');

    }
}