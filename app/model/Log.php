<?php


namespace app\model;



use app\database\LogTable;
use base\routing\Path;

class Log
{
    public $date;
    public $url;
    public $type;

    public $get = null;
    public $post = null;

    public $status;
    public $message = null;

    public $remote_addr;
    public $user_agent;
    public $redirect_status;

    public function __construct()
    {
        $this->date = date("Y-m-d H:i:s");
        $this->url = $_SERVER['REQUEST_URI'];
        $this->type = $_SERVER['REQUEST_METHOD'];
        $this->remote_addr = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
        $this->user_agent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
        $this->redirect_status = isset($_SERVER['REDIRECT_STATUS']) ? $_SERVER['REDIRECT_STATUS'] : '';
    }

    public function save()
    {
        if ($this->status)
            $this->status = 1;
        else
            $this->status = 0;

        $table = new LogTable();
        return $table->insert($this);
    }
}