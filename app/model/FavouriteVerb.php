<?php


namespace model;


use base\model\Model;

class FavouriteVerb extends Model
{
    public $verb_id;
    public $user_id;

    /**
     * FavouriteVerb constructor.
     * @param $verb_id
     * @param $user_id
     */
    public function __construct($verb_id, $user_id)
    {
        $this->verb_id = $verb_id;
        $this->user_id = $user_id;
    }
}