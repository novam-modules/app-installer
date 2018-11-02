<?php

namespace App\Models\Auth;

use Modules\Personnel\Models\Contact;
use Modules\Personnel\Models\Employee;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'account_id',  'group_id', 'empno', 'email', 'sec_email','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function Account()
    {
        $relation = $this->belongsTo(Account::class);
        // dump($relation->toSql(), $relation->getBindings());
        return $relation;
    }

    public function Group()
    {
        $relation = $this->belongsTo(Group::class);
        //dump($relation->toSql(), $relation->getBindings());
        return $relation;
    }

    public function Profile()
    {
        $relation = $this->belongsTo(Employee::class);
        //dump($relation->toSql(), $relation->getBindings());
        return $relation;
    }

    public function Contact()
    {
        $relation = $this->belongsTo(Contact::class);
        //dump($relation->toSql(), $relation->getBindings());
        return $relation;
    }
}
