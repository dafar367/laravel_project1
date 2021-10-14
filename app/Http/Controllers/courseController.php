<?php

namespace App\Http\Controllers;

use App\Models\course;
use Illuminate\Http\Request;

class courseController extends Controller
{
    //

    public function indexCourse(){
        return view("courseproject",[
            'courses'=>course::allData(),
            'title' =>'Courses'
        ]);
    }
}
