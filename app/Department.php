<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'dapartments';

    protected $fillable = ['name', 'office_num', 'email'];

    public $timestamp = false;

    public function user() {
    	return $this->hasMany('App\User');
    }
}
