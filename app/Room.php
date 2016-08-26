<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';

    protected $fillable = ['name', 'image', 'capacity', 'equipment'];

    //public $timestamp = false;

    public function meeting() {
        return $this->hasMany('App\Meeting', 'id', 'room_id');
    }

    public function form() {
        return $this->hasMany('App\Form');
    }
}
