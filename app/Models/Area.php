<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    // uno a muchos
    public function teachers(){
        return $this->hasMany('App\Models\Teachers');
    }
    public function courses(){
        return $this->hasMany('App\Models\Courses');
    }
   
}
