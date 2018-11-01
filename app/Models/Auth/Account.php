<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    //
    protected $fillable = [
        'name', 'fein', 'admin_id', 'db', 'mail', 'user_id'
    ];

    protected $casts = [
        'db' => 'array', 'mail' => 'array'
    ];
}
