<?php

namespace App;

use DateTime;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'users';

    protected $guard = "user";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','phone','country','dob','gender','username'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function getAge($user_id){
        $user = User::findOrFail($user_id);
        $from = new DateTime($user->dob);
        $to   = new DateTime('today');
        return $from->diff($to)->y;
    }
}
