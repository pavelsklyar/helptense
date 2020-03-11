<?php


namespace app\components;


use app\database\LogTable;
use base\component\Component;

class LogComponent extends Component
{
    private $table;

    public function __construct()
    {
        $this->table = new LogTable();
    }

    public function getAll()
    {
        return $this->table->getAll();
    }

    public function getLastN($n)
    {
        return $this->table->getLastN($n);
    }
}