<?php


class Requests
{
    /**
     * @param $tableName
     * @param $data array
     * @return string
     */
    public static function insert($tableName, $data)
    {
        $count = 0;
        $sql = "";

        $sql .= "INSERT INTO `$tableName` (";

        foreach ($data as $column => $value) {
            if ($count)
                $sql .= ", `$column`";
            else
                $sql .= "`$column`";

            $count = 1;
        }

        $sql .= ") VALUES (";
        $count = 0;

        foreach ($data as $column => $value) {
            if ($count)
                $sql .= ", '$value'";
            else
                $sql .= "'$value'";

            $count = 1;
        }

        $sql .= ")";

        return $sql;
    }

    public static function getAll($tableName)
    {
        $sql = "SELECT * FROM `$tableName`";

        return $sql;
    }

    public static function getByCondition($tableName, $condition, $value)
    {
        $sql = "SELECT * FROM `$tableName` WHERE `$condition` LIKE '$value'";

        return $sql;
    }

    public static function getBySeveralConditions($tableName, $conditions)
    {
        $count = 0;
        $sql = "SELECT * FROM `$tableName` WHERE ";

        foreach ($conditions as $condition => $value) {
            if ($count)
                $sql .= " OR ";

            $sql .= "`$condition` LIKE '$value'";
            $count = 1;
        }

        return $sql;
    }
}