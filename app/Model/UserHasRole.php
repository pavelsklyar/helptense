<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserHasRole extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'user_id', 'role_id'
    ];
}
