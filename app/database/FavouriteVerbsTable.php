<?php


namespace database;


use base\database\Table;

class FavouriteVerbsTable extends Table
{
    public $verb_id;
    public $user_id;

    public function __construct()
    {
        parent::__construct();

        $this->tableName = 'favourite_verbs';
    }
}