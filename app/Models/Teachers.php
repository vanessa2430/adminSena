<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    //Relacion Uno a Muchos (Inversa) con Area
     public function Area(){
        return $this->belongsTo('App\Models\Area');
    }

    //Relacion Uno a Muchos (Inversa) con TrainingCenter
    public function TrainingCenter(){
        return $this->belongsTo('App\Models\TrainingCenter');
    }
    public function course(){
        return $this->belongsTomany('App\Models\Course');
    }

}
