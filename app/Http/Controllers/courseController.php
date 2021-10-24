<?php

namespace App\Http\Controllers;

use App\Models\course;
use Illuminate\Http\Request;

class courseController extends Controller
{
    //

    public function show($code){
        return view("showcourse",[
            'title' =>'Courses',
            'courses'=>course::dataWithCode($code)
        ]);
    }


    public function indexCourse(){
        return view("courseproject",[
            'courses'=>course::allData(),
            'title' =>'Courses'
        ]);
    }
}
