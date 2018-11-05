<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    //
    protected $fillable = [
        'name', 'fein', 'admin_id', 'db', 'mail', 'user_id', 'mods', 'file'
    ];

    protected $casts = [
        'db' => 'array', 'mail' => 'array', 'mods' => 'array', 'file' => 'array'
    ];

    public function Users()
    {
        $users =  $this->hasMany(User::class);
        // dump($users->toSql(), $users->getBindings());
        return $users;
    }
}
