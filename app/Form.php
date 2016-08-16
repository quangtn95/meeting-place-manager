<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $table = 'forms';

    protected $fillable = ['name', 'time_start', 'time_end', 'num_people', 'description', 'equipment', 'room_id', 'user_id'];

    //public $timestamp = false;

    public function user() {
        return $this->belongTo('App\User');
    }

    public function room() {
        return $this->belongTo('App\Room');
    }
}
