<?php

namespace app\components;

use app\database\VerbsTable;
use app\model\Verb;
use base\component\Component;

class VerbsComponent extends Component
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
        }
        else {
            $this->model = null;
        }

        return $this->model;
    }

    public function getVerb($verb)
    {
        $v = $this->table->get('*', ['first_form' => $verb]);

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