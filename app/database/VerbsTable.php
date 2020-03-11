<?php

namespace app\database;

use base\database\Table;


class VerbsTable extends Table
{

    public function __construct()
    {
        parent::__construct();

        $this->tableName = "verbs";
    }

    public function getAll()
    {
        return $this->database->getQueryArray("select * from `verbs`");
    }

    public function getAllVerbForms()
    {
        return $this->get(['first_form', 'second_form', 'third_form', 'translate', 'transcription'], null,  ['first_form']);
    }

    public function search($string)
    {
        $sql = "SELECT * FROM `verbs` WHERE `first_form` LIKE '%{$string}%' ORDER BY `first_form`";
        return $this->query($sql)->fetchAll();
    }
}