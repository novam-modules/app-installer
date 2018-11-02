<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //
    protected $fillable = [
        "account_id", "group_id", "name", "info",   
    ];
}
