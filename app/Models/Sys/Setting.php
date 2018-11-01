<?php

namespace App\Models\Sys;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    //
    protected $fillable = [
        'user_id', 'acct_id', 'key', 'value'
    ];
}
