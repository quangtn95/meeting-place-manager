<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    protected $table = 'meetings';

    protected $fillable = ['name', 'time_start', 'time_end', 'num_people', 'description', 'room_id', 'user_id'];

    public $timestamp = false;

    public function user() {
        return $this->belongTo('App\User');
    }

    public function room() {
        return $this->belongTo('App\Room');
    }
}
