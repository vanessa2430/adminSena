<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    //uno a muchos
    public function Apprentices(){
        return $this->hasMany('App\Models\Apprentices');
    }
    //muchos a uno
    public function trainingCenter(){
        return $this->belongsTo('App\Models\TrainingCenter');
    }
    public function area(){
        return $this->belongsTo('App\Models\Area');
    }
    public function teacher(){
        return $this->belongsTomany('App\Models\Teacher');
    }

}
