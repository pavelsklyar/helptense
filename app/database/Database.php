<?php


class Database
{
    private $connection;

    /**
     * Database constructor.
     */
    public function __construct()
    {
        $this->connection = Connection::getConnection();
    }


    /**
     *  Получение массива данных по соединению и SQL-запросу
     *
     * @param $sql - запрос к базе даных
     * @return array|null   - массив данных
     */
    public function getQueryArray($sql)
    {
        $res = array();

        if ($query = mysqli_query($this->connection, $sql)) {
            while ($arr = mysqli_fetch_assoc($query)) {
                $res[] = $arr;
            }

            return $res;
        }
        else
            return null;
    }

    public function query($sql)
    {
        return mysqli_query($this->connection, $sql) or die(mysqli_error($this->connection));
    }

    public function getInsertId()
    {
        return mysqli_insert_id($this->connection);
    }
}