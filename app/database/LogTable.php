<?php


namespace app\database;


use base\database\Table;

class LogTable extends Table
{
    /**
     * LogTable constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->tableName = 'logs';
    }

    public function getLastN($n)
    {
        $sql = "
            SELECT
                `id`,
                `date`,
                `url`,
                `type`,
                `get`,
                `post`,
                `status`,
                `message`,
                `remote_addr`,
                `user_agent`,
                `redirect_status`
            FROM
                `{$this->tableName}`
            ORDER BY
                `id` DESC 
            LIMIT {$n}
        ";

        return $this->database->getQueryArray($sql);
    }
}