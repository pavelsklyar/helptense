<?php


namespace app\database;


use base\database\Table;

class UsersTable extends Table
{
    public $tableName;

    public function __construct()
    {
        parent::__construct();

        $this->tableName = "users";
    }

    public function getUsers()
    {
        return $this->get(['id', 'name', 'surname', 'email', 'role']);
    }
}