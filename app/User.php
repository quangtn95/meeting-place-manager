<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'username', 'email', 'password', 'role', 'dep_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function department() {
        return $this->belongTo('App\Department');
    }

    public function meeting() {
        return $this->hasMany('App\Meeting');
    }

    public function form() {
        return $this->hasMany('App\Form');
    }
}
