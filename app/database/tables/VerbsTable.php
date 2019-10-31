<?php


namespace app\database\tables;


use app\model\Verb;
use base\interfaces\Table;

class VerbsTable implements Table
{

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

    /**
     * @param string $condition
     * @param string|number $conditionValue
     * @return array
     */
    public function getByCondition($condition, $conditionValue): array
    {
        // TODO: Implement getByCondition() method.
    }
}