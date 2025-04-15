<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Apprentices extends Model
{
    public function courses(){
        return $this->hasMany('App\Models\Courses');
    }
    //muchos a uno
    public function course(){
        return $this->belongsTo('App\Models\Course');
    }
    // 1,1
    public function computer(){
        return $this->belongsTo('App\Models\Computer');
    }
}
