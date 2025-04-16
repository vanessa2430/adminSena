<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Apprentices;
use App\Models\Area;
use App\Models\Computers;
use App\Models\Courses;
use App\Models\Teachers;
use App\Models\TrainingCenter;

use Illuminate\Http\Request;

class OrmController extends Controller
{
    public function consultas(){
    //$apprentice=Apprentices::find(3);
    //return $apprentice;

    //$area=Area::find(2);
    //return $area;

    //$computer=Computers::find(1);
    //return $computer;

    //$course=Courses::find(1);
    //return $course;

    //$teacher=Teachers::find(1);
    //return $teacher;

    //$trainingcenter=TrainingCenter::find(5);
    //return $trainingcenter;

    return 
    Teachers::with('Area.TrainingCenter')->get();


    }
}
