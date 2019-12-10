<?php

namespace app\database;

use base\database\Requests;
use base\model\Table;


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
        $sql = "SELECT `first_form`, `second_form`, `third_form`, `translate`, `transcription` FROM `{$this->tableName}` GROUP BY `first_form`";

        return $this->database->getQueryArray($sql);
    }

    /**
     * @param string $condition
     * @param string|number $conditionValue
     * @return array
     */
    public function getByCondition($condition, $conditionValue): array
    {
        $sql = Requests::getByCondition($this->tableName, $condition, $conditionValue);

        return $this->database->getQueryArray($sql);
    }

    /**
     * @param array $conditions
     * @return array|null
     */
    public function getBySeveralConditions($conditions)
    {
        $sql = Requests::getBySeveralConditions($this->tableName, $conditions);

        return $this->database->getQueryArray($sql);
    }
}