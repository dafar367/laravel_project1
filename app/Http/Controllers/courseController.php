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
            'courses'=>course::where('course_code', $code)->get()->first()
        ]);
    }


    public function indexCourse(){
        $Course = course::all();
        return view("courseproject",[
            'courses'=>$Course,
            'title' =>'Courses'
        ]);
        return view('courseproject', compact('courses', 'title'));
    }
}
