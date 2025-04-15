<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainingCenter extends Model
{
    //uno a muchos:
    public function Teachers(){
        return $this->hasMany('App\Models\Teacher');
    }
    public function courses(){
        return $this->hasMany('App\Models\Courses');
    }
}
