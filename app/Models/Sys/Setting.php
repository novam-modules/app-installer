<?php

namespace App\Models\Sys;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    //
    protected $fillable = [
    'user_id', 'acct_id', 'key', 'value'
    ];

    public function scopeForAccount($query)
    {
        $acct_id = auth()->user()->acct_id;
        return $query->where('acct_id', $acct_id)->get();
    }

    // public function setDbAttribute($db)
    // {
    //     dd($db);
    // }

    // public function setMailAttribute($mail)
    // {
    //     dd($mail);
    // }
}
