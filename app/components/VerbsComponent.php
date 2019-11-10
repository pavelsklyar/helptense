<?php


namespace app\components;


use app\base\interfaces\Component;
use app\database\tables\VerbsTable;
use app\model\Verb;

class VerbsComponent implements Component
{
    public function getVerb($verb)
    {
        $table = new VerbsTable();
        $v = $table->getBySeveralConditions(['first_form' => $verb, 'second_form' => $verb, 'third_form' => $verb]);

        $model = new Verb($v[0]['first_form'], $v[0]['second_form'], $v[0]['third_form'], $v[0]['translate'], $v[0]['transcription'], '', '', '', '', '', '');

        return $model;
    }
}