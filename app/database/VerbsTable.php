<?php

namespace app\database;

use base\database\Table;


class VerbsTable extends Table
{
    public $tableName;

    /**
     * VerbsTable constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->tableName = "verbs";
    }

    public function getAllVerbForms()
    {
        return $this->get(['first_form', 'second_form', 'third_form', 'translate', 'transcription'], null, 'first_form');
    }
}