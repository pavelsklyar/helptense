<?php


namespace app\components;


use app\base\interfaces\Component;
use app\database\tables\VerbsTable;
use app\model\Verb;

class VerbsComponent implements Component
{
    private $table;
    private $model;

    public function __construct()
    {
        $this->table = new VerbsTable();
    }

    public function getAllVerbs()
    {
        $v = $this->table->getAllVerbForms();

        if (isset($v)) {
            for ($key = 0; $key < count($v); $key++) {
                $this->model[] = new Verb(
                    $v[$key]['first_form'],
                    $v[$key]['second_form'],
                    $v[$key]['third_form'],
                    $v[$key]['translate'],
                    $v[$key]['transcription']
                );
            }

//            foreach ($v as $key => $verb) {
//                $this->model[] = new Verb(
//                    $verb[$key]['first_form'],
//                    $verb[$key]['second_form'],
//                    $verb[$key]['third_form'],
//                    $verb[$key]['translate'],
//                    $verb[$key]['transcription']
//                );
//            }
        }
        else {
            $this->model = null;
        }

        return $this->model;
    }

    public function getVerb($verb)
    {
        $v = $this->table->getByCondition('first_form', $verb);

        if ($v) {
            $this->model = new Verb(
                $v[0]['first_form'],
                $v[0]['second_form'],
                $v[0]['third_form'],
                $v[0]['translate'],
                $v[0]['transcription']
            );
            $this->model->setExamples(
                $v[0]['first_form_example_single'],
                $v[0]['first_form_example_multiple'],
                $v[0]['first_form_example_negative'],
                $v[0]['second_form_example_single'],
                $v[0]['second_form_example_multiple'],
                $v[0]['second_form_example_negative'],
                $v[0]['third_form_example_single'],
                $v[0]['third_form_example_multiple'],
                $v[0]['third_form_example_negative']
            );
        }
        else {
            $this->model = null;
        }

        return $this->model;
    }
}