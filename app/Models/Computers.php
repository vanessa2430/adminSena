<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Computers extends Model
{
    //
    public function apprentices(){
        return $this->hasOne('App\Models\Apprentices');
    }
}
