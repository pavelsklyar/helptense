<?php


namespace base\interfaces;


interface Table
{
    /**
     * @param $object // Any class which implements Model
     * @return bool
     */
    public function insert($object) : bool;

    /**
     * @param $object // Any class which implements Model
     * @param string $condition // Name of condition
     * @param string|number $conditionValue // Value of condition
     * @return bool
     */
    public function update($object, $condition, $conditionValue) : bool;

    /**
     * @return bool
     */
    public function deleteAll() : bool;

    /**
     * @param string $condition
     * @param string|number $conditionValue
     * @return bool
     */
    public function deleteByCondition($condition, $conditionValue) : bool;

    /**
     * @return array
     */
    public function getAll() : array;

    /**
     * @param string $condition
     * @param string|number $conditionValue
     * @return array
     */
    public function getByCondition($condition, $conditionValue) : array ;


}