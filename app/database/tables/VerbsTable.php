<?php


namespace app\database\tables;


use app\model\Verb;
use base\interfaces\Table;
use Database;
use Requests;

class VerbsTable implements Table
{
    private $tableName = "verbs";
    private $database;

    /**
     * VerbsTable constructor.
     */
    public function __construct()
    {
        $this->database = new Database();
    }

    /**
     * @param Verb $object
     * @return bool
     */
    public function insert($object): bool
    {
        // TODO: Implement insert() method.
    }

    /**
     * @param Verb $object
     * @param string $condition // Name of condition
     * @param string|number $conditionValue // Value of condition
     * @return bool
     */
    public function update($object, $condition, $conditionValue): bool
    {
        // TODO: Implement update() method.
    }

    /**
     * @return bool
     */
    public function deleteAll(): bool
    {
        // TODO: Implement deleteAll() method.
    }

    /**
     * @param string $condition
     * @param string|number $conditionValue
     * @return bool
     */
    public function deleteByCondition($condition, $conditionValue): bool
    {
        // TODO: Implement deleteByCondition() method.
    }

    /**
     * @return array
     */
    public function getAll(): array
    {
        // TODO: Implement getAll() method.
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