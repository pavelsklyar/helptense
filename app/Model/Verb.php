<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Verb extends Model
{
    public function users()
    {
        return $this->belongsToMany("App\User", 'favourite_verbs');
    }
}
